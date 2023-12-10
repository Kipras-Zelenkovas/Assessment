## About assessment

Given assessment is to create a web site where user can login, register and after that he can use chat bot which is powered by OpenAI API.

## Learning Laravel

Setup needed: Composer, web browser and terminal or console

## How to use

Firstly you clone project from github. Then open cloned directory in terminal or console and run commands: `composer install`, `cp .env.example .env`, `php artisan key:generate`.
Then you need to create 'sb.sqlite' database and copy and paste it's path to DB_DATABASE in .env file and then run command `php arisan migrate`. YOU CAN USE ANY OTHER SQL DATABASE THAT YOU WANT
Next step you need to get OpenAI API key from 'https://platform.openai.com/', and paste it in .env file with name OPENAI_API_KEY.
Finally you can run `php artisan serve` command and check website on your own.

## Tests

To check tests you need to just run `php artisan test` in you terminal or console and user with email - `someone@test.com` and password - `someone123` will be created. Also will be checked if login and register
pages are working properly.
