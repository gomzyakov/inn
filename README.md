# Проверка валидности ИНН на PHP

[![packagist](https://img.shields.io/packagist/v/gomzyakov/inn.svg)](https://packagist.org/packages/gomzyakov/inn)
[![downloads_count](https://img.shields.io/packagist/dt/gomzyakov/inn.svg)](https://packagist.org/packages/gomzyakov/inn)
[![GitHub release](https://img.shields.io/github/release/gomzyakov/inn.svg)](https://github.com/gomzyakov/inn/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/numbers/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/inn/branch/main/graph/badge.svg?token=sYbm7W23NV)](https://codecov.io/gh/gomzyakov/inn)

A library to validate TIN, INN, BIK and other numbers.

## Installation

Just require it in your project via [Composer](https://getcomposer.org):

```bash
composer require gomzyakov/inn
```

## How to use

Everything is very simple. For example, you can create and verify a TIN like this::

```php
use Gomzyakov\Validator\INN;

# Создаём объект ИНН-номера
$inn = new INN('526317984689');

# Проверяем корректность ИНН-номера
if ($inn->isValid()) {
    echo "Номер ИНН верен!";
}
```

Вы также можете использовать статический метод для простой валидации ИНН:

```php

$is_valid_number = INN::validate('526317984689')

echo $is_valid_number; // true
```


## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/inn/blob/main/LICENSE).
