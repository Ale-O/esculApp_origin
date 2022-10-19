<?php

require_once 'model/Manager.php';

class LoginManager extends mgmtHU\Model\Manager
{
    public function getAllLogin()
    {
        $db = $this->dbConnect();
        $allLogin = $db->prepare('SELECT * FROM login');
        $allLogin->execute([]);

        return $allLogin;
    }

    public function getLoginById($identifiant)
    {
        $db = $this->dbConnect();
        $login = $db->prepare('
            SELECT l.identifiant identifiant, l.password password
            FROM login l
            WHERE l.identifiant = :identifiant
        ');

        $login->execute([
            'identifiant' => $identifiant,
            ]);

        return $login;
    }

    public function modifLogin($identifiant, $newPassword)
    {
        $db = $this->dbConnect();
        $modifLogin = $db->prepare('

        UPDATE `login` 

        SET password = :newPassword 

        WHERE login.identifiant = :identifiant;


    ');

        $modifLogin->execute([
        'identifiant' => $identifiant,
        'newPassword' => $newPassword,
        ]);

        return $modifLogin;
    }
}
