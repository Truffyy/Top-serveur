<?php

namespace App\model;

class UpdatePass
{
    public function __construct(string $password)
    {
        global $db;
        $this->db = $db;
        $this->password = $password;
        $this->connected = $_SESSION['idUser'] ?? null;
        $this->id = $_SESSION['idUser'] ?? null;

    }

    function UpdateUser()
    {
        $user = $this->db->prepare("UPDATE accounts SET password = ? WHERE id = ?");
        $user->execute([$this->password, $this->id]);
    }

}

?>