<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WeatherWidget extends Component
{
    public $weatherData;
    public $loading = true;
    public $error = null;
    public $city = 'Your Location';
    public $latitude = -6.2088;
    public $longitude = 106.8456; 
    public $lastUpdated;
    public $currentAnimation = 'clear';
    public $autoRefresh = true;
    public $componentId;

    protected $listeners = ['updateLocation' => 'setLocation'];

    public function mount()
    {
        $this->componentId = $this->getId();
        $this->fetchWeatherData();
    }

 
    public function setLocation($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];

        try {
            $geoResponse = Http::get('https://nominatim.openstreetmap.org/reverse', [
                'lat' => $this->latitude,
                'lon' => $this->longitude,
                'format' => 'json',
                'zoom' => 10,
                'addressdetails' => 1,
            ]);

            if ($geoResponse->ok()) {
                $geoData = $geoResponse->json();
                $this->city = $geoData['address']['city']
                    ?? $geoData['address']['town']
                    ?? $geoData['address']['village']
                    ?? 'Unknown Location';
                logger()->info('User location city: '.$this->city);
            }
        } catch (\Exception $e) {
            logger()->warning('Failed to get city name: '.$e->getMessage());
            $this->city = 'Unknown Location';
        }

        $this->fetchWeatherData();
    }

    public function fetchWeatherData()
    {
        $this->loading = true;
        $this->error = null;

        try {
            $this->weatherData = $this->fetchFromOpenMeteo();
            $this->lastUpdated = now()->format('H:i:s');
            $this->setWeatherAnimation();
        } catch (\Exception $e) {
            $this->error = 'Failed to fetch weather data. Please refresh.';
            logger()->error('Weather API Error: '.$e->getMessage());
        }

        $this->loading = false;
    }

    private function fetchFromOpenMeteo()
    {
        $cacheKey = 'weather_'.md5($this->latitude.'_'.$this->longitude);

        return Cache::remember($cacheKey, 300, function () {
            $response = Http::timeout(10)
                ->retry(3, 1000)
                ->get('https://api.open-meteo.com/v1/forecast', [
                    'latitude' => $this->latitude,
                    'longitude' => $this->longitude,
                    'current_weather' => 'true',
                    'timezone' => 'Asia/Jakarta',
                ]);

            if ($response->failed()) {
                throw new \Exception('API request failed');
            }

            $data = $response->json();

            return $this->transformData($data);
        });
    }

    private function transformData($data)
    {
        if (! isset($data['current_weather'])) {
            throw new \Exception('Invalid data structure');
        }

        $current = $data['current_weather'];
        $weatherInfo = $this->mapWeatherCode($current['weathercode']);

        return [
            'name' => $this->city,
            'weather' => [
                [
                    'main' => $weatherInfo['main'],
                    'description' => $weatherInfo['description'],
                ],
            ],
            'main' => [
                'temp' => round($current['temperature']),
                'feels_like' => round($current['temperature'] + $this->getFeelsLikeAdjustment($current['temperature'])),
            ],
        ];
    }

    private function mapWeatherCode($code)
    {
        $map = [
            0 => ['main' => 'Clear', 'description' => 'Clear', 'animation' => 'sunny'],
            1 => ['main' => 'Clear', 'description' => 'Mainly Clear', 'animation' => 'sunny'],
            2 => ['main' => 'Clouds', 'description' => 'Partly Cloudy', 'animation' => 'cloudy'],
            3 => ['main' => 'Clouds', 'description' => 'Overcast', 'animation' => 'cloudy'],
            61 => ['main' => 'Rain', 'description' => 'Rain', 'animation' => 'rainy'],
            95 => ['main' => 'Storm', 'description' => 'Thunderstorm', 'animation' => 'storm'],
        ];

        return $map[$code] ?? $map[0];
    }

    private function getFeelsLikeAdjustment($temp)
    {
        if ($temp > 30) {
            return rand(3, 5);
        }
        if ($temp > 25) {
            return rand(2, 4);
        }

        return rand(1, 2);
    }

    private function setWeatherAnimation()
    {
        $main = strtolower($this->weatherData['weather'][0]['main']);
        $map = [
            'clear' => 'sunny',
            'clouds' => 'cloudy',
            'rain' => 'rainy',
            'storm' => 'storm',
        ];
        $this->currentAnimation = $map[$main] ?? 'sunny';
        
        $this->dispatch('weatherAnimationUpdated', animation: $this->currentAnimation);
    }

    public function refreshWeather()
    {
        Cache::forget('weather_'.md5($this->latitude.'_'.$this->longitude));
        $this->fetchWeatherData();
    }

    public function toggleAutoRefresh()
    {
        $this->autoRefresh = ! $this->autoRefresh;
    }

    public function render()
    {
        return view('livewire.components.weather-widget');
    }
}