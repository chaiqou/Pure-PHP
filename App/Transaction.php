<?php
declare(strict_types=1);

namespace App;

// this is class

class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    // Calculate tax and amount together
    public function addTax(float $rate): Transaction
    {
        $this->amount = $this->amount + ($this->amount * $rate) / 100;

        return $this;
    }

    // Calculate discount and amount together
    public function addDiscount(float $rate): Transaction
    {
        $this->amount = $this->amount - ($this->amount * $rate) / 100;

        return $this;
    }

    // get amount outside class scope
    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
