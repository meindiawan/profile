# Eka Putra Agus Meindiawan — Portfolio (Laravel)

Portfolio putih dan oranye bertema blok pixel: hero slider dengan screenshot asli, proyek (Nluck Scarves, Toko Sumini, Amaris Rent Car),
3 publikasi jurnal, dan kontak WhatsApp (0895 0481 0142) lengkap dengan form yang membuka chat WA.

## Cara tercepat (Windows / XAMPP)
1. Ekstrak ZIP ini.
2. Klik dua kali `install.bat` — otomatis membuat project Laravel, menyalin file, lalu menjalankan server di http://127.0.0.1:8000.

Linux/macOS: `./install.sh`

## Manual
```bash
composer create-project laravel/laravel eka-portfolio
# salin folder routes/, resources/, public/ dari paket ini ke eka-portfolio/ (timpa)
cd eka-portfolio && php artisan serve
```

## Tanpa Laravel (hosting biasa)
Folder `static-site/` berisi versi HTML statis yang identik — upload isinya ke public_html.

## Mengubah isi
- Semua data proyek, jurnal, dan keahlian ada di blok `@php` paling atas `resources/views/portfolio.blade.php`.
- Nomor WA: variabel `$wa` (format 62…) di file yang sama.
- Gambar proyek: `public/img/` (nluck, sumini, amaris — .webp + .jpg).
- Setelah mengubah blade, jika memakai versi statis, render ulang `static-site/index.html`.

## Hosting
Document root harus ke folder `public`. Set `APP_ENV=production`, `APP_DEBUG=false`, lalu `php artisan optimize`.
