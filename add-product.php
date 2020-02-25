<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product - Database Connectivity Example</title>

        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:50%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Welcome :)</h1>

            <a href="Login.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>
            <a href="index.php">Logout</a>
            <hr>

            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table style="margin:0 auto;">
                    <tr>
                        <td>
                            Product ID:
                        </td>
                        <td>
                            <input type="text" name="productID">
                        </td>
                    <tr>
                        <td>Product Name:</td>
                        <td>
                            <input type="text" name="description">
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td>
                            <input type="text" name="price">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" value="Add Product">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <?php
                            if(isset($_REQUEST['result']))
                            {
                                if($_REQUEST['result']=="success")
                                {
                                    echo "Product Added Successfully.";
                                }
                                else if($_REQUEST['result']=="fail")
                                {
                                    echo "Something went Wrong.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
