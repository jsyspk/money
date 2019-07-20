<?php
declare(strict_types=1);

namespace J\Imap\Tests;

use J\Money\Amount;
use J\Money\MathOperations;
use PHPUnit\Framework\TestCase;

class AmountTest extends TestCase
{

    public function setUp(): void
    {

    }
    public function test_must_not_initialize_with__invalid_amount()
    {
        $amount = 125;
        $amountClass = new MathOperations(new Amount($amount));
        $add = 2;
        $amountClass->divide($add);
        $amountClass->getAmount();
    }


    public function tearDown(): void
    {
        parent::tearDown();
    }
}
