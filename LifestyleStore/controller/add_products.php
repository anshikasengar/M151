<?php
$con=mysqli_connect("localhost","anshikasengar_admin","123456","anshikasengar_products") or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<body>
<head>
<link rel="shortcut icon" href="view/img/lifestyleStore.png" />
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../view/bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../view/bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="../view/css/style.css" type="text/css">
    </head>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>Add product</b></h1>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="price" placeholder="Preis" required="true" pattern="">
                            </div> 
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
