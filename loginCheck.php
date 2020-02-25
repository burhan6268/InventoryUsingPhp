<?php
if (isset($_POST['user']) and isset($_POST['pwd'])){
    $username=$_REQUEST['user'];
    $password=$_REQUEST['pwd'];
                
                            if($username=="burhan")
                            {
                                if($password=="admin")
                                {
                                    echo"Login Success.";
                                    header("Location:Login.php");
                                    
                                }
                            }
                            else
                            {
                                echo"Login Failed.";
                                header("Location:index.php");
                            }
}

?>