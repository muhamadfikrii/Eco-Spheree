import './bootstrap';
import './gsap'; 
import 'animate.css'; 
import Alpine from 'alpinejs';

// Impor data dari file terpisah
import { orbitingNodes } from './dataEnvironmental';

// Buat Alpine.js tersedia secara global
window.Alpine = Alpine;

// Buat data `orbitingNodes` tersedia secara global agar bisa diakses oleh fungsi modernEcosphere
window.orbitingNodes = orbitingNodes;

// Mulai Alpine.js
Alpine.start();