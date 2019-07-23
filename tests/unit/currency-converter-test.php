<?php
declare(strict_types=1);

namespace J\Imap\Tests;

use J\Money\CurrencyConverter;
use PHPUnit\Framework\TestCase;


class CurrencyConverterTest extends TestCase
{

    public function setUp(): void
    {

    }


    /**
     * Test return value of given string
     *
     * @param string $testString
     * @param string $expected
     * @dataProvider dataProviderForStringValueTest
     */
    public function test_can_convert_currencies(string $from, string $to, float $amount, float $expectedResult)
    {
        $currency = new CurrencyConverter($from, $to, $amount);
        $this->assertInstanceOf('J\Money\CurrencyConverter', $currency);
        $this->assertEquals('J\Money\CurrencyConverter', get_class($currency));
        $this->assertEquals($expectedResult, $currency->convertCurrency(), 'Both must get the same value');
    }

    /**
     * @return array
     */
    public function dataProviderForStringValueTest(): array
    {
        return [
            ['PKR', 'TRY', 5, 0.18],
            ['TRY', 'PKR', 3, 84.43],
            ['PKR', 'USD', 10, 0.06],
            ['PHP', 'USD', 19, 0.37],
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
