CakeLander
==========

<a href="http://www.chrisvogt.me/projects/cakelander"><img src="http://res.cloudinary.com/chrisvogt/image/upload/v1419898403/projects/cakelander/cakelander344.png" align="right" hspace="0" vspace="0"></a>

An open source landing page generator built on CakePHP. Use to host static landing pages for multiple domain names and subdomains in one easy-to-edit location.

CakeLander is a hobby project built as a solution for a friend looking to host landing page content for a handful of parked domains that each need to contain their own unique body content while sharing a uniform theme, navigation menu, and style. Each landing page is capable of having a unique title, image slider, logo, menu, and body content.

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

* ~~[friendsofcake/Crud](https://github.com/friendsofcake/crud)~~
* [josegonzalez/dotenv](https://github.com/josegonzalez/php-dotenv)
* [ad7six/dsn](https://github.com/AD7six/php-dsn)

To find out how to make the most of these packages, please read their respective README files.
