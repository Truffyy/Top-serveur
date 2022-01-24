<?php

namespace App\model;

class Note
{


    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function SetNote($stars, $name, $com, $token)
    {
        $log = $this->db->prepare("INSERT INTO commentaire(stars, name, comment, token) VALUES (?,?,?,?)");
        $log->execute([$stars, $name, $com, $token]);
    }

    public function SetServeurNote($stars, $com, $id)
    {
        $log = $this->db->prepare("UPDATE serveurs SET stars = ?, com = ?  WHERE token = ?");
        $log->execute([$stars, $com, $id]);
    }

    public function GetNote($id)
    {
        $log = $this->db->prepare("SELECT * FROM `commentaire` WHERE token = ? ORDER BY id desc LIMIT 0,10");
        $log->execute([$id]);
        return $log->fetchAll();
    }

    public function GetMore($id)
    {
        $log = $this->db->prepare("SELECT * FROM `commentaire` WHERE token = ? ORDER BY id desc LIMIT 10,10");
        $log->execute([$id]);
        return $log->fetchAll();
    }

}



