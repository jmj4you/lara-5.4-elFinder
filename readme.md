# ElFinder example
## Instructions
1. Install fresh laravel 5.4
```bash
composer create-project laravel/laravel project 5.4.*
```
2. Install elFinder package
```bash
composer require barryvdh/laravel-elfinder
```
3. Add the service provider to the `app.php` file.
```bash
Barryvdh\Elfinder\ElfinderServiceProvider::class,
```
4. Publish the elFinder assets and the config file.
```bash
php artisan elfinder:publish
php artisan vendor:publish --provider='Barryvdh\Elfinder\ElfinderServiceProvider' --tag=config
```
5. Add routes in the `web.php` file
```php
Route::get('/', '\Barryvdh\Elfinder\ElfinderController@showIndex');
Route::get('/elfinder/connector', '\Barryvdh\Elfinder\ElfinderController@showConnector');
```
6. Select the disk in the `elfinder.php` file. Or (for testing) in the root of your project create a `files` directory inside the public folder.
```php
[
	// From the elfinder config file. This was causing the error.
	'dir' => ['files'],
]
```
7. Have Fun :P
