
## Cache Management

![](https://raw.githubusercontent.com/KarimQaderi/Zoroaster-cache-card/master/1.png)

## نصب 

فایل composer.json باز کنید و کد زیر رو قرار دهید :

```json
    "require": {
        "karim-qaderi/zoroaster-cache-card": "*"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/KarimQaderi/Zoroaster-cache-card.git"
        }
    ],
```

```bash
composer update
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
