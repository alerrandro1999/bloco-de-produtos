<?php
require __DIR__ . '/../vendor/autoload.php';

App\VariaviesDeAmbiente\Variaveis::load(__DIR__ . '/../');

use App\Database\Connection;
use App\Queries\Product;

$conn = new Connection;

$produtos = new Product($conn);

$produtosDados = $produtos->getAllProducts();

require 'pages/home.php';

