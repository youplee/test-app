## Docker Setup
- `docker-compose build`
- `docker-compose up -d`
- to stop containers: `docker-compose down`
- to execute shell inside the container: https://prnt.sc/iPLs-ngPfd45
  use vscode plugin docker gui (right click and attach shell) https://prnt.sc/MMfxydYxO_Wp

## Install composer
 - go to src directory and run: `composer install`
 - generate .env file from .env.example : `cp .env.example .env`
 - `php artisan migrate`

## Create User
 - to create user please run this cmd : `php artisan db:seed --class=UserSeeder`
 - User created is: login => admin@gmail.com password => 123456

## Get data from themoviedb API
 - to get data from api to DATABASE please run: `php artisan get:films`

 ## Laravel env Setup
- edit `src/.env` and restart conatiners `docker-compose down && docker-compose up -d`

## Generate backend api documentation with scribe
 - to generate backend api docs with scribe please run: `php artisan scribe:generate`

## Run laravel
- go to http://localhost:8881/login

## Show API DOC
- go to http://localhost:8881/docs

## Run phpMyAdmin
- go to http://localhost:8887/
- host : `mysql`
- user : `root`
- password : `secret`
