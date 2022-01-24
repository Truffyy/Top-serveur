<?php

namespace App\model;

class Vote
{


    public function __construct()
    {
        global $db;
        $this->db = $db;;
    }


public function SetVote($ip,$token,$date,$name)
{
    $log = $this->db->prepare("INSERT INTO vote(ip, token, date, name) VALUES (?,?,?,?)");
    $log->execute([$ip,$token,$date,$name]);
}

    public function UptVote($ip,$token,$date,$name,$ipNow,$tokenNow)
    {
        $log = $this->db->prepare("UPDATE vote SET ip = ?, token = ?, date = ?, name = ? WHERE ip = ? and token = ?");
        $log->execute([$ip,$token,$date,$name,$ipNow,$tokenNow]);
    }

public function SetServeurVote($vote,$token)
{
    $log = $this->db->prepare("UPDATE serveurs SET vote = ? WHERE token = ?");
    $log->execute([$vote,$token]);

}

public function GetVote($id)
{
    $log = $this->db->prepare("SELECT * FROM vote WHERE token = ? ORDER BY id DESC");
    $log->execute([$id]);
    return $log->fetchAll();
}
    public function GetVoteIp($token,$ip)
    {
        $log = $this->db->prepare("SELECT * FROM vote WHERE token = ? AND ip = ?");
        $log->execute([$token,$ip]);
        return $log->fetchAll();
    }



}



