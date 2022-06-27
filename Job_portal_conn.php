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
    if(isset($_POST['fsubmit']))
    {
        $cname = $_POST['cm'];
        $cpos = $_POST['pos'];
        $cjd = $_POST['jd'];
        $cskill = $_POST['skill'];
        $ctc = $_POST['ctc'];
        $sql = "INSERT INTO `Candidates`(`Full name`, `Applied for`, `Qualifications`, `Year of passout`, `EmailId`) VALUES ('$cname','$cpos','$cjd','$cskill','$ctc')";
        if(mysqli_query($conn,$sql))
        {
            echo "" ;
            
        }
        else 
        {
            echo "" . mysqli_error($conn);
            exit();
        }
    }
    ?>
   
        