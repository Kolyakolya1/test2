# Tests  blog

* mysql - Database server
* phpmyadmin - For management of MySQL #  http://localhost:9095
* laravel - Login pages, API # http://localhost:8095


## How to use

### 1. Preparation

Clone the repo and change your work directory to root of sources

    git clone https://github.com/kolyatests/test2.git

Run first iteration of Docker environment

    docker-compose up -d

### 2. Install all required components

I assume that there are no development tools on your computer, so you need to login to Laravel container:

    docker-compose exec laravel bash

Install all dependencies

    php composer.phar instal

### 3. Set up the application

Create database and seed tables:

    php artisan migrate --seed


## Login
adamchukkolya@gmail.com
