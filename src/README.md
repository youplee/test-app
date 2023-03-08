## Docker Setup
- `docker-compose build`
- `docker-compose up -d`
- to stop containers: `docker-compose down`
- to execute shell inside the container: `docker-compose exec app bash` 
  you can also use vscode plugin docker gui (right click and attach shell)

## Laravel env Setup
- edit `src/.env` and restart conatiners `docker-compose down && docker-compose up -d`

## Install composer
 - go to src directory and run: `composer install`
 - `php artisan migrate`
 - to get data from api to DATABASE please run: `php artisan get:films`

## Run laravel
- go to http://localhost:8881/

## Run phpMyAdmin
- go to http://localhost:8887/
- host : `mysql`
- user : `root`
- password : `secret`


## TODO
