<?php

namespace Steven\Tickets\Controllers;

use Steven\Tickets\Models\Buyer;
use Steven\Tickets\Views\Render;
use Steven\Tickets\Models\Ticket;

class HomeController
{
    private $render;

    public function __construct()
    {
        $this->render = new Render();
    }

    public function index()
    {
        $buyers = new Buyer();
        $tickets = new Ticket();


        return $this->render->show('home', [
            'buyers' => $buyers->all(),
            'tickets' => $tickets->all()->fetch(),
        ]);
    }
}
