<?php

require_once "Transaction.php";

$transaction = new Transaction(); // this is object

$transaction->amount = 20;

var_dump($transaction->amount);
