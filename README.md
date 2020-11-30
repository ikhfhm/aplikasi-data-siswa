# Aplikasi Data Siswa

## Things to do list:

1. Klon repositori ini dengan menuliskan perintah `git clone https://github.com/ikhfhm/aplikasi-data-siswa.git`
2. Masuk ke folder tersebut dengan perintah `cd aplikasi-data-siswa`
3. Run `cp .env.example .env`
4. Buka file `.env` kemudian konfigurasi databasenya
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<NAMA DATABASE>
DB_USERNAME=<USERNAME>
DB_PASSWORD=<PASSWORD>
```
4. Run `composer install`
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `composer dump-autoload`
8. Run `php artisan db:seed`
9. Run `php artisan serve`
10. Buka browser dan akses ke alamat `https://localhost:8000`

|Login aplikasi sebagai admin: |
------------------------------
|email | password |
|ikhwanfahmihidayat@gmail.com | fahmi |


## Screenshot

### Home Page

![alt text](https://github.com/ikhfhm/aplikasi-data-siswa/blob/master/public/screenshot/home.png "Logo Title Text 1")

### Register

![alt text](https://github.com/ikhfhm/aplikasi-data-siswa/blob/master/public/screenshot/register.png "Logo Title Text 1")

### Login

![alt text](https://github.com/ikhfhm/aplikasi-data-siswa/blob/master/public/screenshot/login.png "Logo Title Text 1")

### Dashboard

![alt text](https://github.com/ikhfhm/aplikasi-data-siswa/blob/master/public/screenshot/dashboard.png "Logo Title Text 1")

### Data Siswa

![alt text](https://github.com/ikhfhm/aplikasi-data-siswa/blob/master/public/screenshot/data-siswa.png "Logo Title Text 1")