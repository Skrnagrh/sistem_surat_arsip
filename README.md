# Surat Arsip

Selamat datang di repositori proyek Surat Arsip! Proyek ini adalah aplikasi manajemen surat dan arsip berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini dirancang untuk membantu pengguna dalam mengelola surat masuk, surat keluar, serta pengarsipan dokumen secara efisien.

## Tampilan Aplikasi 

| <img src="https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/1.PNG" alt="Tampilan 1" width="100%">|
|:---:|
| Halaman Homepage |
| <img src="https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/2.PNG" alt="Tampilan 2" width="70%"> |
|:---:|
| Halaman Login |
| <img src="https://github.com/Skrnagrh/sistem_surat_arsip/raw/main/public/tampilan/3.PNG" alt="Tampilan 2" width="70%"> |
|:---:|
| Halaman Dashboard |

## Fitur Utama

- **Manajemen Surat Masuk dan Keluar:** Aplikasi ini memungkinkan Anda untuk mengelola surat masuk dan surat keluar dengan mudah. Anda dapat menambahkan detail surat, mengedit, menghapus, dan mencari surat berdasarkan berbagai kriteria.

- **Pengarsipan Dokumen:** Fasilitas pengarsipan memungkinkan Anda untuk mengunggah dan menyimpan dokumen dalam berbagai format. Anda dapat memberikan label, mengkategorikan, dan mencari dokumen berdasarkan kategori atau kata kunci tertentu.

- **Manajemen Pengguna:** Aplikasi ini memiliki sistem manajemen pengguna yang memungkinkan Anda untuk mengelola pengguna dengan peran yang berbeda, seperti administrator dan pengguna biasa. Ini membantu dalam mengendalikan akses dan hak pengguna terhadap fungsi-fungsi aplikasi.


## Panduan Instalasi

Berikut adalah langkah-langkah untuk menjalankan proyek ini secara lokal di mesin Anda:

1. **Klon Repositori:** Gunakan perintah berikut untuk mengklon repositori ke mesin Anda.
   ```bash
   git clone https://github.com/Skrnagrh/Surat-arsip.git
   ```

2. **Buat Salinan Konfigurasi:** Salin berkas `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

3. **Konfigurasi Database:** Buka berkas `.env` dan atur pengaturan database Anda, seperti nama database, pengguna, dan kata sandi.

4. **Instal Dependensi:** Masuk ke direktori proyek dan jalankan perintah berikut untuk menginstal dependensi proyek:
   ```bash
   composer install
   ```

5. **Generate Key Aplikasi:** Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
   ```bash
   php artisan key:generate
   ```

6. **Migrasi dan Pengisian Awal Data:** Migrasi tabel dan pengisian awal data dengan perintah:
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan Server:** Jalankan server pengembangan Laravel:
   ```bash
   php artisan serve
   ```

8. **Akses Aplikasi:** Buka peramban web dan akses `http://localhost:8000` untuk melihat aplikasi.
