<?php
declare(strict_types=1);

namespace J\Money;
Class BaseCurrency
{
    protected $baseCurrency;
    protected $isoCode;

    public function __construct(float $baseCurrency,string $isoCode)
    {
        $this->baseCurrency = $baseCurrency;
        $this->isoCode = $isoCode;

    }

    /**
     * @return float
     */
    public function getBaseCurrency(): float
    {
        return $this->baseCurrency;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }
}