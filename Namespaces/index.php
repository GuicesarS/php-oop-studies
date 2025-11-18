<?php

// use entities\Product;
use entities\Product as productEntities;

require 'entities/products.php';
require 'models/products.php';

//$product = new \models\Product();

$product = new productEntities();
$product->showDetails();

?>