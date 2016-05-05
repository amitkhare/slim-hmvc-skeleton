# slim-hmvc-skeleton

A HMVC modular application for Slim Framework. Use this application to quickly setup and start working on a new Slim Framework 3 with HMVC capebilities.

## Install

Run this command from the directory in which you want to install your new Slim 3 Framework with modular HMVC.

Via Composer:

    php composer.phar create-project amitkhare/slim-hmvc-skeleton [my-app-name]

Via Git:

    git clone https://github.com/amitkhare/slim-hmvc-skeleton.git [my-app-name]

    composer update

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:



Create a database and pass the credentials to

    /app/src/settings.php
    Import provided slimtest.sql


* Point your virtual host document root to your new application's root `/` directory. it will automatically redirect all calls to /public/index.php

Then visit DEMO:

    http :// YOUR-VIRUAL-HOST-ROOT/users
    http :// YOUR-VIRUAL-HOST-ROOT/users/1

That's it!

# Usage

Need to work on that.
