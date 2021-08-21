<?php

namespace App\Ticket;

class Ticket
{
    public $fio;
    public $pass;
    public $target;
    public $org;
    public $owner;
    public $car;
    public $date;

    protected $danger;

    public function __construct($data)
    {
        $this->fio = $data['forwho'];
        $this->pass = $data['passport'];
        $this->target = $data['purpose'];
        $this->org = $data['organisation'];
        $this->owner = $data['who'];
        $this->date = $data['date'];
        $this->danger = $data['dangerous'];
        $this->car = 'none';
    }

    public function isDanger()
    {
        return $this->danger;
    }
}