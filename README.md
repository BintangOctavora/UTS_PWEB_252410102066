<p align="center">

  <img src="asset/Screenshot 2026-11-11 105209.png" width="700">

  <img src="asset/Screenshot 2026-11-11 105229.png" width="700">

  <img src="asset/Screenshot 2026-11-11 105241.png" width="700">

  <img src="asset/Screenshot 2026-11-11 105326.png" width="700">

</p>

## 📸 Dokumentasi Tampilan & Alur Aplikasi (LeKopi)

Berikut adalah demonstrasi alur penggunaan aplikasi **Octaffee** mulai dari proses otentikasi hingga pengelolaan data:

1. **Halaman Login**
   * Tampilan awal form autentikasi. Pengguna memasukkan `Username` dan `Password` (tersembunyi secara otomatis) untuk memulai sesi tanpa menggunakan database, melainkan memanfaatkan parameter *request* Laravel.

2. **Halaman Dashboard**
   * Setelah berhasil login, pengguna disambut di halaman utama dashboard dengan sapaan dinamis sesuai nama yang dimasukkan saat login. Menu navigasi atas dan footer dirancang modular menggunakan Blade components untuk menjaga konsistensi tampilan.

3. **Halaman Pengelolaan Menu**
   * Halaman interaktif tempat daftar menu kedai ditampilkan dalam bentuk tabel/kartu rapi lengkap dengan status ketersediaan produk (Tersedia/Habis), memudahkan pengelola memantau stok harian.

4. **Halaman Profil**
   * Menampilkan informasi akun pengguna yang sedang aktif, lengkap dengan fitur avatar dinamis (mengambil inisial huruf depan dari nama username secara otomatis) serta tombol navigasi kembali ke dashboard.