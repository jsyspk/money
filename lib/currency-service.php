<?php
declare(strict_types=1);

namespace J\Money;
Class CurrencyService
{
    private const API_KEY = 'd0c5bd0a60b691de29ce';
    private $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public function getCurrencyExchangeRate()
    {
        $apiKey = self::API_KEY;
        $jsonData = file_get_contents("https://free.currconv.com/api/v7/convert?q={$this->query}&compact=ultra&apiKey={$apiKey}");
        return $jsonData;
    }

}