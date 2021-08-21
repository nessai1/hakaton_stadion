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

    protected $dir_conf;
    protected $head_conf;

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

        $this->dir_conf = $data['confirmed_director'];
        $this->head_conf = $data['confirmed_head'];
    }

    public function headConfirm()
    {
        return $this->head_conf;
    }

    public function directorConfirm()
    {
        return $this->dir_conf;
    }

    public function sbConfirm()
    {
        return false;
    }

    public function isDanger()
    {
        return $this->danger;
    }
}