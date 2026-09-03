# April Chiao • Hotel & Travel UGC Creator Website

Luxury showcase website and media kit for **April Chiao** ([@bnb_chiao](https://www.instagram.com/bnb_chiao)), built with **Laravel 12**, **Livewire 4**, **Alpine.js**, and **Tailwind CSS v4**.

---

## ✨ Features

- **Luxury Art Direction**: Custom warm linen, champagne gold, and blush rose color palette.
- **Curated Stays Catalog**: Interactive filtering by categories (*All Curations*, *Boutique Villas*, *Luxury Resorts*, *Ocean & Nature*) and instant live search.
- **Quick-View Stays Modal**: High-definition photo showcase, stay highlights, creator review notes, and direct Instagram Reel links.
- **Media Kit & Demographics**: 68K+ engaged audience metrics, demographics breakdown, and multi-platform reach.
- **Partnership Packages**: 4 structured collaboration services.
- **Contact Form with Automated Email**: Full database persistence in SQLite and instant email notifications sent to `bnb.chiao@gmail.com` via Laravel Mail (`InquiryReceived`).
- **Automated GitHub Pages Deployment**: Pre-configured GitHub Actions workflow automatically deploying the static build from `dist/`.

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12, PHP 8.2+
- **Database**: SQLite (Eloquent ORM)
- **Frontend / Interactivity**: Livewire 4, Alpine.js 3
- **CSS Framework**: Tailwind CSS v4 (@tailwindcss/vite)
- **Asset Bundling**: Vite 8
- **Testing**: PHPUnit / Laravel Feature Tests (100% passing)

---

## 🚀 Local Development Setup

### 1. Clone & Install Dependencies
```bash
git clone git@github.com:maxou0789/bnb_chiao.git
cd bnb_chiao

composer install
npm install
```

### 2. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Migration & Seeding
```bash
php artisan migrate --seed
```

### 4. Configure Email (Optional for Real Email Sending)
In your `.env` file, set your SMTP / Gmail / Resend credentials:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="bnb.chiao@gmail.com"
MAIL_FROM_NAME="April Chiao Website"
```

### 5. Run Development Servers
```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Vite Hot Reload
npm run dev
```

---

## 🧪 Running Automated Tests

```bash
php artisan test
```

---

## 📦 Static Export for GitHub Pages

To re-export the standalone static HTML distribution:
```bash
npm run export
```
This compiles the latest assets into `dist/` and updates `dist/index.html`.
