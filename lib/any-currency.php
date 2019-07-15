<?php
declare(strict_types=1);

namespace J\Money;

abstract class AnyCurrency implements Currency
{
    protected $symbol;
    protected $isoCode;
    protected $shortName;
    protected $fullName;

    protected $decimalPlaces;


    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function sign(): string
    {
        return self::SIGN;
    }

    public function code(): string
    {

    }

    public function name(): string
    {

    }

    public function fullName(): string
    {

    }

}