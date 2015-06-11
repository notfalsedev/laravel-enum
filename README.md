Laravel Enum
===========================

This package is a Laravel provider for "gerritdrost/phenum".<br/>
Credits for making Enum work in PHP go to: G. Drost.<br/>
More documentation is found here: https://github.com/gerritdrost/phenum.

Installation
============

Add `artisaninweb/laravel-enum` as requirement to composer.json

```javascript
{
    "require": {
        "artisaninweb/laravel-enum": "1.0.*"
    }
}
```

Add the service provider in `config/app.php`.

```php
'Artisaninweb\Enum\EnumServiceProvider'
```

To use the `EnumMap` facade add this to the facades in `config/app.php`.

```php
'EnumMap' => 'Artisaninweb\Enum\Facades\EnumFacade'
```

Add a new folder with the name `Enums` to the directory `app/`.

Generating enum
============

A command to make new enum's.

```php
php artisan make:enum Fruit
```

License
============
The MIT License (MIT)

Copyright (c) 2014 Michael van de Rijt

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.