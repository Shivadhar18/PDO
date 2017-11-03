<?php

class UserManager
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getByIDLessThan ($number) {
        $SQL = 'SELECT * FROM accounts WHERE id < ?;';
        $prep = $this->db->prepare($SQL);
        $res = $prep->execute([$number]);
        if ($res) {
            return $prep->fetchAll();
        } else {
            return null;
        }
    }
}