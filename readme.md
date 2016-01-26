## Laravel-based Currency Converter

Simple currency converter created as a Laravel framework package

### Installation

This version comes along with a package inside `package` directory. It is made so that it can be easily made into its own repository and installed via `composer`.

The service provider needs to be added to the `providers` array in `config/app.php`

```php
Eternal1\Currency\ConverterServiceProvider::class,
```

Also, you need to publish configuration file, view and js that controls the converter form:

```bash
php artisan vendor:publish --provider="Eternal1\Currency\ConverterServiceProvider" --tag=currency
```

### Usage

After installing, you can simply add `Eternal1\Currency\ConverterWidget` as a dependency for your controller, and then pass it to your template and render like this:

```php
function showWidget(ConverterWidget $widget)
{
    return view('welcome', ['converter' => $widget]);
}
```

```php
{!! $widget->render() !!}
```

An example is shown inside `App\Http\Controllers\HomeControllers`

Code is pure AJAX, no submit button. Just select two currencies and enter an amount in either of boxes - other will be refreshed automatically.