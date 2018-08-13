# :package_name

[![Latest Stable Version](https://poser.pugx.org/eXolnet/:package_name/v/stable?format=flat-square)](https://packagist.org/packages/eXolnet/:package_name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/eXolnet/:package_name/master.svg?style=flat-square)](https://travis-ci.org/eXolnet/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/eXolnet/:package_name.svg?style=flat-square)](https://packagist.org/packages/eXolnet/:package_name)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values, then delete this line.

:package_description

## Installation

Require this package with composer:

```
composer require exolnet/:package_name
```

If you don't use package auto-discovery, add the service provider to the ``providers`` array in `config/app.php`:

```
Exolnet\Skeleton\SkeletonServiceProvider::class
```

And the facade to the ``facades`` array in `config/app.php`: 

```
'Skeleton' => Exolnet\Skeleton\SkeletonFacade::class
```

## Usage

Explain how to use your package.

## Testing

To run the phpUnit tests, please use:

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@exolnet.com instead of using the issue tracker.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

This code is licensed under the [MIT license](http://choosealicense.com/licenses/mit/). 
Please see the [license file](LICENSE) for more information.
