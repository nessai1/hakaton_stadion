<?php

namespace App\Render;

use App\Ticket\Ticket;
use App\Ticket\TicketManager;
use App\User\UserObject;

class RenderManager
{
    public static function renderList(UserObject $handler)
    {
        $tickets = static::getListElement(TicketManager::getTicketsList(), $handler);
        ob_start();
        include __DIR__.'/../../view/edit_list.php';
        return ob_get_clean();
    }

    public static function getListElement(array $ticketArray, UserObject $handler)
    {
        $ticketForms = [];
        for ($i = 0, $maxI = count($ticketArray); $i < $maxI; $i++)
        {
            $ticketForms[] = static::getListItem($ticketArray[$i], $handler);
        }
        return $ticketForms;
    }

    public static function getListItem(Ticket $ticket, UserObject $handler)
    {
        ob_start();
        include __DIR__.'/../../view/list_item.php';
        return ob_get_clean();
    }
}