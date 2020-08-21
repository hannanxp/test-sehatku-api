## Test Laravel Sehatq

Ini adalah hasil pekerjaan saya (Hannan Gigih Prastawa) untuk Tes Laravel Sehatq.

## Requirement
-   PHP >= 7.2.5
-   BCMath PHP Extension
-   Ctype PHP Extension
-   Fileinfo PHP extension
-   JSON PHP Extension
-   Mbstring PHP Extension
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension
-   Composer
-   NPM
-   1 DB Mysql

## Instalasi

-   `git clone https://github.com/hannanxp/test-sehatku-api`
-   `cd <nama-projek>`
-   `cp .env-example .env`
-   `edit .env bagian DB_xxx, sesuaikan dengan kondisi environment`
-   `composer install`
-   `npm install`
-   `npm run dev`
-   `php artisan migrate:refresh --seed`
-   `php artisan serve`
-   akses http://127.0.0.1:8000 dari browser


## Penggunaan
-   buka url http://localhost/test-sehatku-api/public/doctors/create 
-   isi input data yang diminta, kemudian submit
-   data yang sudah di-submit dapat dicek pada url http://localhost/test-sehatku-api/public/doctors

