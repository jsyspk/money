<?php
declare(strict_types=1);

namespace J\Money;
Class CurrencyConverter
{
    private $to;
    private $from;
    private $amount;

    public function __construct(string $from, string $to, float $amount = 1)
    {
        $this->from = $from;
        $this->to = $to;
        $this->amount = $amount;
    }

    public function generateQuery()
    {
        $fromCurrency = urlencode($this->from);
        $toCurrency = urlencode($this->to);
        $query = "{$fromCurrency}_{$toCurrency}";
        return $query;

    }

    public function convertCurrency()
    {
        $query = $this->generateQuery();
        $currencyService = new CurrencyService($query);
        $obj = json_decode($currencyService->getCurrencyExchangeRate(), true);
        $val = floatval($obj["$query"]);
        $total = $val * $this->amount;
        return number_format($total, 2, '.', '');
    }


}