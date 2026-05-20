erikut adalah README yang sudah disesuaikan dengan tema NovaForge – Industrial Intelligence Platform (smart manufacturing, IIoT, predictive maintenance, dan asset health). Semua referensi lingkungan, eco, challenge, report, dll telah dihapus dan diganti dengan fitur industri modern sesuai website yang telah kita bangun.
markdown

# NovaForge – Industrial Intelligence Platform 🏭

[![Laravel](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![Livewire](https://img.shields.io/badge/Livewire-3.6-green.svg)](https://livewire.laravel.com)
[![TailwindCSS](https://img.shields.io/badge/Tailwind-3.4-38BDF8)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-77C1FF)](https://alpinejs.dev)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

**NovaForge** is a cutting‑edge industrial web platform that helps manufacturers monitor machine health, predict failures, optimize energy consumption, and access actionable resources. Built with Laravel, Livewire, Tailwind CSS, and Alpine.js, it delivers a modern, real‑time dashboard for Industry 4.0 operations.

![NovaForge Banner](public/assets/home/hero.png)

## 📋 Table of Contents

- [✨ Features](#-features)
- [🛠️ Tech Stack](#️-tech-stack)
- [🚀 Installation](#-installation)
- [🎯 Usage](#-usage)
- [👨‍💼 Admin Access (if applicable)](#-admin-access-if-applicable)
- [📁 Project Structure](#-project-structure)
- [🛣️ Key Routes](#️-key-routes)
- [🧪 Testing](#-testing)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)
- [🙏 Acknowledgments](#-acknowledgments)

## ✨ Features

- **Real‑time Industrial Dashboard** – Overview of OEE, uptime, energy savings, and production metrics.
- **Machine Health & Predictive Maintenance** – AI‑powered alerts, vibration/temperature trends, remaining useful life (RUL) predictions.
- **Advanced Analytics (Insights)** – OEE trends, downtime root cause, production vs target charts, and AI‑generated operational insights.
- **Resource Hub** – Searchable library of whitepapers, case studies, tech docs, webinars, and tools with preview & download.
- **Partnership Portal** – Corporate, technology, research, NGO, and government partnership options with inquiry forms.
- **Industrial Map (demo)** – Interactive map showing key plant locations and performance indicators.
- **Interactive AI Demo** – Live vibration‑based health prediction (threshold simulation).
- **Responsive & Modern UI** – Dark/light‑optimized palette (slate + cyan/blue), glassmorphism, smooth animations (GSAP/ScrollTrigger).
- **Admin Panel** – Manage missions, reviews, and platform content (if configured).

## 🛠️ Tech Stack

### Backend
- **Laravel 12** – PHP framework
- **PHP 8.2+**
- **Livewire 3.6** – Reactive components without writing JavaScript
- **Laravel Breeze** – Authentication scaffolding

### Frontend
- **Tailwind CSS** – Utility‑first styling
- **Alpine.js** – Lightweight interactivity
- **Chart.js** – Data visualizations (OEE, downtime, production)
- **GSAP + ScrollTrigger** – Advanced scroll animations
- **Vite** – Build tool

### Database & Tools
- **MySQL / SQLite**
- **Composer**
- **NPM / Node.js**

## 🚀 Installation

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL or SQLite

### Setup Steps

1. **Clone repository**
   ```bash
   git clone https://github.com/your-org/NovaForge.git
   cd NovaForge

    Install PHP dependencies
    bash

    composer install

    Install Node dependencies
    bash

    npm install

    Environment configuration
    bash

    cp .env.example .env
    php artisan key:generate

    Configure database in .env (example for MySQL):
    env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=novaforge
    DB_USERNAME=root
    DB_PASSWORD=

    Run migrations & seeders
    bash

    php artisan migrate --seed

    Build frontend assets
    bash

    npm run build

🎯 Usage
Development (with hot reload)
bash

composer run dev

This starts:

    Laravel server at http://localhost:8000

    Vite dev server for asset compilation

Production
bash

php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build

👨‍💼 Admin Access (if applicable)

If the default seeder includes an admin user:

    Email: admin@novaforge.com

    Password: password

Admin routes (e.g., mission reviews) are protected by auth and admin middleware.
📁 Project Structure (relevant sections)
text

novaforge/
├── app/
│   ├── Http/Controllers/
│   ├── Livewire/            # Livewire components for dashboard, insights, etc.
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── home.blade.php
│       ├── insights.blade.php
│       ├── health.blade.php
│       ├── resources.blade.php
│       ├── become-partner.blade.php
│       ├── contact-partner.blade.php
│       └── ...
├── routes/web.php
└── ...

🛣️ Key Routes
Route	Description	Auth Required
/	Home / Dashboard overview	No
/insights	Analytics & OEE insights	No
/health	Machine health monitoring & predictions	No
/resources	Resource hub (whitepapers, case studies, etc.)	No
/become-partner	Partnership options & information	No
/contact-partner	Partnership inquiry form	No
/contact	General contact form	No
/admin/*	Admin panel (if implemented)	Yes (admin)
🧪 Testing

Run PHPUnit tests:
bash

composer run test

📊 Project Metrics

https://img.shields.io/github/issues/your-org/NovaForge
https://img.shields.io/github/stars/your-org/NovaForge
https://img.shields.io/github/license/your-org/NovaForge
👥 Collaborators

    Muhamad Fikri – Project Lead & Full‑Stack Developer

    Agistiana Nurohman – Frontend Developer & UI/UX

🤝 Contributing

Contributions are welcome! Please follow standard GitHub flow:

    Fork the repo

    Create a feature branch (git checkout -b feature/amazing-feature)

    Commit changes (git commit -m 'Add amazing feature')

    Push to branch (git push origin feature/amazing-feature)

    Open a Pull Request

Development Guidelines

    Follow PSR‑12 coding standards

    Ensure responsive design

    Write tests for new features

🐛 Issue Reporting

Open an issue on GitHub with:

    Clear description

    Steps to reproduce

    Expected vs actual behavior

    Screenshots (if applicable)

📄 License

This project is licensed under the MIT License – see the LICENSE file.
🙏 Acknowledgments

    Laravel – The PHP framework

    Livewire – Reactive components

    Tailwind CSS & Alpine.js – Modern frontend tools

    Chart.js & GSAP – Visualizations and animations

    All open‑source contributors
