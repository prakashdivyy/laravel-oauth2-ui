# prakashdivyy/laravel-oauth2-ui

## Installation

To install, add this on `composer.json`:

    { 
        "require": {
            "prakashdivyy/laravel-oauth2-ui": "*"
        }
    }


After requiring the package with Composer, you'll need to add the following to the `providers` array in `config/app.php`:

``` php
PrakashDivy\Laravel\OAuth2\UI\UIServiceProvider::class
```

Then, add the following to the `aliases` array in the same file:

``` php
'UI' => PrakashDivy\Laravel\OAuth2\UI\Facades\UI::class
```

Now, run the following to properly set up the package with your Laravel application:

``` bash
php artisan vendor:publish
```