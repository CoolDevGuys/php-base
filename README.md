# Cooldevguys Base Docker PHP image 🐳

Base docker PHP images. The image is based on Linux Alpine

## Tools and extensions 🧰

The image includes the next extensions:

- bcmath
- opcache
- intl
- zip
- pdo_mysql
- apcu
- opcache
- xdebug
- amqp-c
- redis
- amqp

`xdebug` enabling is handled with an env variable e.g. `$ENABLE_XDEBUG=true|false` and only in none `production`
environment.

The next packages are installed:

- git
- bash
- wget
- curl
- make

## Available versions (tags)
- php-8.1-fpm
- composer-2

