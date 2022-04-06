<?php

namespace Steven\Tickets\Controllers;

use Steven\Tickets\Models\Buyer;
use Steven\Tickets\Views\Render;
use Steven\Tickets\Models\Assignment;
use Steven\Tickets\Models\Ticket;
use Steven\Tickets\Services\TicketsAvailableService;

class AssignmentController
{
    private $render;
    protected $assignment;
    protected $buyer;
    protected $ticket;
    protected $ticketsAvailableService;

    public function __construct()
    {
        $this->render                   = new Render();
        $this->assignment               = new Assignment;
        $this->buyer                    = new Buyer;
        $this->ticket                   = new Ticket;
        $this->ticketsAvailableService  = new TicketsAvailableService;
    }

    public function index()
    {
        $this->render->show('assignment', [
            'assignments'           => $this->assignment->all(),
            'buyers'                => $this->buyer->all(),
            'ticketsAvailable'      => $this->ticketsAvailableService->availability(),
        ]);
    }

    public function store(array $data)
    {
        $this->ticketsAvailableService->assignTicket($data);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}