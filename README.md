## Simple Laravel Api

To Setup project

- clone the project
- composer install
- create database
- php artisan:migrate
- php artisan passport:install
- php artisan serve

To run tests

- add test_db.sqlite in database folder
- add DB_TEST_DATABASE=database/test_db.sqlite in .env
- run ./vendor/bin/phpunit --testdox

To reset database and dummy data for testing run below command
- php artisan test:prepare
 
It runs \App\Console\Commands\TestPrepare::class command
