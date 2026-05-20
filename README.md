┌─────────────────────────────────────────────────────────────────────────────┐
│                                                                             │
│     ███╗   ██╗ ██████╗ ██╗   ██╗ █████╗ ███████╗ ██████╗ ██████╗ ███████╗   │
│     ████╗  ██║██╔═══██╗██║   ██║██╔══██╗██╔════╝██╔═══██╗██╔══██╗██╔════╝   │
│     ██╔██╗ ██║██║   ██║██║   ██║███████║█████╗  ██║   ██║██████╔╝█████╗     │
│     ██║╚██╗██║██║   ██║╚██╗ ██╔╝██╔══██║██╔══╝  ██║   ██║██╔══██╗██╔══╝     │
│     ██║ ╚████║╚██████╔╝ ╚████╔╝ ██║  ██║██║     ╚██████╔╝██║  ██║███████╗   │
│     ╚═╝  ╚═══╝ ╚═════╝   ╚═══╝  ╚═╝  ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═╝╚══════╝   │
│                                                                             │
│                      INDUSTRIAL INTELLIGENCE PLATFORM                        │
│                                                                             │
└─────────────────────────────────────────────────────────────────────────────┘

> NovaForge is a production‑ready industrial web platform for smart manufacturing.
  It provides real‑time machine health monitoring, predictive maintenance,
  operational analytics, and a resource hub — built with Laravel, Livewire,
  Tailwind CSS, and Alpine.js.

$ git clone https://github.com/novaforge/novaforge.git
$ cd novaforge

┌─────────────────────────────────────────────────────────────────────────────┐
│ SYSTEM REQUIREMENTS                                                         │
└─────────────────────────────────────────────────────────────────────────────┘
  ✔ PHP 8.2+
  ✔ Composer
  ✔ Node.js 18+ & NPM
  ✔ MySQL / PostgreSQL / SQLite

┌─────────────────────────────────────────────────────────────────────────────┐
│ INSTALLATION                                                                │
└─────────────────────────────────────────────────────────────────────────────┘

$ composer install
$ npm install
$ cp .env.example .env
$ php artisan key:generate

# Configure your database in .env, then run:

$ php artisan migrate --seed
$ npm run build

# Start development server:

$ composer run dev
➜ Server running at http://localhost:8000

┌─────────────────────────────────────────────────────────────────────────────┐
│ KEY ROUTES                                                                  │
└─────────────────────────────────────────────────────────────────────────────┘

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
+----------------+---------------------------+------------------+

┌─────────────────────────────────────────────────────────────────────────────┐
│ CORE FEATURES                                                               │
└─────────────────────────────────────────────────────────────────────────────┘

  ▪ Real‑time Industrial Dashboard – OEE, uptime, energy savings.
  ▪ Machine Health & Predictive AI – Vibration/temperature trends, RUL.
  ▪ Insights & Analytics – OEE trends, downtime root cause, AI recommendations.
  ▪ Resource Hub – Whitepapers, case studies, docs, webinars, tools.
  ▪ Partnership Portal – 5 partnership tiers (Corporate, Technology, etc.).
  ▪ Interactive AI Demo – Vibration‑based health simulation.
  ▪ GSAP Scroll Animations – Smooth reveal effects.
  ▪ Fully Responsive – Dark palette (slate + cyan/blue).

┌─────────────────────────────────────────────────────────────────────────────┐
│ TESTING                                                                     │
└─────────────────────────────────────────────────────────────────────────────┘

$ composer run test

┌─────────────────────────────────────────────────────────────────────────────┐
│ TEAM                                                                        │
└─────────────────────────────────────────────────────────────────────────────┘

  ▪ Muhamad Fikri      – Project Lead & Full‑stack Developer
  ▪ Agistiana Nurohman – Frontend Developer & UI/UX

┌─────────────────────────────────────────────────────────────────────────────┐
│ LICENSE                                                                     │
└─────────────────────────────────────────────────────────────────────────────┘

  MIT License – free to use, modify, and distribute.

┌─────────────────────────────────────────────────────────────────────────────┐
│ CONTRIBUTING                                                                │
└─────────────────────────────────────────────────────────────────────────────┘

$ git checkout -b feature/awesome-idea
$ git commit -m "✨ Add awesome feature"
$ git push origin feature/awesome-idea

Then open a Pull Request.

┌─────────────────────────────────────────────────────────────────────────────┐
│                                                                             │
│   ⚙️  NovaForge – Intelligence for Industry 4.0  ⚙️                         │
│   "Predict before failure. Optimize before waste."                         │
│                                                                             │
└─────────────────────────────────────────────────────────────────────────────┘
