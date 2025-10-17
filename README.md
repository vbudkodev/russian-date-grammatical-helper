# Russian Date Grammatical Helper

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-8892BF.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

A lightweight PHP library for working with Russian date components with full grammatical cases support. Perfect for generating grammatically correct date phrases in Russian.

## Installation

```bash
composer require vbudkodev/russian-date-grammatical-helper
```

## Current Features

### Month Names with Grammatical Cases
```php
use RussianDateGrammaticalHelper\MonthHelper;
use RussianDateGrammaticalHelper\GrammaticalCase;

// Basic usage
echo MonthHelper::name(1); // 'январь' (nominative)

// Specific cases
echo MonthHelper::name(1, GrammaticalCase::GENITIVE); // 'января'
echo MonthHelper::name(1, GrammaticalCase::PREPOSITIONAL); // 'январе'

// Prepositional phrase
echo MonthHelper::in(5); // 'в мае'

// All forms at once
$forms = MonthHelper::forms(3);
echo $forms[GrammaticalCase::NOMINATIVE->value]; // 'март'
echo $forms[GrammaticalCase::GENITIVE->value]; // 'марта'
```

## Available Cases

All six Russian grammatical cases are supported via the Case enum:

- ``GrammaticalCase::NOMINATIVE`` - Именительный (кто? что?)
- ``GrammaticalCase::GENITIVE`` - Родительный (кого? чего?)
- ``GrammaticalCase::DATIVE`` - Дательный (кому? чему?)
- ``GrammaticalCase::ACCUSATIVE`` - Винительный (кого? что?)
- ``GrammaticalCase::INSTRUMENTAL`` - Творительный (кем? чем?)
- ``GrammaticalCase::PREPOSITIONAL`` - Предложный (о ком? о чём?)

## Roadmap

- Day of week names with cases
- Year formatting (e.g., "в 2026 году")
- Full date formatting helpers
- Seasonal and relative date phrases

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.