<?php
declare(strict_types=1);

namespace J\Money;

class Exchange
{

    function convertCurrency($amount, $from_currency, $to_currency)
    {
        $apikey = 'd0c5bd0a60b691de29ce';

        $from_Currency = urlencode($from_currency);
        $to_Currency = urlencode($to_currency);
        $query = "{$from_Currency}_{$to_Currency}";

        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = json_decode($json, true);

        $val = floatval($obj["$query"]);

        $total = $val * $amount;
        return number_format($total, 2, '.', '');
    }

}