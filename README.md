# langstudy-php
laravel + vue + auth

in your working directory

```
git clone https://github.com/boltnut2020/langstudy-php.git
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

create your mysql database, then set your databasename in .env

```
.env
12 DB_DATABASE=your database name 
```

```
$ php artisan migrate
$ php artisan serv
```
open browzer
http://127.0.0.1:8000

