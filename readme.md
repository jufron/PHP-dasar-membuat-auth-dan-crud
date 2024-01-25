# Aplikasi CRUD PHP Sederhana

Aplikasi ini adalah aplikasi web sederhana yang dibangun dengan menggunakan bahasa PHP untuk operasi CRUD (Create, Read, Update, Delete) dan authentication (login, register). Gaya tampilan aplikasi ini diimplementasikan dengan menggunakan CSS Native yang sederhana.

## Fitur

1. **Auth Login**: Melakukan login menggunakan email dan password ke dalam aplikasi
2. **Auth Registrasi**: mendaftarkan username, email, password ke dalam aplikasi.
3. **Create**: Tambahkan entitas baru ke dalam aplikasi baik (blog mata_pelajaran dan siswa).
4. **Read**: Tampilkan daftar entitas yang sudah ada baik (blog mata_pelajaran dan siswa).
5. **Update**: Perbarui informasi entitas yang sudah ada baik (blog mata_pelajaran dan siswa).
6. **Delete**: Hapus entitas yang tidak diperlukan baik (blog mata_pelajaran dan siswa).

## Instalasi

### Prasyarat

1. Pastikan Anda telah menginstal [XAMPP](https://www.apachefriends.org/index.html) atau server web serupa di mesin Anda.
2. Pastikan PHP 8 sudah terinstal. Jika belum, Anda dapat mengunduh dan menginstalnya dari [php.net](https://www.php.net/downloads.php).
3. Pastikan MySQL atau MariaDB sudah terinstal. Jika tidak, Anda dapat menginstalnya sebagai bagian dari XAMPP.

### Langkah-langkah Instalasi

1. Clone repositori ini atau unduh sebagai ZIP dan ekstrak ke dalam direktori `htdocs` di dalam direktori instalasi XAMPP Anda (biasanya berada di `C:\xampp\htdocs` pada Windows).
2. Buat database baru di MySQL atau MariaDB dengan nama yang diinginkan (contoh: `sekolah`).
3. Impor skema database yang ada dalam file `sekolah.sql` ke dalam database yang baru dibuat.
   - Buka phpMyAdmin di `http://localhost/phpmyadmin`.
   - Buat database baru dengan nama yang telah Anda tentukan.
   - Pilih database yang baru dibuat dan pilih tab "Import".
   - Pilih berkas `database.sql` dan klik tombol "Go".
4. Sesuaikan pengaturan koneksi database dalam file `db/koneksi.php` dengan informasi database Anda (nama database, username, password).

## Penggunaan

1. Buka aplikasi melalui browser dengan mengakses alamat URL tempat aplikasi diinstal.
2. Pada halaman utama, Anda akan melihat daftar entitas yang sudah ada.
3. Untuk menambahkan entitas baru, klik tombol "Tambah" dan isi formulir yang muncul.
4. Untuk memperbarui entitas, klik tombol "Edit" pada entitas yang diinginkan.
5. Untuk menghapus entitas, klik tombol "Hapus" pada entitas yang diinginkan.

## Struktur Direktori

- `index.php`: Halaman utama yang menampilkan daftar entitas.
- `add.php`: Halaman untuk menambahkan entitas baru.
- `edit.php`: Halaman untuk memperbarui informasi entitas.
- `delete.php`: Halaman untuk menghapus entitas.
- `db/koneksi.php`: Berkas konfigurasi untuk pengaturan database.
- `sekolah.sql`: Berkas skema database untuk impor.

## Kontribusi

Jika Anda ingin berkontribusi pada pengembangan aplikasi ini, silakan kirimkan pull request atau laporkan masalah.

## Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).