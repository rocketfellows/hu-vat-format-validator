# Hungary vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Hungary vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/hu-vat-format-validator
```

## Usage example

Valid Hungary vat number:

```php
$validator = new HUVatFormatValidator();
$validator->isValid('HU12345678');
$validator->isValid('HU99999999');
$validator->isValid('12345678');
$validator->isValid('99999999');
```

Returns:

```shell
true
true
true
true
```

Invalid Hungary vat number:

```php
$validator = new HUVatFormatValidator();
$validator->isValid('HU123456789');
$validator->isValid('HU1234567');
$validator->isValid('123456789');
$validator->isValid('1234567');
$validator->isValid('DE12345678');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
