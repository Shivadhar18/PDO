<?php

class Database
{

    private $db_host = "sql2.njit.edu";
    private $db_name = 'sp2344';
    private $db_user = 'sp2344';
    private $db_pass = 'mzta4xT7I';

    public function getConnection() {
        return new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name . ';charset=utf8', $this->db_user, $this->db_pass);
    }
}