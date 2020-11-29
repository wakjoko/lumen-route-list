# Lumen Route List Display

[![Total Downloads](https://poser.pugx.org/wakjoko/lumen-routes-list/d/total.svg)](https://packagist.org/packages/wakjoko/lumen-routes-list)
[![Latest Stable Version](https://poser.pugx.org/wakjoko/lumen-routes-list/v/stable.svg)](https://packagist.org/packages/wakjoko/lumen-routes-list)
[![Latest Unstable Version](https://poser.pugx.org/wakjoko/lumen-routes-list/v/unstable.svg)](https://packagist.org/packages/wakjoko/lumen-routes-list)
[![License](https://poser.pugx.org/wakjoko/lumen-routes-list/license.svg)](https://packagist.org/packages/wakjoko/lumen-routes-list)

Making `artisan route:list` works in Lumen apps.

This forked version was intended to support latest Lumen versions.

It was due to the original package from appzcoder/lumen-routes-list supports only up to Lumen 6.

## Installation

1. Run
    ```
    composer require wakjoko/lumen-routes-list
    ```

2. Add service provider into **/bootstrap/app.php** file.
    ```php
    $app->register(Wakjoko\LumenRoutesList\RoutesCommandServiceProvider::class);
    ```
3. Run ```composer dump-autoload```

## Artisan Command

```
php artisan route:list
```