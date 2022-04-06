<?php

namespace Steven\Tickets\Models;

class Buyer extends Model
{
    public function all()
    {
        $sentence = $this->conn->query('SELECT * FROM buyers');
        $sentence->execute();

        return $sentence;
    }

    public function create(array $data)
    {
        $sentence = $this->conn->prepare('INSERT INTO buyers (first_name, last_name, address, email, phone) VALUES (?,?,?,?,?)');

        $sentence->bindParam(1, $data['first_name']);
        $sentence->bindParam(2, $data['last_name']);
        $sentence->bindParam(3, $data['address']);
        $sentence->bindParam(4, $data['email']);
        $sentence->bindParam(5, $data['phone']);

        $sentence->execute();
    }

    public function update(array $data)
    {
        $query = 'UPDATE buyers
                    SET
                    first_name = ?,
                    last_name = ?,
                    `address` = ?,
                    email = ?,
                    phone = ?
                    WHERE id = ?';

        $sentence = $this->conn->prepare($query);

        $sentence->bindParam(1, $data['first_name']);
        $sentence->bindParam(2, $data['last_name']);
        $sentence->bindParam(3, $data['address']);
        $sentence->bindParam(4, $data['email']);
        $sentence->bindParam(5, $data['phone']);
        $sentence->bindParam(6, $data['id']);

        $sentence->execute();
    }

    public function delete(int $id)
    {
        $sentence = $this->conn->prepare('DELETE FROM buyers WHERE id = ?');
        $sentence->bindParam(1, $id);
        $sentence->execute();
    }

    public function find(int $id)
    {
        $sentence = $this->conn->prepare('SELECT * FROM buyers WHERE id = ? LIMIT 1');
        $sentence->bindParam(1, $id);
        $sentence->execute();

        return $sentence->fetch();
    }
}
