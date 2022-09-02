<?php

namespace App\Database;


class Connection
{
    public function __construct()
    {
        try {
            $pdo = new \PDO('mysql:host=' . getenv('LOCALHOST') . ';dbname=' . getenv('DBNAME'), getenv('ROOT'), getenv('PASSWORD'));
            $pdo->setAttribute(\PDO::ERRMODE_EXCEPTION, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
