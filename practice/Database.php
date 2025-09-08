<?php
class DatabaseConnection{
    public $connection;
    public $mydsn;
    public function __construct($dsn){
        $this->mydsn = $dsn;

        $this->connection = new PDO($dsn, "root", "password");
    }
    public function query($query){

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }

}
