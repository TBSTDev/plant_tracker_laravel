# Plant Tracker Backend

A laravel application that mainly handles API request to send a JSON list of plants and to receive requests to add new plant records.

# Requirement

The application is running on Laravel 8 and have a prerequisite of the following.

1. PHP >= 7.3
2. BCMath PHP Extension
3. Ctype PHP Extension
4. Fileinfo PHP Extension
5. JSON PHP Extension
6. Mbstring PHP Extension
7. OpenSSL PHP Extension
8. PDO PHP Extension
9. Tokenizer PHP Extension
10. XML PHP Extension

# Installation

1. Clone the repo
2. Create a .env using .env.example contents
3. Create a new database for the application
4. Update the newly created .env file with your database credentials
5. On your CLI run the command `$ composer update`
6. After that, execute the command `$ php artisan migrate:refresh --seed`
