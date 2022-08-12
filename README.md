
# Home Web UI App

This is an example of PHP-Based App that used for controlling IoT devices in my home. This app require [my another github repo](https://github.com/sofyanarief/simple-php-mqtt-client) to run.

## Requirement
- PHP >= 7.4
- PHP [Composer](https://getcomposer.org/) (for installing required library all)
- PHP-SQLite plugin/addon
- Library [ourgapps/gentelella](https://github.com/ourgapps/gentelella) (prefer install it using composer)
- A clone of [my another github repo](https://github.com/sofyanarief/simple-php-mqtt-client) 

## Installation
 1. Clone [my simple-php-mqtt-client github repo](https://github.com/sofyanarief/simple-php-mqtt-client) to your prefered app directory in your web-server root directory and follow installation instruction on that repo.
 2. Run composer require [ourgapps/gentelella](https://github.com/ourgapps/gentelella) .
 3. Run composer install.
 4. Create a new directory named app or what ever you prefer to name it.
 5. Create index.php that can redirect your default root web access to the directory you have been created in the second step.
 6. Move to the directory that you have been created and clone [this repo](https://github.com/sofyanarief/home-web-ui) on it.
 7. Access your web server from your prefered web browser and login with default credential below.

## Default Credential
username : admin
password : admin

The credential are currently hardcode in do_login.php. So you can change the credential by editing that file.