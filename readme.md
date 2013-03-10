##Laravel 4 - Foundation 4 (Stable)

This is a Laravel 4 Foundation Application,  it has Foundation 4 and also comes with basic user registration and login.

This is based off of github.com/andrew13/Laravel-4-Bootstrap.git but swapped out to have the foundation framework.

Installation is the same as well.


###How to install

	git clone git://github.com/andrew13/Laravel-4-Bootstrap.git laravel
	cd laravel
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

You might want to make [composer as an alias](http://andrewelkins.com/programming/php/setting-up-composer-globally-for-laravel-4/) for future ease of use.

Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

-----

###After that, run these commands to create and populate Users table:

	php artisan migrate
	php artisan db:seed

-----

### Make sure app/storage is writable by your web server.
If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage

-----

Navigate to your Laravel 4 website and try to login with the default credentials:

	email : test@test.com
	password : test

Create a new user at /account/register

### License

This is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)
