<?php

namespace Steven\Tickets\Services;

use Exception;
use Steven\Tickets\Models\Ticket;
use Steven\Tickets\Models\Assignment;

class TicketsAvailableService
{
    protected $assignment;
    protected $ticket;

    public function __construct()
    {
        $this->assignment = new Assignment;
        $this->ticket = new Ticket;
    }

    public function availability()
    {
        $assigned = $this->assignment->countNumber();
        $ticketAvailability = $this->ticket->availability();

        return $ticketAvailability - $assigned;
    }

    public function assignTicket(array $data)
    {
        if ($this->availability() > $data['number'] && $data['number'] > 0) {
            $this->assignment->create($data);
            echo true;
        }
        echo false;
    }
}
