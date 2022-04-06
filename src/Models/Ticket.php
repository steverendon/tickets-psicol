<?php

namespace Steven\Tickets\Models;

class Ticket extends Model
{
    public function all()
    {
        $sentence = $this->conn->query('SELECT * FROM tickets LIMIT 1');
        $sentence->execute();

        return $sentence;
    }

    public function availability()
    {
        $availables = $this->all()->fetch();

        return $availables['number'];
    }
}