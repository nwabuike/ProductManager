
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
        <div class="page-header clearfix" id="header" >
                <h1 class="float-left"><i class="icon-books"></i>Product Manager</h1>
                <a href="create.php" class="btn btn-success float-right"><i class="icon-add"></i> Add New Product</a>
            </div>
    <div class="container" style="margin-bottom: 30px;">
            <div class="row">
    
                <div class="col-md-8 mr-auto ml-auto">
                        <h2><i class="icon-create_new_folder"></i> Create product</h2>
                    <form method="Post" action="routes/web.php">
                        <input type="hidden" name="action" value="create" />
                      <div class="form-group">
                          <label class="">Name <span class="badge badge-info">New</span></label>
                          <input class="form-control is-valid" name="name" type="text" required>
                          <div class="valid-feedback">Looks cool!.</div>
                      </div>
                      <div class="form-group">
                          <label class="">Description <span class="badge badge-info">New</span></label>
                          <textarea name="descripton" class="form-control is-valid" rows="3" required></textarea>
                          <div class="valid-feedback">Looks cool!.</div>
                      </div>
                      <div class="form-group">
                          <label class="">Quantity <span class="badge badge-info">New</span></label>
                          <input type="number" class="form-control is-valid" name="quaninty" required> 
                          <div class="valid-feedback">Looks cool!.</div>
                      </div>
                      <div class="form-group">
                          <label for="unitpricePerItem">Unit Price <span class="badge badge-info">New</span></label>
                          <input class="form-control is-valid" type="text" name="unit_price" required>
                          <div class="valid-feedback">Looks cool!.</div>
                      </div>
                      
                          <button type="submit" class="btn btn-success " name="save">Save</button>
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