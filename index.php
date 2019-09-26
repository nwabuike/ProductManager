<?php
require_once 'classes/ProductController.php';
$productController = new ProductController();
$products = $productController->index();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Manager</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">

</head>

<body>
    <header>
        <div class="page-header clearfix" id="header">
            <h1 class="float-left"><i class="icon-books"></i>Product Manager</h1>
            <a href="create.php" class="btn btn-success float-right"><i class="icon-add"></i> Add New Product</a>
        </div>
    </header>
    <div class="container" style="margin-buttom:30px;">
        <div class="row">

            <div class="col-md-9 mr-auto ml-auto">

                <h2><i class="icon-list"></i> List of All product</h2>

                <table class="table table-hover table-active table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quaninty</th>
                            <th scope="col">Unit Price</th>
                            <th colspan="3" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <?php
                    if($products){
                    foreach ($products as $row) {
                        
                        ?>
                        <tbody>
                            <tr>
                                <th scope="col"><?= $row['id']; ?></th>
                                <td><?php echo $row['name'] ; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['unit_price']; ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="icon-edit2"></i>Edit</a></td>
                                <td><a href="product.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="icon-pageview"></i> View</a></td>
                                <td><a href="routes/web.php?action=delete&id=<?php echo $row['id']; ?> "   class="btn btn-danger"><i class="icon-delete_forever"></i> Delete</a></td>
                            </tr>
                        </tbody>
                    <?php }} ?>
                </table>
            </div>
        </div>
    </div>

    <footer>

        <div class="copy" id="copyright">
            Copyright &copy; 2019 - <?php echo date('Y') ?> <span>Product Manager</span>
        </div>

    </footer>
    <script src="js/jQuery_3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>