<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel API JWT AUTH adalah ?
Sebuah projek iseng membuat CRUD api dengan jwt auth

--------------------

## Install
1. **Clone Repository**
```bash
git clone https://github.com/septian59/laravel-api-jwt-auth.git
cd laravel-api-jwt-auth
composer install
```
2. **Edit dan tambahkan di baris ``.env``**
```
DB_PORT=3306
DB_DATABASE=<YOUR DATABASE NAME>
DB_USERNAME=<YOUR DATABASE USERNAME>
DB_PASSWORD=<YOUR DATABASE PASSWORD>

JWT_TTL=99999 //tambahkan baris ini
JWT_SECRET=lLekEcoKim4jrfge8jU5XtKX9k9A9LQz9XzsvMmGJt0ltIahvCRGJVBjDdcGkJeA //tambahkan baris ini
```
3. **Lakukan Migrate setelah membuat database**
```bash
php artisan migrate
```

4. **Running server**
```bash
php artisan serve
```

5. **Lalu test di postman**
-------


## Contributing

Contributions, issues and feature requests di persilahkan.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
