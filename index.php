<?php
require_once __DIR__ . "/vendor/autoload.php";

ini_set("display_errors", 1);
error_reporting(~0);

use App\Transaction;

// This is a Object class instance
// Chanining რომ იყოს შესაძლებელი მეთოდიდან უნდა დავაბრუნოთ კლასის ინსტანსი ანუ $this ,ასევე new ინსტანსი უნდა ჩავსვათ ფრჩხილებში
$transaction = (new Transaction(100, "new transaction 1"))
    ->addTax(8)
    ->addDiscount(10);

var_dump($transaction->getAmount());
