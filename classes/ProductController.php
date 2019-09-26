<?php
require_once 'DatabaseConnection.php';

class ProductController
{

    private $databaseConnection;

    /* Get database access */
    public function __construct()
    {
        $this->databaseConnection = new DatabaseConnection();
    }
    public function index()
    {
        $sql = "SELECT * FROM products";
        $result = $this->databaseConnection->query($sql);
        return $result->fetchAll();
    }

    public function show($id = null)
    {
        $sql = "SELECT * FROM `products`";
        if ($id) {
            $sql .= " WHERE id=$id";
        }
        $result = $this->databaseConnection->query($sql);
        return $result->fetch(PDO:: FETCH_ASSOC);
    }
    public function store($data)
    {
        $name = $data['name'];
        $descripton = $data['descripton'];
        $quaninty = $data['quaninty'];
        $unit_price = $data['unit_price'];

        $sql = "INSERT INTO products (name, description, quantity, unit_price, created_at, updated_at) values ('$name', '$descripton', '$quaninty' , '$unit_price', now(), now())";
        return $this->databaseConnection->query($sql);
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM `products`";
        if ($id) {
            $sql .= " WHERE id=$id";
        }
        $result = $this->databaseConnection->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $descripton = $data['descripton'];
        $quaninty = $data['quaninty'];
        $unit_price = $data['unit_price'];

        $sql = "UPDATE products SET name='$name', description='$descripton', quantity='$quaninty', unit_price='$unit_price', created_at=now(), updated_at=now()  WHERE id =$id ";
        return $this->databaseConnection->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE id=$id";
        $result = $this->databaseConnection->query($sql);
        return $result;
    }
}
