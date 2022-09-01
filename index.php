<?php

require __DIR__ . '/vendor/autoload.php';

App\VariaviesDeAmbiente\Variaveis::load(__DIR__);

echo '<pre>';
print_r(getenv());
echo '</pre>';

