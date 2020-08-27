# langstudy-php
laravel + spatie Laravel-permission 

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
$ php artisan db:seed
$ php artisan serv
```
open browser
http://127.0.0.1:8000

You can login following user
```
admin@example.com/password

please change, if you use this setting without local
```

Role and Permission  set in routes/web.php
