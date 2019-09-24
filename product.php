<?php
require_once('classes/ProductController.php');
$productController = new ProductController();
$id = $_GET['id'];
$read = $productController->show($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Porduct | </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
</head>

<body>
    <header>
    <div class="page-header clearfix" id="header" >
                <h1 class="float-left"><i class="icon-books"></i>Product Manager</h1>
                <a href="create.php" class="btn btn-success float-right"><i class="icon-add"></i> Add New Product</a>
            </div>
    </header>
    <div class="container" style="margin-buttom:30px;">
        <div class="row">
            
           <div class="col-md-8 mr-auto ml-auto">
                
                        <h2><i class="icon-progress-one"></i>Single Product</h2>
                    
                <table class="table active " id="tab">
                <input type="hidden" name="id" value="<?= $id['id'] ?>" />
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Name:</th>
                            <td><?php echo $read['name'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Description:</th>
                            <td><?php echo $read['description']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Quaninty:</th>
                            <td><?php echo $read['quantity']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Unit Price:</th>
                            <td><?php echo $read['unit_price']; ?></td>
                        </tr>
                        <tr>
                            <th colspan="">Action:</td>
                            <td><a href="edit.php?id=<?php echo $read['id']; ?>" class="btn btn-success"><i class="icon-edit2"></i>Edit</a></td>
                                    <td><a href="product.php?id=<?php echo $read['id']; ?>" class="btn btn-warning"><i class="icon-pageview"></i> View</a></td>
                                    <td><a href="routes/web.php?action=delete&id=<?php echo $read['id']; ?>" class="btn btn-danger"><i class="icon-delete_forever"></i> Delete</a></td>
                        </tr>
                    </thead>
                    </table>
                    
           </div>
        </div>
    </div>
    <footer>
           
           <div class="copy" id="copyright">
                   Copyright &copy; 2019 - <?php echo date('Y')?> <span>Product Manager</span>
                 </div>
  
</footer>
    <script src="js/jQuery_3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>