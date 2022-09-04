<?php
require __DIR__ . '/vendor/autoload.php';

App\VariaviesDeAmbiente\Variaveis::load(__DIR__);

use App\Database\Connection;
use App\Queries\Product;

$conn = new Connection;


$pro = new Product($conn);

$pro = $pro->getAllProducts();

echo '<pre>';
print_r($pro);
echo '</pre>';exit;