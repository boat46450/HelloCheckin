# HelloAlpaca Checkin

## Installation Guide

1. update composer by this command
```
$ composer update
```
2. copy `.env.example` to `.env` file for initial laravel environment by
```
$ cp .env.example .env
```
3. Generate key for laravel by
```
$ php artisan key:generate
```

## DEVELOPMENT GUIDE

1. open your local phpMyAdmin in your laptop
2. create database in phpMyAdmin with checkin
3. change variable in `.env` file
```
DB_DATABASE=[your new DB]
DB_USERNAME=[your username]
DB_PASSWORD=[your password]
```
4. migrate database by
```
php artisan migrate
```
5. moke data from seed to database by
```
php artisan db:seed --class=CheckinsTableSeeder
```
