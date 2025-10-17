<?php

namespace RussianDateGrammaticalHelper;

enum MonthName: int
{
    case January = 1;
    case February = 2;
    case March = 3;
    case April = 4;
    case May = 5;
    case June = 6;
    case July = 7;
    case August = 8;
    case September = 9;
    case October = 10;
    case November = 11;
    case December = 12;

    public function forms(): array
    {
        return match ($this) {
            self::January   => $this->make('январь',  'января',  'январю',  'январь',  'январём',  'январе'),
            self::February  => $this->make('февраль', 'февраля', 'февралю', 'февраль', 'февралём', 'феврале'),
            self::March     => $this->make('март',    'марта',   'марту',   'март',    'мартом',   'марте'),
            self::April     => $this->make('апрель',  'апреля',  'апрелю',  'апрель',  'апрелем',  'апреле'),
            self::May       => $this->make('май',     'мая',     'маю',     'май',     'маем',     'мае'),
            self::June      => $this->make('июнь',    'июня',    'июню',    'июнь',    'июнем',    'июне'),
            self::July      => $this->make('июль',    'июля',    'июлю',    'июль',    'июлем',    'июле'),
            self::August    => $this->make('август',  'августа', 'августу', 'август',  'августом', 'августе'),
            self::September => $this->make('сентябрь','сентября','сентябрю','сентябрь','сентябрём','сентябре'),
            self::October   => $this->make('октябрь', 'октября', 'октябрю', 'октябрь', 'октябрём', 'октябре'),
            self::November  => $this->make('ноябрь',  'ноября',  'ноябрю',  'ноябрь',  'ноябрём',  'ноябре'),
            self::December  => $this->make('декабрь', 'декабря', 'декабрю', 'декабрь', 'декабрём', 'декабре'),
        };
    }

    private function make(
        string $nominative,
        string $genitive,
        string $dative,
        string $accusative,
        string $instrumental,
        string $prepositional
    ): array {
        return [
            GrammaticalCase::NOMINATIVE->value => $nominative,
            GrammaticalCase::GENITIVE->value => $genitive,
            GrammaticalCase::DATIVE->value => $dative,
            GrammaticalCase::ACCUSATIVE->value => $accusative,
            GrammaticalCase::INSTRUMENTAL->value => $instrumental,
            GrammaticalCase::PREPOSITIONAL->value => $prepositional,
        ];
    }
}