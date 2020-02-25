<?php
session_start();
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
?>
