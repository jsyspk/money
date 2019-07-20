<?php
declare(strict_types=1);

namespace J\Imap\Tests;
use Brick\Math\RoundingMode;
use Brick\Money\Money;
use J\Money\CurrencyConverter1;
use J\Money\Exchange;
use PHPUnit\Framework\TestCase;
use Brick\Money\CurrencyConverter;


class ExchangeTest extends TestCase
{

    public function setUp(): void
    {

    }
    public function test_must_not_initialize_with__invalid_amount()
    {

        $currency = new Exchange();
        $currency->some();
    }


    public function tearDown(): void
    {
        parent::tearDown();
    }
}
