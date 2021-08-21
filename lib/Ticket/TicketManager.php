<?php

namespace App\Ticket;

use App\Database\DbManager;

class TicketManager
{
    public static function getTicketsList(): array
    {
        $tickets = [];
        $ref = DbManager::getReference('request_person');
        $ticketsSections = $ref->getValue();
        if ($ticketsSections === null)
            return [];
        foreach ($ticketsSections as $ticketSection)
        {
            $i = 0;
            foreach ($ticketSection as $ticket)
            {
                $tickets[] = new Ticket($ticket, $i);
                $i++;
            }
        }

        return $tickets;
    }
}