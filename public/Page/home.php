<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Produtos</title>
</head>
<body>
    <section class="produtos">
<?php

foreach ($produtosDados as $value) {

    ?>
<div class="produto">
            <img class="imagem-produto" src="public/imagem/produtos/<?= $value['IMAGEM']?>" alt="">
            <h1 class="nome-produto"><?= $value['NOME']?></h1>
            <p  class="categoria-produto"><?= $value['CATEGORIA']?></p>
            <p  class="valor-produto"><?= $value['VALOR']?></p>
            <p  class="decricao-produto"><?= $value['DESCRICAO']?></p>
        </div>
<?php
    }        
?>
</section>
</body>
</html>