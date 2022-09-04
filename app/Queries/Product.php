<?php

namespace App\Queries;

use App\Database\Connection;

class Product extends Connection
{
    public function getAllProducts()
    {
        $query = Connection::connectionDatabase()->prepare('SELECT produtos.NOME, produtos.VALOR, produtos.DESCRICAO, produtos.CATEGORIA, categoria.CATEGORIA 
                                                            FROM produtos 
                                                            INNER JOIN categoria
                                                            ON produtos.CATEGORIA = categoria.ID');
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}