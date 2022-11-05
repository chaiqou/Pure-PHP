<?php 

require 'functions.php';
// require 'router.php';

// connect to database

$dsn = "mysql:host=localhost;port=3306;dbname=pure_php;charset=utf8mb4";

$pdo = new PDO($dsn, 'username', 'password');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

