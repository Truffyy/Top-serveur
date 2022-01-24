<?php

namespace App\model;

class Details
{


    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function setServeurClic($clic, $token)
    {
        $log = $this->db->prepare("UPDATE `serveurs` SET clics = ? WHERE token = ?");
        $log->execute([$clic, $token]);
    }

    public function setIpClic($ip, $token, $date)
    {
        $log = $this->db->prepare("INSERT INTO clic(ip, token, date) VALUES (?,?,?) ");
        $log->execute([$ip, $token, $date]);
    }
    public function uptIpClic($ip, $token, $date, $ipActual, $tokenActual)
    {
        $log = $this->db->prepare("UPDATE clic SET ip = ?, token = ?, date = ? WHERE ip = ? AND token = ?");
        $log->execute([$ip, $token, $date, $ipActual, $tokenActual]);
    }
    public function getServByName($name)
    {
        $log = $this->db->prepare("SELECT * FROM serveurs WHERE token = ?");
        $log->execute([$name]);
        return $log->fetchAll();
    }


    public function getClic($token)
    {
        $log = $this->db->prepare("SELECT clics FROM `serveurs` WHERE token = ?");
        $log->execute([$token]);
        return $log->fetchAll();
    }


    public function getClicIp($token, $ip)
    {
        $log = $this->db->prepare("SELECT * FROM `clic` WHERE token = ? and ip = ?");
        $log->execute([$token, $ip]);
        return $log->fetchAll();
    }

}



