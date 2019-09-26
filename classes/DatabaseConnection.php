<?php

class DatabaseConnection
{

    public $connection;

    function __construct()
    {
        $this->connection = $this->connection();
    }

    public function query($sql)
    {
        $stmt = $this->connection->query($sql); 
        return $stmt;
    }

    // // public function connection()
    // // {
    // //     $dbhost = 'localhost';
    // //     $dbuser = 'root';
    // //     $dbpass = '';
    // //     $dbname = 'product_manager';
    // //     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($this->connection));
    // //     return  $connection;
    // // }


    public function connection()
    { 
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dataBaseName = 'product_manager';

        //Set DSN
        $dsn = "mysql:host=$host;dbname=$dataBaseName";
        //create a PDO instance

        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $password, $opt);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
        return $pdo;
    }
}
