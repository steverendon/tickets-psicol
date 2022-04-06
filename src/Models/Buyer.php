<?php

namespace Steven\Tickets\Models;

class Buyer extends Model
{
    public function all()
    {
        $sentence = $this->conn->query('SELECT * FROM buyers');
        $sentence->execute();

        return $sentence->fetch();
    }

    public function create(array $data)
    {
        $sentence = $this->conn->prepare('INSERT INTO buyers (first_name, last_name, address, email, phone) VALUES (?,?,?,?)');

        $sentence->bindParam(1, $data['first_name']);
        $sentence->bindParam(1, $data['last_name']);
        $sentence->bindParam(1, $data['address']);
        $sentence->bindParam(1, $data['email']);
        $sentence->bindParam(1, $data['phone']);

        $sentence->execute();
    }
}