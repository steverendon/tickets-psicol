<?php

namespace Steven\Tickets\Models;

class Ticket extends Model
{
    public function all()
    {
        $sentence = $this->conn->query('SELECT * FROM tickets');
        $sentence->execute();

        return $sentence->fetch();
    }
}