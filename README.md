<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# api_tiket_laravel
API Laravel

## How To Install this Project

- Persiapan
1. Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash (selanjutnya kita sebut terminal).
2. Memiliki Web Server (misal XAMPP) dengan PHP minimal versi 7.
3. Composer telah ter-install, cek dengan perintah composer -V melalui terminal.
4. Memiliki koneksi internet (untuk proses installasi).

Langkah-Langkah
1. Download Source Code dari repo Github api_tiket_laravel dalam bentuk Zip.
2. Extract file zip (source code) ke dalam direktori htdocs pada XAMPP, misal htdocs/api_tiket_laravel.
3. Melalui terminal, cd ke direktori api_tiket_laravel.
4. (Sesuai petunjuk installasi) Pada terminal, berikan perintah <b>composer install</b>. Ini yang perlu koneksi internet.
5. Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
6. Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.
7. Buat database baru (kosong) pada mysql (via phpmyadmin) dengan nama <b>tiket</b>.
8. Duplikat file .env.example, lalu rename menjadi .env.
9. Kembali ke terminal, php artisan key:generate.
10. Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
    <br>DB_CONNECTION=mysql
    <br>DB_HOST=localhost
    <br>DB_PORT=3306
    <br>DB_DATABASE=tiket
    <br>DB_USERNAME=root
    <br>DB_PASSWORD=
11. Jika hanya ingin membuat tabel, jalankan perintah <b>php artisan migrate</b>. Cek di phpmyadmin, seharusnya tabel sudah muncul.
12. Jika ingin membuat beberapa sample data, jalankan perintah <b>php artisan db:seed --class=TiketTableSeeder</b>, lalu cek data ditabel `tiket_model`.
13. Setelah selesai, Jalankan perintah <b>php artisan serve</b> maka dapat diakses dengan http://localhost:8000/

# API Url & Param
1. Mendapatkan daftar tiket:<br>
   Url: http://localhost:8000/api/getTicket/10 <br>
   Method: GET <br>

2. Menambah Tiket Baru:<br>
   Url: http://localhost:8000/api/addTicket <br>
   Method: POST <br>
   Parameter: subject, message, priority <br>
   
3. Membalas Tiket, Status otomatis menjadi <b>Answered</b>:<br>
   Url: http://localhost:8000/api/replyTicket <br>
   Method: POST <br>
   Parameter: message, ticket_id <br>

4. Menutup ticket, status otomatis menjadi <b>Closed</b>: <br>
   Url: http://localhost:8000/api/closeTicket <br>
   Method: POST <br>
   Parameter: ticket_id <br>
   
5. Menghapus Tiket: <br>
   Url: http://localhost:8000/api/delTicket <br>
   Method: POST <br>
   Parameter: id <br>

SEKIAN PENJELASAN DARI SAYA, TERIMAKASIH. Created by <b>ISWAHYUDI</b>

