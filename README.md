CakeLander
==========

A simple landing page generator using CakePHP.

## Requirements

PHP 5.4 and above.
CakePHP 2.5 and above.

## Installation (uses Composer)

	php composer.phar install

### Application Configuration

This template is setup to configure the application via [environment variables](http://en.wikipedia.org/wiki/Environment_variable) and [data source names](http://en.wikipedia.org/wiki/Data_source_name) (DSN).

#### How to configure

In a development scenario, copy the file `Config/.env.default` to `Config/.env` and edit it.

In a production scenario - configure the environment however you wish (via webserver config for example) and remove the use of `php-dotenv`.

In neither case is it necessary/desirable to modify any php files to configure the application temporarily or permanently.

## Heroku Compatibility

This application template is compatible with the [CHH/heroku-buildpack-php](https://github.com/CHH/heroku-buildpack-php) project. To use, simply configure your buildpack:

    heroku config:set BUILDPACK_URL=https://github.com/CHH/heroku-buildpack-php
    heroku config:set LOG_PATH=/app/vendor/php/var/log/
    heroku config:set SECURITY_SALT=SOME_ALPHANUMERIC_SALT_HERE
    heroku config:set SECURITY_CIPHER_SEED=SOME_NUMERIC_SEED_HERE

## Included packages
The application template comes with some dependencies already included in the composer file. These are designed to help you get up and running quickly.

* [friendsofcake/Crud](https://github.com/friendsofcake/crud)
* [josegonzalez/dotenv](https://github.com/josegonzalez/php-dotenv)
* [ad7six/dsn](https://github.com/AD7six/php-dsn)

To find out how to make the most of these packages, please read their respective README files.
