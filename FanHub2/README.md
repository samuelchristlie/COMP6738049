# Kelompok 9 - FanHub
<ul>
    <li> Delvina Wongsono - 2440034050 </li>
    <li> Samuel Sebastian Christlie - 2440085316 </li>
    <li> Mary Regina Ang - 2440019781 </li>
    <li> Nicholaus - 2440102120 </li>
</ul>

## Cara setup aplikasi:
<ol>
    <li> Jalankan `composer install` </li>
    <li> Copy file `.env.example`, kemudian paste di folder projectnya dan hapus `.example`, sehingga hanya tersisa `.env` </li>
    <li> Apabila file `.env` sudah ada, jalankan `php artisan key:generate` di terminal </li>
    <li> Setelah itu, jalankan `php artisan cache:clear` dan `php artisan config:clear` di terminal </li>
    <li> Lalu, jalankan `npm install` di terminal, tunggu sampai selesai install </li>
    <li> Buka XAMPP, nyalakan Apache dan MySQL </li>
    <li> Pada MySQL, klik Admin. Anda akan di-direct ke halaman local phpMyAdmin. Di halaman itu, buat database baru dengan nama 'laravel' agar data dapat disimpan dalam database tersebut </li>
    <li> Kemudian jalankan `php artisan migrate:fresh --seed` di terminal, tunggu sampai selesai migrate. </li>
    <li> Jalankan ‘npm install` lalu ‘npm run dev` di terminal </li>
    <li> Navigasi ke localhost yang di generate oleh `php artisan serve`, anda akan di-direct ke instruksi selanjutnya. </li>
</ol>


## Cara menggunakan aplikasi:
Sign up diri Anda untuk menjadi bagian dari FanHub, pastikan mengisi semua data diri Anda dengan benar dan sesuai dengan ketentuan.
Setelah verifikasi berhasil, login dengan menggunakan akun yang sudah dibuat.
Anda akan ke-redirect ke halaman homepage. Pada halaman tersebut Anda dapat memilih artist mana yang Anda ingin lihat. Sebagai contoh Anda memilih BTS.
Anda akan menuju ke halaman FanArtist dan juga FanWall. Anda dapat memberikan like dan juga komentar dalam page FanArtist. Anda dapat membuat post pada FanWall yang nantinya bisa saja dilihat oleh Artist kesayangan Anda.
Jika Anda ingin membeli merch, Anda bisa klik ke halaman merch untuk melihat merch yang sesuai dengan keinginan Anda. 
Terdapat juga  merch eksklusif yang bisa didapatkan setelah Anda berlangganan membership FanHub. Dengan Anda berlangganan membership, terdapat fitur baru yang hanya bisa diakses oleh membership, yaitu chat.
Pada fitur Chat, Anda dapat secara langsung berhubungan secara Real-Time dengan artist kesayangan Anda. Chat tersebut langsung tertuju kepada akun Artist dan tidak ada perantara dari pihak FanHub. 
Anda juga bisa mengubah Profile Anda yang sudah dibuat sebelumnya jika terjadi kesalahan dalam data diri atau hanya ingin mengubah saja pada page Edit Profile.
