<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
$cat_category = new Category("cat", "fa-solid fa-cat");

$test = new Product("Test", 3, $dog_category, "");
var_dump($test);

$mio_gatto = new Food("Mio gatto", 2, $cat_category, "", "2023-08-31");
var_dump($mio_gatto);

$duck = new Toy("Paperella", 10, $dog_category, "", "gomma", "papera");
var_dump($duck);
