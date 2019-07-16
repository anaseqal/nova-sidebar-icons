# Nova Sidebar Icons

Set icons for resources in sidebar.

![screenshot](https://i.imgur.com/mB4nKmY.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require anaseqal/nova-sidebar-icons
```

Publish navigation view file:

```bash
php artisan vendor:publish --provider="Anaseqal\NovaSidebarIcons\ToolServiceProvider" --force
```

Register the tool in `NovaServiceProvider`:

```php
use Anaseqal\NovaSidebarIcons\NovaSidebarIcons;
...

public function tools()
    {
        return [
            new NovaSidebarIcons,
            ...
        ];
    }

```

## Usage

Set the icon in your Nova resource, for example:
```php
/**
 * The icon of the resource.
 *
 * @return string
 */
public static function icon() 
{
    // Assuming you have a blade file containing an image
    // in resources/views/vendor/nova/svg/icon-user.blade.php
    return view('nova::svg.icon-user')->render();
}
```

This is the recommended approach. In the example above we have used a blade file containing an svg, but if you'd want to it's is possible return the entire svg string

***Examples of other approaches***

```php
// By using an image tag
public static function icon() 
{
    return <img src="/path/to/image.svg" />
}

// Or simply return it as a string
public static function icon() 
{
    return '<svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="var(--sidebar-icon)" d="M4.06 13a8 8 0 0 0 5.18 .... e.t.c."/>
            </svg>';
}
    
```

## Backwards compatibility
Please note that this package used to use a static $icon property on the resource. This has been replaced with the static icon method. The icon property is still supported to preserve backwards compatibility.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.


