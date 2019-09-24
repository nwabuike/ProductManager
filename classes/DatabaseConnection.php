<?php

class DatabaseConnection
{

    // my database denfine
    private $host = "localhost";
    private $db_name = "product_manager";
    private $username = "root";
    private $password = "";
    public $connection;

    function __construct()
    {
        $this->connection = $this->connection();
    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));
        
        return $result;
    }

    public function connection()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'product_manager';
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($this->connection));
        return  $connection;
    }
}
