<?php

namespace Steven\Tickets\Controllers;

use Steven\Tickets\Models\Buyer;
use Steven\Tickets\Views\Render;

class TicketController
{
    private $render;
    protected $buyer;

    public function __construct()
    {
        $this->render = new Render();
        $this->buyer = new Buyer;
    }

    public function index()
    {
        $buyer = new Buyer();
        
        $this->render->show('buyer', [
            'buyers' => $buyer->all(),
        ]);
    }

    public function store(array $data)
    {
        $this->buyer->create($data);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}