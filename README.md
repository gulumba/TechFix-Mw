# TechFix Solutions Malawi — Business Website

Premium dark-themed technology services website for **TechFix Solutions Malawi**, based in Chigumula, Blantyre, Malawi.

## Features

- Responsive multi-page website (Home, Services, Tracking, Appliance Repair, Computer Repair, About, Portfolio, Contact)
- Dark luxury theme (black / white / red accents) with glassmorphism and animations
- Bootstrap 5 + custom CSS + Font Awesome
- WhatsApp & click-to-call integration
- Interactive forms with AJAX submission and toast notifications
- Portfolio filtering
- FAQ accordion
- SEO meta tags + Schema.org LocalBusiness
- Simple PHP admin dashboard with file-based storage (JSON)
- Form processing for enquiries, appliance bookings, computer requests

## Requirements

- PHP 7.4+ (tested on 8.x)
- Apache or any PHP-capable web server
- Write permissions on `database/data/` folder

## Quick Start

1. Place the `techfix-malawi` folder on your web server (or point the document root to it).
2. Ensure the `database/data/` directory is writable by the web server.
3. Open the site in a browser.
4. Admin panel: `/admin/login.php`
   - **Change the password** in `admin/login.php` before going live.

## Contact Numbers Used

- +265 883 924 080

WhatsApp links use +265 883 924 080.

## Notes

- No MySQL required — data is stored in JSON files under `database/data/`.
- For production, consider adding CSRF protection, rate limiting, and moving to a proper database.
- Update the Open Graph URL and Schema URL in `includes/header.php` when you have a live domain.
- The Google Maps section links to a search for Chigumula, Blantyre; replace with an embedded map iframe if desired.

## Folder Structure

```
techfix-malawi/
├── admin/           # Admin login & dashboard
├── assets/
│   ├── css/style.css
│   └── js/main.js
├── database/data/   # JSON storage
├── includes/        # Config, header, footer
├── uploads/
├── index.php
├── services.php
├── tracking.php
├── appliance-repair.php
├── computer-repair.php
├── about.php
├── portfolio.php
├── contact.php
└── process-form.php
```

Built for TechFix Solutions Malawi — Smart Technology. Reliable Repairs. Professional Solutions.
