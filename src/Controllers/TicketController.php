<?php

namespace Steven\Tickets\Controllers;

use Steven\Tickets\Models\Buyer;
use Steven\Tickets\Models\Ticket;
use Steven\Tickets\Views\Render;

class TicketController
{
    protected $ticket;

    public function __construct()
    {
        $this->ticket = new Ticket;
    }

    public function update(array $data)
    {
        $this->ticket->update($data);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}