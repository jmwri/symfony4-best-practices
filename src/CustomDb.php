<?php

namespace App;

class CustomDb
{
    private $host;
    private $port;

    public function __construct($host, $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function getUsers()
    {
        return [
            'Jim',
            'Dan',
            'Eleni',
        ];
    }
}