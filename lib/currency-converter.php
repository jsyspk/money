<?php
declare(strict_types=1);

namespace J\Money;
use AaRestu\CurrencyConverter\CurrencyConverter;
use DateTime;
use Swap\Builder;
use Ultraleet\CurrencyRates\CurrencyRates;

class CurrencyConverter1
{

    public function __construct()
    {
}
    public function currencyConvertor()
    {
        $swap = (new Builder())
            ->add('fixer', ['access_key' => '1e622005b1a5e3ddbd70d2f6305819af'])
            ->add('currency_layer', ['access_key' => '1e622005b1a5e3ddbd70d2f6305819af', 'enterprise' => false])
            ->build();
        $rate = $swap->latest('EUR/USD');

// 1.129
        echo $rate->getValue();

// 2016-08-26
        echo $rate->getDate()->format('Y-m-d');

// Historical rate
        $rate = $swap->historical('EUR/USD', (new DateTime())->modify('-15 days'));

    }


    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return AnyCurrency
     */
    public function getAnycurrency(): AnyCurrency
    {
        return $this->anycurrency;
    }
}