# Sistem Surat Arsip

Selamat datang di repositori Sistem Surat Arsip! Repositori ini berisi implementasi aplikasi untuk mengelola surat dan arsip menggunakan Laravel. Dalam proyek ini, Anda akan menemukan fitur-fitur untuk mengelola surat masuk, surat keluar, dan pengarsipan.

## Tampilan Aplikasi

### Halaman Homepage

![Halaman Homepage](https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/1.PNG)

### Halaman Login

![Halaman Login](https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/2.PNG)

### Halaman Dashboard

![Halaman Dashboard](https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/3.PNG)

## Fitur

Repositori ini memiliki beberapa fitur utama:

1. **Manajemen Surat Masuk**: Mampu mencatat surat masuk, melihat detail surat, dan mengarsipkan surat.

2. **Manajemen Surat Keluar**: Mampu mencatat surat keluar, melihat detail surat, dan mengarsipkan surat.

3. **Pengarsipan**: Dapat mengarsipkan surat dan mencari surat yang diarsipkan.

4. **Manajemen Pengguna**: Dapat mengelola pengguna aplikasi dengan peran yang berbeda seperti admin dan pengguna biasa.

## Cara Menggunakan

Ikuti langkah-langkah berikut untuk menjalankan proyek ini:

1. Pastikan Anda telah menginstal PHP, Composer, dan Laravel di komputer Anda. Anda dapat mengunduhnya dari [Laravel website](https://laravel.com/docs/8.x/installation).

2. Clone repositori ini ke komputer Anda:

   ```bash
   git clone https://github.com/Skrnagrh/sistem_surat_arsip.git
   ```

3. Buka proyek dengan IDE atau text editor yang Anda sukai.

4. Salin file `.env.example` dan beri nama `.env`. Sesuaikan pengaturan database sesuai dengan konfigurasi Anda.

5. Jalankan perintah berikut untuk menginstal dependensi:

   ```bash
   composer install
   ```

6. Generate kunci aplikasi dengan menjalankan perintah:

   ```bash
   php artisan key:generate
   ```

7. Migrasikan basis data dengan perintah:

   ```bash
   php artisan migrate
   ```

8. Jalankan aplikasi dengan perintah:

   ```bash
   php artisan serve
   ```

9. Akses aplikasi di browser Anda dengan alamat `http://localhost:8000`.

10. Anda dapat masuk menggunakan akun admin atau akun pengguna biasa sesuai dengan peran yang telah ditetapkan.

11. Selamat menjalankan proyek Sistem Surat Arsip!

Dengan mengikuti langkah-langkah di atas, Anda dapat menjalankan proyek Sistem Surat Arsip dengan baik. Pastikan untuk melakukan konfigurasi yang sesuai dengan lingkungan Anda, terutama pengaturan database pada file `.env`.
