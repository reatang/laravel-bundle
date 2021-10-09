Laravel Bundle
---

Laravel Bundle App template.

## Installing

```shell
$ composer require reatang/laravel-bundle -vvv
```

### publishes

This step is also optional, if you want to custom the pivot table, you can publish the migration files:

```php
$>php artisan vendor:publish --provider="Reatang\\LaravelBundle\\BundleServiceProvider" --tag=migrations
$>php artisan vendor:publish --provider="Reatang\\LaravelBundle\\BundleServiceProvider" --tag=config
$>php artisan vendor:publish --provider="Reatang\\LaravelBundle\\BundleServiceProvider" --tag=views
$>php artisan vendor:publish --provider="Reatang\\LaravelBundle\\BundleServiceProvider" --tag=lang
$>php artisan vendor:publish --provider="Reatang\\LaravelBundle\\BundleServiceProvider" --tag=public
```

## Dir Description

### Commands
console programs
    
### Events and listeners
event system
    
### Http
web programs
    
### Models and repositories
data control layer
    
### Services
external system interaction

## License

MIT
