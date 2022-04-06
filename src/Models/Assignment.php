<?php

namespace Steven\Tickets\Models;

class Assignment extends Model
{
    public function all()
    {
        $query = 'SELECT
            b.first_name,
            b.last_name,
            sum(a.number) AS `number`
            FROM assignments AS a
            JOIN buyers AS b
            ON a.buyer_id = b.id
            GROUP BY a.buyer_id';

        $sentence = $this->conn->query($query);
        $sentence->execute();

        return $sentence;
    }

    public function create(array $data)
    {
        $sentence = $this->conn->prepare('INSERT INTO assignments (buyer_id, `number`) VALUES (?,?)');

        $sentence->bindParam(1, $data['buyer_id']);
        $sentence->bindParam(2, $data['number']);

        $sentence->execute();
    }

    public function countNumber()
    {
        $sentence = $this->conn->query('SELECT SUM(`number`) AS `number` FROM assignments');
        $sentence->execute();
        $record = $sentence->fetch();

        return $record['number'];
    }
}