
## Cache Management

![](https://raw.githubusercontent.com/KarimQaderi/Zoroaster-cache-card/master/1.png)

## نصب 

```bash
composer require karim-qaderi/zoroaster-cache-card
```

## استفاده 

```php
// in app\Zoroaster\Other\Dashboard.php

// ...

public function handle()
{
    return [
        // ...
        new \KarimQaderi\ZoroasterCacheCard\CacheCard(),
    ];
}
```


## سطح دسترسی 

برای اینکه سطح دسترسی رو بزارید فایل `app/Providers/ZoroasterServiceProvider.php` رو باز کنید کد زیر رو در `boot` قرار دهید. 

```php
/**
 * Bootstrap any application services.
 *
 * @return void
 */
protected function boot()
{
    Gate::define('Zoroaster-cache-card', function ($user) {
        return in_array($user->email, [
            'karimqaderi1@gmail.com',
        ]);
    });
}
```