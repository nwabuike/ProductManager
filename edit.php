<?php
require_once('classes/ProductController.php');
$productController = new ProductController();
$id = $_GET['id'];
$edit = $productController->edit($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product | Edit</title>
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
        <div class="container" style="margin-bottom:30px;">
                <div class="row">
                    <div class="col-md-8 mr-auto ml-auto">
                        
                            <h2><i class="icon-edit"></i>Edit Product</h2>
                        
                        <form method="Post" action="routes/web.php">
                        <input type="hidden" name="action" value="update" />
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                          <div class="form-group">
                              <input type="hidden"
                              <label class="">Name <span class="badge badge-info">Edit</span></label>
                              <input class="form-control is-valid" value="<?php echo $edit['name'] ?>" name="name" type="text" required>
                              <div class="valid-feedback">Looks cool!.</div>
                          </div>
                          <div class="form-group">
                              <label class="">Description <span class="badge badge-info">Edit</span></label>
                              <textarea name="descripton"  class="form-control is-valid" rows="3" required ><?php echo $edit['description']; ?></textarea>
                              <div class="valid-feedback">Looks cool!.</div>
                          </div>
                          <div class="form-group">
                              <label class="">Quantity <span class="badge badge-info">Edit</span></label>
                              <input type="number" value="<?php echo $edit['quantity']; ?>" class="form-control is-valid" name="quaninty" required> 
                              <div class="valid-feedback">Looks cool!.</div>
                          </div>
                          <div class="form-group">
                              <label for="unitpricePerItem">Unit Price <span class="badge badge-info">Edit</span></label>
                              <input class="form-control is-valid" type="text" value="<?php echo $edit['unit_price']; ?>" name="unit_price" required>
                              <div class="valid-feedback">Looks cool!.</div>
                          </div>
                          
                              <button type="submit" class="btn btn-success " name="save">Update</button>
                              <a href="index.php" class="btn btn-danger ">Back to Home Page</a>
                          
                        </form>
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