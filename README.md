# Проверка валидности ИНН на PHP

[![GitHub release](https://img.shields.io/github/release/gomzyakov/inn.svg)](https://github.com/gomzyakov/inn/releases/latest)
[![codecov](https://codecov.io/gh/gomzyakov/inn/branch/main/graph/badge.svg?token=sYbm7W23NV)](https://codecov.io/gh/gomzyakov/inn)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/numbers/blob/development/LICENSE)

Пакет для валидации ИНН (идентификационный номер налогоплательщика) как физлица (12 цифр), так и юрлица (10 цифр).

## Установка

Используя [Composer](https://getcomposer.org):

```bash
composer require gomzyakov/inn
```

## Использование

Все очень просто. Например, вы можете создать и проверить ИНН следующим образом:

```php
use Gomzyakov\Validator\INN;

# Создаём объект ИНН-номера
$inn = new INN('526317984689');

# Проверяем корректность ИНН-номера
if ($inn->isValid()) {
    echo "Номер ИНН верен!";
}
```

Вы также можете использовать статический метод `validate` для простой валидации ИНН:

```php

$is_valid_number = INN::validate('526317984689')

echo $is_valid_number; // true
```
