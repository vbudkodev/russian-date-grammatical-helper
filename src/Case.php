<?php

namespace RussianDateGrammaticalHelper;

enum Case: string
{
case NOMINATIVE = 'nominative';    // Именительный (кто? что?)
case GENITIVE = 'genitive';        // Родительный (кого? чего?)
case DATIVE = 'dative';            // Дательный (кому? чему?)
case ACCUSATIVE = 'accusative';    // Винительный (кого? что?)
case INSTRUMENTAL = 'instrumental'; // Творительный (кем? чем?)
case PREPOSITIONAL = 'prepositional'; // Предложный (о ком? о чём?)

    public function russianName(): string
{
    return match ($this) {
        self::NOMINATIVE => 'именительный',
        self::GENITIVE => 'родительный',
        self::DATIVE => 'дательный',
        self::ACCUSATIVE => 'винительный',
        self::INSTRUMENTAL => 'творительный',
        self::PREPOSITIONAL => 'предложный',
    };
}
}