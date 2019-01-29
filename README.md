## Cache Management


## نصب 

فایل composer.json باز کنید و کد زیر رو قرار دهید :

```json
    "require": {
        "karim-qaderi/zoroaster-column-filter": "*"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/KarimQaderi/Zoroaster-Column-Filter.git"
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
