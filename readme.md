# Aplikasi Pendataan Vaksin

Tugas Akhir (UAS) Mata Kuliah Pemrograman Web 2 - Kelompok 6

## Composer

Project ini menggunkan Composer untuk beberapa modul terutama package `phpdotenv`.

Anda bisa menggunakan Composer secara global dengan menginstall dari https://getcomposer.org/download/ 

Atau anda bisa menggunakan `composer.phar` yang sudah kami sertakan pada project ini

### Instalasi Package Composer
Pastikan anda terkoneksi ke Internet lalu jalankan `composer install` atau `php composer.phar install` pada konsol/terminal anda.

## Configuration
### Database
Projek ini menggunakan MySQL sebagai database enginenya. 

Buatlah database pada MySQL lalu import file `.sql` yang berada di `./source/db_kopid.sql`.

### Setting Environment
Ubah nama file `.env.example` menjadi `.env`. File `.env` berisi konfigurasi database yang akan dihubungkan.

```
server=mysql
host=localhost
username=your_mysql_username
password=your_mysql_password
database=your_mysql_database
```
> ganti value `your_mysql_username` dan `your_mysql_password` dengan username dan password mysql anda, default username mysql adalah `root` dan passwordnya biarkan kosong.

> ganti value `your_mysql_database` dengan nama database anda yang akan digunakan.
