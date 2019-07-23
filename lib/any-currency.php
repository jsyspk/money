<?php
declare(strict_types=1);

namespace J\Money;
Class AnyCurrency
{
    protected $symbol;
    protected $anyCurrency;
    protected $isoCode;

    public function __construct(float $anyCurrency, string $isoCode)
    {
        $this->anyCurrency = $anyCurrency;
        $this->isoCode = $isoCode;

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
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }


}