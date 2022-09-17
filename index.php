<?php

require_once "Transaction.php";

// This is a Object class instance
// Chanining რომ იყოს შესაძლებელი მეთოდიდან უნდა დავაბრუნოთ კლასის ინსტანსი ანუ $this ,ასევე new ინსტანსი უნდა ჩავსვათ ფრჩხილებში
$transaction = (new Transaction(100, "new transaction 1"))
    ->addTax(8)
    ->addDiscount(10);

var_dump($transaction->getAmount());
