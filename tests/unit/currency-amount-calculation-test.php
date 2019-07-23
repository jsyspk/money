<?php
declare(strict_types=1);

namespace J\Imap\Tests;
use J\Money\AnyCurrency;
use J\Money\BaseCurrency;
use J\Money\CurrencyAmountCalculation;
use PHPUnit\Framework\TestCase;


class CurrencyAmountCalculationTest extends TestCase
{

    public function setUp(): void
    {

    }
    public function test_must_not_initialize_with__invalid_iso_code_for_add_currency()
    {
        $isoCode = 'PKR';
        $baseCurrency = 245;
        $anyCurrency = 2;
        $anyCurrencyIso = 'USD';
        $this->expectExceptionCode(1001);
        $this->expectExceptionMessage("Two Currencies IsoCode Must Match");
        $anyCurrency = new CurrencyAmountCalculation(new AnyCurrency($anyCurrency,$anyCurrencyIso) , new BaseCurrency($baseCurrency,$isoCode));
        $anyCurrency->addCurrency();
    }
    public function test_must_not_initialize_with__invalid_iso_code_for_subtract_currency()
    {
        $isoCode = 'PKR';
        $baseCurrency = 245;
        $anyCurrency = 2;
        $anyCurrencyIso = 'USD';
        $this->expectExceptionCode(1002);
        $this->expectExceptionMessage("Two Currencies IsoCode Must Match");
        $anyCurrency = new CurrencyAmountCalculation(new AnyCurrency($anyCurrency,$anyCurrencyIso) , new BaseCurrency($baseCurrency,$isoCode));
        $anyCurrency->subtractCurrency();
    }
    public function test_must_not_initialize_with__invalid_iso_code_for_divide_currency()
    {
        $isoCode = 'PKR';
        $baseCurrency = 245;
        $anyCurrency = 2;
        $anyCurrencyIso = 'USD';
        $this->expectExceptionCode(1004);
        $this->expectExceptionMessage("Two Currencies IsoCode Must Match");
        $anyCurrency = new CurrencyAmountCalculation(new AnyCurrency($anyCurrency,$anyCurrencyIso) , new BaseCurrency($baseCurrency,$isoCode));
        $anyCurrency->divideCurrency();
    }
    public function test_must_not_initialize_with__invalid_iso_code_for_multiply_currency()
    {
        $isoCode = 'PKR';
        $baseCurrency = 245;
        $anyCurrency = 2;
        $anyCurrencyIso = 'USD';
        $this->expectExceptionCode(1003);
        $this->expectExceptionMessage("Two Currencies IsoCode Must Match");
        $anyCurrency = new CurrencyAmountCalculation(new AnyCurrency($anyCurrency,$anyCurrencyIso) , new BaseCurrency($baseCurrency,$isoCode));
        $anyCurrency->multiplyCurrency();
    }

    public function test_can_initialize_with_valid_values()
    {
        $isoCode = 'PKR';
        $baseCurrency = 245;
        $anyCurrency = 2;
        $anyCurrencyIso = 'PKR';
        $anyCurrency = new CurrencyAmountCalculation(new AnyCurrency($anyCurrency,$anyCurrencyIso) , new BaseCurrency($baseCurrency,$isoCode));
        $anyCurrency->addCurrency();
        $expectedResult = $baseCurrency + $anyCurrency;
        $this->assertInstanceOf('J\Money\CurrencyAmountCalculation', $anyCurrency);
        $this->assertEquals('J\Money\CurrencyAmountCalculation', get_class($anyCurrency));
        $this->assertEquals($expectedResult,$anyCurrency->addCurrency(), 'Both must get the same value');
    }
    public function tearDown(): void
    {
        parent::tearDown();
    }
}
