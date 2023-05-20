<?php
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
$cat_category = new Category("cat", "fa-solid fa-cat");
$test = new Product("Test", 3, $dog_category, "");
$mio_gatto = new Food("Mio gatto", 2, $cat_category, "", "2023-08-31");
$duck = new Toy("Paperella", 10, $dog_category, "gomma", "papera");

$mio_cane = new Food("Mio cane", 2.5, $dog_category, "", "2023-09-15");

$products = [
    $mio_gatto,
    $mio_cane,
    $duck
];
