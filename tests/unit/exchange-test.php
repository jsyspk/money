<?php
declare(strict_types=1);

namespace J\Imap\Tests;

use J\Money\Exchange;
use PHPUnit\Framework\TestCase;


class ExchangeTest extends TestCase
{

    public function setUp(): void
    {

    }

    public function test_can_initialize_with_valid_values()
    {
        $amount = 23;
        $from = 'PKR';
        $to = 'USD';
        $currency = new Exchange();
        $currency->convertCurrency($amount, $from, $to);
        $expectedResult = 0.14;
        $this->assertInstanceOf('J\Money\Exchange', $currency);
        $this->assertEquals('J\Money\Exchange', get_class($currency));
        $this->assertEquals($expectedResult, $currency->convertCurrency($amount, $from, $to), 'Both must get the same value');

    }


    public function tearDown(): void
    {
        parent::tearDown();
    }
}
