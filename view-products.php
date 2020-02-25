<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products</title>

        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: burlywood}

            th
            {
                background-color: #4CAF50;
                color: burlywood;
            }

            h2
            {
                text-align: center;
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

            <h2>View Products</h2>

                <?php
                $host='localhost';
                $username='lokhanbu_admin';
                $password='BHCW(GQryCf+';
                $db_name='lokhanbu_mydb';

                //Create Connection
                $conn=mysqli_connect($host,$username,$password,$db_name);

                //Check Connection
                if(empty($conn))
                {
                die("Connection Failed<br>". mysqli_connect_error());
                }
                
                $query="Select * from vora_products";
                $result= mysqli_query($conn, $query);
                if(mysqli_num_rows($result)>0)
                {
                    echo "<table id='products'><tr><th>Row #</th><th>Product ID</th><th>Product Name</th><th>Product Price</th></tr>";
                    $i = 1;     // to print the # of each row
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$i</td><td>" . $row['productID'] . "</td><td>" . $row['description'] . "</td><td>" . $row['price'] . "</td></tr>";
                        $i++;
                    }
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }


                    // TO DO - write code to select and display records in HTML table
                ?>
        </div>
    </body>
</html>
