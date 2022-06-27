<?php
    $host = 'localhost';
    $user = 'root' ;
    $password = '' ;
    $db = 'Login';

    $conn = mysqli_connect($host,$user,$password,$db);


    if ($conn->connect_error){
        die("Connection Failed:" .$conn->connect_error);
    }
    echo"";
    if(isset($_POST['submit_login']))
    {
        $uname=$_POST['Username'];
        $password=$_POST['Password'];
    
        $sql = "SELECT * from LoginForm where Username='".$uname."'AND Password='".$password."' limit 1";
        $result=mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($result)==1){
          header ("location:User.php");

        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
         
     
    
    }

?>