<?php

namespace App\model;

class ListeJeux
{


    public function __construct()
    {
        global $db;
        $this->db = $db;;
    }





    public function getNumbersMine()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Minecraft'");
        $log->execute();
        return $log->fetchAll();
    }


    public function getNumbersDisc()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Discord'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersTerraria()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Terraria'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersDofus()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Dofus'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersGarry()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Garry\'s Mod'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersGta()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Grand Theft Auto'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersWow()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'World of Warcraft'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersArk()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Ark'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersRust()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Rust'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersCS()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Counter Strike'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersHabbo()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Habbo'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersArma()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Arma 3'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersConan()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Conan Exiles'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersForum()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Forums RP'");
        $log->execute();
        return $log->fetchAll();
    }
    public function getNumbersOgame()
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE type = 'Ogame'");
        $log->execute();
        return $log->fetchAll();
    }



}


