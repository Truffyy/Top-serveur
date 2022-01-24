<?php

namespace App\model;

class ListServeur
{


    public function __construct($type)
    {
        global $db;
        $this->db = $db;
        $this->type = $type;
    }


    public function getServ()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = ? order by vote desc" );
        $log->execute([$this->type]);
        return $log->fetchall();
    }

    public function getServByTag($tag)
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = ? and tag  LIKE ? order by vote desc" );
        $log->execute([$this->type, '%' . $tag . '%']);
        return $log->fetchall();
    }
}



