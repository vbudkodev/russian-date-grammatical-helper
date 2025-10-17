<?php

use RussianDateGrammaticalHelper\MonthHelper;
use RussianDateGrammaticalHelper\GrammaticalCase;
use PHPUnit\Framework\TestCase;

class MonthHelperTest extends TestCase
{
    public function test_basic_forms()
    {
        $this->assertEquals('январь', MonthHelper::name(1));
        $this->assertEquals('в январе', MonthHelper::in(1));
    }

    public function test_cases()
    {
        $this->assertEquals('января', MonthHelper::name(1, GrammaticalCase::GENITIVE));
        $this->assertEquals('январю', MonthHelper::name(1, GrammaticalCase::DATIVE));
        $this->assertEquals('январе', MonthHelper::name(1, GrammaticalCase::PREPOSITIONAL));
    }

    public function test_invalid_month_returns_null()
    {
        $this->assertNull(MonthHelper::name(13));
        $this->assertNull(MonthHelper::in(13));
    }
}