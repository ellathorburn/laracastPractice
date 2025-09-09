<?php
class DatabaseConnection{
    public $connection;
    public $mydsn;
    public function __construct($dsn){

        $this->mydsn = $dsn;

        $this->connection = new PDO($dsn, "root", "password", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);



    }
    public function query($query, $params = []){

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }

}
