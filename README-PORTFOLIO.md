# Portfolio Eka Putra Agus Meindiawan (Laravel + XAMPP)

## Sudah dimasukkan
- Homepage portfolio tanpa foto pribadi.
- Tema gelap dengan aksen hijau, bagian About, Skills, Projects, dan Contact.
- Tautan proyek:
  - Nluckscarves: https://nluckscarves.com
  - Sumini Mart: https://ssmart.nluckscarves.com
  - Amaris: https://amaris.nluckscarves.com
- Konfigurasi `.env` menggunakan MySQL XAMPP dengan database `porto`.

## Cara menjalankan di XAMPP
1. Ekstrak folder `porto` ke `C:\xampp\htdocs\porto`.
2. Buka XAMPP Control Panel, jalankan Apache dan MySQL.
3. Buka phpMyAdmin di `http://localhost/phpmyadmin`.
4. Buat database bernama `porto` dengan collation `utf8mb4_unicode_ci`.
5. Dari terminal, jalankan:
   ```bash
   cd C:\xampp\htdocs\porto
   php artisan key:generate
   php artisan config:clear
   php artisan serve
   ```
6. Buka `http://127.0.0.1:8000`.

Jika folder proyek sudah memiliki `APP_KEY` valid, `key:generate` akan menggantinya; biasanya cukup jalankan satu kali saat setup awal. Tidak perlu menjalankan migration untuk halaman portfolio saat ini karena konten proyek masih statis dan tidak membaca database.

## Catatan
- Ganti email contoh `hello@example.com` di `resources/views/portfolio.blade.php`.
- Ganti tautan GitHub dan LinkedIn placeholder dengan profil asli.
- Jangan unggah file `.env` ke repository publik.
- Untuk hosting, document root harus diarahkan ke folder `public` dan gunakan `APP_DEBUG=false`.
