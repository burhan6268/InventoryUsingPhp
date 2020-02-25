<?php
                    include "config.php";

                    if(isset($_POST['submit'])){

                        $uname = mysqli_real_escape_string($conn,$_POST['user']);
                        $password = mysqli_real_escape_string($conn,$_POST['pwd']);

                        if ($uname != "" && $password != "")
                            {
                            if($uname=="burhan" and $password=="admin")
                                {
                                $_SESSION['uname'] = $uname;
                                header('Location: Login.php');
                             }
                            else{
                                echo "Invalid username and password";
                            }

                        }

                    }
                    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vora Electronic Store</title>

        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div id="wrapper">

            <h1>Vora Electronic Store</h1>

            <a href="index.php">Home</a> | 
<!--            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>-->

            <hr>
            <h2>Welcome</h2>
            <p>This is a Inventory Application for Vora Electronics.</p>
            
            <form action="" method="post">
                
                <table>
                    <tr>
                        <th>Login</th>
                    </tr>
                    <tr>
                        <td>Username : </td>
                        <td>
                            <input type="text" title="Username" name="user" required>
                        </td>
                    </tr>
                    </br>
                    <tr>
                        <td>
                            Password :
                        </td>
                        <td>
                            <input type="password" title="Password" name="pwd" required>
                        </td>
                    </tr>
                    
                    <tr>
                        <input type="submit" value="Login" name="submit">
                        <input type="reset" value="Clear">
                    </tr>
                    
                </table>
            </form>
        </div>
    </body>
</html>
