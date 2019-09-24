<?php

require_once('../classes/ProductController.php');

if (isset($_POST['action']) && $_POST['action'] == 'create') {
    $data = [
        'name' => $_REQUEST['name'],
        'descripton' => $_REQUEST['descripton'],
        'quaninty' => $_REQUEST['quaninty'],
        'unit_price' => $_REQUEST['unit_price']
    ];

    $productController = new ProductController();
    $response = $productController->store($data);

    if ($response === true) {
        var_dump($response);
        header('location: ../index.php');
    }
    return 'ERROR: Could not able to execute';
}
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $data = [
        'id' => $_REQUEST['id'],
        'name' => $_REQUEST['name'],
        'descripton' => $_REQUEST['descripton'],
        'quaninty' => $_REQUEST['quaninty'],
        'unit_price' => $_REQUEST['unit_price']
    ];

    $productController = new ProductController();
    $response = $productController->update($data);

    if ($response === true) {
        var_dump($response);
        header('location: ../index.php');
    }
    return 'ERROR: Could not able to execute';
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $productController = new ProductController();
    $data = $productController->delete($id);
    if($data){
        header('location: ../index.php');
    }else{
        echo "Failed to Delete Record";
    }

}
