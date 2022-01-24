<?php

namespace App\model;

class User
{
    /**
     * @var int
     * id of the user in DTB
     */
    private $id;
    /**
     * @var string
     * Username of the user in DTB
     */
    private $username;
    /**
     * @var string
     * email of the user in DTB
     */
    private $email;
    /**
     * @var string
     * password of the user in DTB
     */
    private $password;
    /**
     * @var string
     * return if the user is connected or not
     */
    private $connected;

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     */
    public function __construct(string $username, string $email, string $password)
    {
        global $db;
        $this->db = $db;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->connected = $_SESSION['idUser'] ?? null;
        $this->id = $_SESSION['idUser'] ?? null;

    }

    function createUser($cle)
    {
        $user = $this->db->prepare("INSERT INTO accounts(username, email, password, cle) VALUES (?,?,?,?)");
        $user->execute([$this->username, $this->email, $this->password, $cle]);
        $_SESSION['id'] = $this->db->lastInsertId();


    }


    function emailExist()
    {

        $email = $this->db->prepare("SELECT email FROM accounts WHERE email = ?");
        $email->execute([$this->email]);
        return $email->fetch();
    }

    function UsernameExist()
    {
        $username = $this->db->prepare("SELECT username FROM accounts WHERE username = ?");
        $username->execute([$this->username]);
        return $username->fetch();
    }

}

?>