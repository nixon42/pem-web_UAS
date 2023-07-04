# Nama Proyek

🌐 Aplikasi Database Pelanggan Penyedia Layanan Internet (ISP) Sederhana

## Identitas

- Nama: Alief Cahyo Utomo
- NPM: 2113030101
- Prodi: Sistem Informatika
  
## Ketentuan
- ✅ Penggunaan Controller
- ✅ Penggunaan View
- ✅ Penggunaan Model
- ✅ Penggunaan Bootstrap
- ✅ Penggunaan Helper
- ✅ Terdapat proses INSERT, UPDATE, DELETE, SELECT yang terimplementasi
- ✅ Minimal terdapat 1 tabel

## Deskripsi

Proyek ini adalah aplikasi database pelanggan penyedia layanan internet (ISP) sederhana yang memungkinkan pengguna untuk mengelola informasi pelanggan, paket internet, dan langganan pelanggan. Sistem ini menyediakan fungsionalitas untuk menambahkan, mengedit, dan menghapus data pelanggan, mengelola paket internet.

## Fitur

👤 Manajemen Pelanggan:
- Menambahkan pelanggan baru
- Mengedit informasi pelanggan
- Menghapus data pelanggan
- mengfilter pelanggan sesuia paket internet

💻 Manajemen Paket Internet:
- Menambahkan paket internet baru
- Mengedit detail paket internet
- Menghapus paket internet

## Fitur Filter

### Filter Berdasarkan Paket Internet

Anda dapat menggunakan fitur filter untuk memfilter pelanggan berdasarkan paket internet yang mereka gunakan. Untuk melakukannya, ikuti langkah-langkah berikut:

1. Buka halaman `customers_list` pada aplikasi.

2. Temukan elemen select box dengan label "Filter Paket Internet".

3. Pilih salah satu opsi paket internet dari select box. Opsi "Semua" akan menampilkan semua pelanggan tanpa filter.

4. Klik tombol "Filter" untuk melihat hasil filter.

## Teknologi yang Digunakan

- 🔧 PHP: Bahasa pemrograman backend
- 🔧 CodeIgniter 4: Framework PHP
- 🔧 SQLite: Sistem manajemen database
- 🔧 HTML: Bahasa markup untuk membangun halaman web
- 🔧 CSS: Bahasa styling untuk halaman web
- 🔧 Bootstrap: Framework CSS untuk desain responsif

## Instalasi

1. Clone repositori: `git clone https://github.com/nixon42/pem-web_UAS`
2. Masuk ke direktori proyek: `cd pem-web_UAS`
3. Pasang dependensi: `composer install`
4. Konfigurasikan koneksi database di `app/Config/Database.php`
5. Jalankan migrasi database: `php spark migrate`
6. Jalankan server pengembangan: `php spark serve`
7. Akses aplikasi di browser Anda melalui `http://localhost:8080`

## Penggunaan

1. Buka browser dan kunjungi `http://localhost:8080`
2. Anda akan diarahkan ke halaman utama
3. Gunakan menu navigasi untuk mengelola pelanggan, paket internet, dan langganan
4. Klik tombol yang sesuai untuk menambahkan, mengedit, atau menghapus data
