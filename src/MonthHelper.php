<?php

namespace RussianDateGrammaticalHelper;

class MonthHelper
{
    public static function forms(int $month): array
    {
        return MonthName::tryFrom($month)?->forms() ?? [];
    }

    public static function name(int $month, Case $case = Case::NOMINATIVE): ?string
    {
        $forms = self::forms($month);
        return $forms[$case->value] ?? null;
    }

public static function in(int $month): ?string
{
    $name = self::name($month, Case::PREPOSITIONAL);
        return $name ? "в {$name}" : null;
    }
}