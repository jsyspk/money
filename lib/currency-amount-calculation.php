<?php
declare(strict_types=1);

namespace J\Money;

use InvalidArgumentException;

class CurrencyAmountCalculation
{
    public $baseCurrency;
    public $anyCurrency;
    public $isoCode;
    public $isoCode1;

    public function __construct(AnyCurrency $anyCurrency, BaseCurrency $baseCurrency)
    {

        $this->baseCurrency = $baseCurrency->getBaseCurrency();
        $this->isoCode = $baseCurrency->getIsoCode();
        $this->anyCurrency = $anyCurrency->getAnyCurrency();
        $this->isoCode1 = $anyCurrency->getIsoCode();
    }

    public function addCurrency()
    {
        if ($this->isoCode != $this->isoCode1) {
            throw new InvalidArgumentException("Two Currencies IsoCode Must Match Match", 1001);
        }
        $this->baseCurrency = $this->baseCurrency + $this->anyCurrency;
        return $this->baseCurrency;
    }

    public function subtractCurrency()
    {
        if ($this->isoCode != $this->isoCode1) {
            throw new InvalidArgumentException("Two Currencies IsoCode Must Match", 1002);
        }
            $this->baseCurrency = $this->baseCurrency - $this->anyCurrency;
        return $this->baseCurrency;
    }

    public function multiplyCurrency()
    {
        if ($this->isoCode != $this->isoCode1) {
            throw new InvalidArgumentException("Two Currencies IsoCode Must Match", 1003);
        }
            $this->baseCurrency = round($this->baseCurrency * $this->anyCurrency, 0, PHP_ROUND_HALF_EVEN);
            return $this->baseCurrency;
    }

    public function divideCurrency()
    {
        if ($this->isoCode != $this->isoCode1) {
            throw new InvalidArgumentException("Two Currencies IsoCode Must Match", 1004);
        }
            $this->baseCurrency = round($this->baseCurrency / $this->anyCurrency, 0, PHP_ROUND_HALF_EVEN);
            return $this->baseCurrency;
    }

    /**
     * @return float
     */
    public function getAnyCurrency(): float
    {
        return $this->anyCurrency;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @return float
     */
    public function getBaseCurrency(): float
    {
        return $this->baseCurrency;
    }

    /**
     * @return mixed
     */
    public function getIsoCode1()
    {
        return $this->isoCode1;
    }
}