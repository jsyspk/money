<?php
declare(strict_types=1);

namespace J\Money;

class MathOperations
{
    private $amount;

    public function __construct(Amount $amount)
    {

        $this->amount = $amount->getAmount();
    }


    public function add(float $total)
    {
        $this->amount = $this->amount + $total;
        return $this->amount;

    }
    public function subtract(float $total)
    {
        $this->amount = $this->amount - $total;
        return $this->amount;

    }
    public function multiply(float $total)
    {
        $this->amount = $this->amount * $total;
        return $this->amount;

    }
    public function divide(float $total)
    {
        $this->amount = $this->amount / $total;
        return $this->amount;

    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}