<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>

# Sistem E-Parkir Elektro
Sebuah website prototipe untuk sistem informasi pada parkiran jurusan Teknik Elektro. Website ini meliputi login, register, dashboard, history tables, dan profile.


## Panduan Instalasi

- Run ```git clone https://github.com/hiseulgi/sistem-parkir-psi.git```
- Create a MySQL database for the project ```laravel_login```
- From the projects root run ```cp .env.example .env```
- Configure your ```.env``` file
- Run ```composer update``` from the projects root folder
- From the projects root folder run ```php artisan key:generate```
- From the projects root folder run ```php artisan migrate```
- Finish
