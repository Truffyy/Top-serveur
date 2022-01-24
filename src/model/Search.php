<?php

namespace App\model;

class Search
{


    public function __construct($name)
    {
        global $db;
        $this->db = $db;
        $this->name = $name;
    }


    public function getServ()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE name LIKE ?");
        $log->execute(['%' . $this->name . '%']);
        return $log->fetchall();
    }

}



