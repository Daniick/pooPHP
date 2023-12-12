<?php


class clientes
{
    private $conn;

    public function __construct()
    {
        $dataBase = new DataBase();
        $this->conn = $dataBase->getPdo();
    }

    public function all()
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
