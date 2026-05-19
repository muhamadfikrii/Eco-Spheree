import './bootstrap';
import './gsap';
import 'animate.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Define weatherWidget in Alpine.data before starting Alpine
Alpine.data('weatherWidget', () => ({
    permissionDenied: false,

    init() {
        const locationDenied = localStorage.getItem('location_denied');
        if (locationDenied === 'true') {
            return;
        }

        if (!navigator.geolocation) {
            this.showLocationError(
                'Your browser does not support location features.',
            );
            return;
        }

        navigator.geolocation.getCurrentPosition(
            (pos) => {
                const { latitude, longitude } = pos.coords;
                // This will be handled by Livewire
                console.log('Location obtained:', latitude, longitude);
            },
            (err) => {
                let msg = 'Failed to detect location.';
                if (err.code === 1) {
                    msg =
                        'Location access denied. Please enable location permissions in your browser.';
                    localStorage.setItem('location_denied', 'true');
                } else if (err.code === 2) {
                    msg =
                        'Location unavailable. Please ensure your GPS is active.';
                }
                this.showLocationError(msg);
            },
        );
    },

    showLocationError(msg) {
        this.permissionDenied = true;
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'warning',
                title: 'Location Inactive',
                text: msg,
                confirmButtonText: 'OK, Got it',
                background: '#fff',
                color: '#1e293b',
            });
        } else {
            alert(msg);
        }
    },
}));

Alpine.start();
