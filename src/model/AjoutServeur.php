<?php

namespace App\model;

class AjoutServeur
{
    public function __construct()
    {
        global $db;
        $this->db = $db;

    }


    public function addServ($name, $descri, $type, $tag, $discord, $url, $token, $img, $ip, $port, $idUser)
    {
        $serv = $this->db->prepare("INSERT INTO serveurs(name, descri, type, tag, discord, url, token, img, ip, port, idUser) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $serv->execute([$name, $descri, $type, $tag, $discord, $url, $token, $img, $ip, $port, $idUser]);
    }


    public function getVerify()
    {
        $log = $this->db->prepare("SELECT token FROM serveurs");
        $log->execute();
        return $log->fetchall();
    }

}

