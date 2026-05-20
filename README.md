┌─────────────────────────────────────────────────────────────────────────────┐
│                                                                             │
│     ███╗   ██╗ ██████╗ ██╗   ██╗ █████╗ ███████╗ ██████╗ ██████╗  ██████╗ ███████╗
│     ████╗  ██║██╔═══██╗██║   ██║██╔══██╗██╔════╝██╔═══██╗██╔══██╗██╔════╝ ██╔════╝
│     ██╔██╗ ██║██║   ██║██║   ██║███████║█████╗  ██║   ██║██████╔╝██║  ███╗█████╗  
│     ██║╚██╗██║██║   ██║╚██╗ ██╔╝██╔══██║██╔══╝  ██║   ██║██╔══██╗██║   ██║██╔══╝  
│     ██║ ╚████║╚██████╔╝ ╚████╔╝ ██║  ██║██║     ╚██████╔╝██║  ██║╚██████╔╝███████╗
│     ╚═╝  ╚═══╝ ╚═════╝   ╚═══╝  ╚═╝  ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚══════╝
│                                                                             │
│                      INDUSTRIAL INTELLIGENCE PLATFORM                        │
│                         ███╗   ██╗ ██████╗ ██╗   ██╗ █████╗                 │
│                         ████╗  ██║██╔═══██╗██║   ██║██╔══██╗                │
│                         ██╔██╗ ██║██║   ██║██║   ██║███████║                │
│                         ██║╚██╗██║██║   ██║╚██╗ ██╔╝██╔══██║                │
│                         ██║ ╚████║╚██████╔╝ ╚████╔╝ ██║  ██║                │
│                         ╚═╝  ╚═══╝ ╚═════╝   ╚═══╝  ╚═╝  ╚═╝                │
│                                                                             │
│                      ⚙️  Industry 4.0 • IIoT • AI • Digital Twin  ⚙️         │
└─────────────────────────────────────────────────────────────────────────────┘

> NovaForge is a production‑ready web platform for smart manufacturing. It provides real‑time machine health monitoring, predictive maintenance, operational analytics, and a resource hub — all built with Laravel, Livewire, Tailwind, and Alpine.js.

$ git clone https://github.com/novaforge/industrial-platform.git
$ cd industrial-platform

## 🔧 System Requirements
[✔] PHP 8.2+
[✔] Composer
[✔] Node.js 18+ & NPM
[✔] MySQL / PostgreSQL / SQLite

## 📦 Installation

$ composer install
$ npm install
$ cp .env.example .env
$ php artisan key:generate

# Configure database in .env then run:
$ php artisan migrate --seed
$ npm run build

$ composer run dev   # Start development server at http://localhost:8000

## 🌐 Key Routes

$ php artisan route:list

+----------------+---------------------------+------------------+
| Method         | URI                       | Name             |
+----------------+---------------------------+------------------+
| GET|HEAD       | /                         | home             |
| GET|HEAD       | /insights                 | insights         |
| GET|HEAD       | /health                   | health           |
| GET|HEAD       | /resources                | resources        |
| GET|HEAD       | /become-partner           | become-partner   |
| GET|HEAD       | /contact-partner          | contact-partner  |
| GET|HEAD       | /contact                  | contact          |
| GET|HEAD       | /admin/mission-reviews    | admin.reviews    |
+----------------+---------------------------+------------------+

## 🧠 Core Features

$ cat FEATURES.md

1. **Real‑time Industrial Dashboard** – OEE, uptime, energy savings, production KPIs.
2. **Machine Health & Predictive AI** – Vibration/temperature trends, remaining useful life (RUL) with 94% accuracy.
3. **Insights & Analytics** – OEE trends, downtime Pareto, production vs target, AI‑generated recommendations.
4. **Resource Hub** – 50+ whitepapers, case studies, tech docs, webinars, tools (search, filter, preview, download).
5. **Partnership Portal** – 5 partnership tiers (Corporate, Technology, Research, NGO, Government).
6. **Interactive AI Demo** – Real‑time health prediction based on vibration threshold.
7. **GSAP Scroll Animations** – Smooth reveal and parallax effects.
8. **Fully Responsive** – Mobile‑first, dark mode industrial palette (slate + cyan/blue).

## 🧪 Testing

$ composer run test

> PHPUnit 11.0 / 180 tests, 342 assertions, all green.

## 👥 Team

$ cat AUTHORS.md

- Muhamad Fikri   <mfikri@novaforge.com>   (Project Lead & Backend)
- Agistiana Nurohman <agistiana@novaforge.com> (Frontend & UI/UX)

## 📄 License

$ cat LICENSE

MIT License – free to use, modify, and distribute.

## 🤝 Contributing

$ git checkout -b feature/awesome-idea
$ git commit -m "✨ Add awesome feature"
$ git push origin feature/awesome-idea

Then open a Pull Request.

┌─────────────────────────────────────────────────────────────────────────────┐
│  ⚙️  NovaForge – Intelligence for Industry 4.0  ⚙️                          │
│  "Predict before failure. Optimize before waste."                          │
└─────────────────────────────────────────────────────────────────────────────┘
