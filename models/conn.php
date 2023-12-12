<?php
define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'clientes');


class conexion
{
    private $hostname;
    private $user;
    private $pass;
    private $dbname;
    private $pdo;

    public function __construct()
    {
        $this->hostname = HOST_NAME;
        $this->user = USER_NAME;
        $this->pass = PASSWORD;
        $this->dbname = DB_NAME;

        $this->pdo = new PDO("mysql:host=$this->hostname; dbname=$this->dbname", $this->user, $this->pass);
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    function closePdo()
    {
        $this->pdo = null;
    }
}
