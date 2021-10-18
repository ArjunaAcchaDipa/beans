# Beans

Beans is an information provider application that provides information about coffee shops in every city in Indonesia. Beans come with features that can educate and provide relevant information to every coffee shop visitor whose confused about finding a coffee shop.

We are here with the name "Beans" because delicious coffee always comes from coffee beans that are kept authentic.

Beans Prototype
- [Beans Prototype](https://www.figma.com/file/t3mm1moZ6iKUQ2QwpJ8Irc/Beans?node-id=12%3A48)
- [Interactive Prototype](https://www.figma.com/proto/t3mm1moZ6iKUQ2QwpJ8Irc/Beans?node-id=27%3A73&starting-point-node-id=27%3A73)

## Table of contents
* [Technology](#technology)
* [Installation](#installation)
* [User Credentials for Login](#user-credentials-for-login)

## Technology
- Laravel 8
- PHP
- MySQL

## Installation

From your command line, clone and run beans:
```bash
# Clone this repository inside the folder "xampp/htdocs/" (without quotation marks).
$ git clone https://github.com/ArjunaAcchaDipa/beans.git

# Change directory using your terminal or cmd.
$ cd beans/

# Install composer
$ composer install

# Copy the example env file and make the required configuration changes in the .env file.
$ cp .env.example .env

# Generate a new application key.
$ php artisan key:generate

# Import database from beans.sql file to "localhost/phpmyadmin" (without quotation marks).
# Click import from "localhost/phpmyadmin" and choose beans.sql

# Run "php artisan serve".
$ php artisan serve
```

## User Credentials for Login
```
Username: tony@gmail.com
Password: tony1234
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.