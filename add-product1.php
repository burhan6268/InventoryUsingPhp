<?php
/* 
 * Burhanuddin Lokhandwala
 * Student Id - 991523243
 * SYST-10199 - Web Programming
 */
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
$productID=$_REQUEST['productID'];
$productName=$_REQUEST['description'];
$productPrice=$_REQUEST['price'];

$query="Insert into vora_products(productID,description,price) values ($productID,'$productName',$productPrice)";

//Execute Query
$result=mysqli_query($conn,$query);

if($result>0)
{
    header("Location:add-product.php?result=success");
}
else
{
    header("Location:add-product.php?result=fail");
}

?>