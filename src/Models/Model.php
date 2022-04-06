<?php

namespace Steven\Tickets\Models;

use PDO;

abstract class Model
{
    protected $conn;

    public function __construct()
    {
        $this->setConnection();
    }

    protected function setConnection()
    {
        $this->conn = new PDO(
            'mysql:host='.env('host').';dbname='.env('database'),
            env('username'),
            env('password')
        );
    }

    protected function getConnection()
    {
        return $this->conn;
    }
}