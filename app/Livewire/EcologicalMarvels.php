<?php

namespace App\Livewire;

use Livewire\Component;

class EcologicalMarvels extends Component
{
    // Properti untuk menyimpan filter yang dipilih
    public $filter = 'all';

    // Properti untuk menyimpan data marvel yang ditonjolkan di hero
    public $featuredMarvel;

    // Properti untuk menyimpan SEMUA data marvel
    public $allMarvels;

    /**
     * Mount: Dijalankan sekali saat komponen dimuat
     * Ini adalah tempat kita menyiapkan semua data.
     */
    public function mount()
    {
        // Data untuk Hero Section
        $this->featuredMarvel = [
            'id' => 'raja-ampat',
            'name' => 'Raja Ampat: Jantung Segitiga Karang Dunia',
            'type' => 'marine',
            'shortDescription' => 'Bukan sekadar tempat menyelam, Raja Ampat adalah sebuah katedral bawah laut dengan 75% spesies karang dunia.',
            'fullDescription' => 'Terletak di ujung barat Papua, Raja Ampat adalah sebuah kepulauan yang keindahannya melampaui imajinasi.',
            'imageUrl' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=2070&q=80',
            'location' => 'Papua Barat Daya',
            'keyFact' => 'Ditemukan lebih dari 1.500 spesies ikan dan 600 spesies karang keras di sini.',
            'quote' => 'Raja Ampat adalah Sistine Chapel dari dunia bawah laut.',
        ];

        // Data untuk Timeline
        $this->allMarvels = [
            [
                'id' => 'leuser',
                'name' => 'Hutan Leuser: Yang Terakhir dari Kalangan',
                'type' => 'terrestrial',
                'shortDescription' => 'Warisan Dunia yang menjadi benteng terakhir bagi mamalia besar Sumatera seperti harimau, orangutan, dan badak.',
                'fullDescription' => 'Melintasi Aceh hingga Sumatera Utara, Taman Nasional Gunung Leuser adalah ekosistem yang utuh dan dramatis.',
                'imageUrl' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Aceh & Sumatera Utara',
                'keyFact' => 'Satu-satunya tempat di dunia di mana harimau, orangutan, gajah, dan badak hidup berdampingan.',
                'quote' => 'Di sini, Bumi masih bernapas dengan napas purba.',
            ],
            [
                'id' => 'komodo',
                'name' => 'Komodo: Negeri Naga Purba',
                'type' => 'terrestrial',
                'shortDescription' => 'Berjalanlah di antara predator prasejarah terakhir di Bumi dalam lanskap savana yang dramatis dan pantai yang eksotis.',
                'fullDescription' => 'Pulau Komodo dan Rinca adalah satu-satunya tempat di dunia untuk melihat komodo di habitat alaminya.',
                'imageUrl' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Nusa Tenggara Timur',
                'keyFact' => 'Komodo bisa mencapai panjang 3 meter dan memiliki bisa yang mematikan.',
                'quote' => 'Berdiri di sini adalah seperti melangkah ke zaman lain.',
            ],
            [
                'id' => 'bromo',
                'name' => 'Bromo & Semeru: Dua Raja Vulkanik',
                'type' => 'mountain',
                'shortDescription' => 'Pemandangan epik dari lautan pasir dan gunung berapi aktif yang menunjukkan kekuatan penciptaan dan kehancuran Bumi.',
                'fullDescription' => 'Taman Nasional Bromo Tengger Semeru adalah lanskap yang keluar dari mimpi.',
                'imageUrl' => 'https://images.unsplash.com/photo-1596445836566-3b9c7c8072c5?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Jawa Timur',
                'keyFact' => 'Puncak Semeru, Mahameru, adalah puncak tertinggi di pulau Jawa (3.676 mdpl).',
                'quote' => 'Sebuah pengingat akan kekuatan purba yang membentuk nusantara.',
            ],
            [
                'id' => 'bunaken',
                'name' => 'Bunaken: Dinding Karang Vertikal',
                'type' => 'marine',
                'shortDescription' => 'Jelajahi dinding karang curam yang terjun ke kedalaman biru, rumah bagi ikan-ikan tropis yang sangat beragam.',
                'fullDescription' => 'Taman Nasional Laut Bunaken terkenal karena "Bunaken Timur", sebuah dinding karang vertikal yang sangat besar.',
                'imageUrl' => 'https://images.unsplash.com/photo-1578053221053-0250640c3eb7?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Sulawesi Utara',
                'keyFact' => 'Memiliki 20 titik selam dengan kedalaman bervariasi hingga 1.344 meter.',
                'quote' => 'Dinding kehidupan yang menjulang dari dasar laut.',
            ],
            [
                'id' => 'rinjani',
                'name' => 'Rinjani: Puncak dan Danau Segara Anak',
                'type' => 'mountain',
                'shortDescription' => 'Pendakian menantang ke puncak gunung berapi tertinggi kedua di Indonesia, dengan hadiah berupa danau kawah yang menakjubkan.',
                'fullDescription' => 'Gunung Rinjani adalah sebuah ikon di Lombok. Pendakian menuju puncaknya adalah perjalanan melalui berbagai ekosistem.',
                'imageUrl' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Nusa Tenggara Barat',
                'keyFact' => 'Danau Segara Anak adalah danau kawah vulkanik aktif yang airnya berubah warna.',
                'quote' => 'Sebuah perjalanan fisik dan spiritual yang mengubah hidup.',
            ],
            [
                'id' => 'kalimantan-mangrove',
                'name' => 'Hutan Bakau Kalimantan: Perisai Pesisir',
                'type' => 'marine',
                'shortDescription' => 'Jaringan akar yang rumit yang melindungi garis pantai, menjadi tempat peneluran ikan, dan menyimpan karbon dalam jumlah besar.',
                'fullDescription' => 'Hutan bakau Kalimantan adalah garis pertahanan alami terhadap badai dan abrasi. Ekosistem ini sangat produktif.',
                'imageUrl' => 'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?auto=format&fit=crop&w=2070&q=80',
                'location' => 'Pesisir Kalimantan',
                'keyFact' => 'Hutan bakau dapat menyimpan karbon hingga 4 kali lebih banyak daripada hutan daratan.',
                'quote' => 'Penjaga diam yang melindungi daratan dari amukan laut.',
            ],
        ];
    }

    /**
     * Metode ini dipanggil oleh tombol filter di Blade (wire:click)
     */
    public function setFilter($type)
    {
        $this->filter = $type;
    }

    /**
     * Computed Property: Menyediakan data yang sudah difilter ke Blade
     * Blade akan memanggil ini dengan $this->filteredMarvels
     */
    public function getFilteredMarvelsProperty()
    {
        // Mulai dengan collection agar kita bisa menggunakan metode collection
        $marvels = collect($this->allMarvels);

        // Jika filter 'all', kembalikan SEMUA marvel sebagai collection
        if ($this->filter === 'all') {
            return $marvels;
        }

        // Jika tidak, kembalikan marvel yang sudah difilter (juga sebagai collection)
        return $marvels->where('type', $this->filter);
    }

    /**
     * Render: Menentukan file Blade mana yang akan digunakan
     */
    public function render()
    {
        return view('livewire.ecological-marvels');
    }
}
