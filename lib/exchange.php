<?php
declare(strict_types=1);

namespace J\Money;
use Money\Currency;
use Brick\Money\ExchangeRateProvider;
use Brick\Money\ExchangeRateProvider\BaseCurrencyProvider;
use Money\CurrencyPair;
use Swap\Builder;

class Exchange
{
    public function __construct()
    {
    }

public function currencyPair()
{
    $pair = new CurrencyPair(new Currency('EUR'), new Currency('USD'), 16);
    return $pair;
}

}