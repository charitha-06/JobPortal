
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
    if(isset($_POST['submit_signup']))
        {
            $Fname=$_POST['First_Name'];
            $Lname=$_POST['Last_Name'];
            $uname=$_POST['Username'];
            $password=$_POST['Password'];
           
            $Email=$_POST['Email'];
            $sql = " INSERT INTO `Signupform`(`First name`, `Last Name`, `Username`, `Password`, `Email`) VALUES ('$Fname','$Lname','$uname','$password','$Email') ";
            $sql_1 = "INSERT INTO `LoginForm`( `Username`, `Password`) VALUES ('$uname','$password')";

            if(mysqli_query($conn,$sql))
            {
                echo "" ;
               
            }
            else 
            {
                echo "" . mysqli_error($conn);
                
            }


            if(mysqli_query($conn,$sql_1))
            {
                echo "" ;
            }
            else 
            {
                echo "" . mysqli_error($conn);
    
            }



        }


?>