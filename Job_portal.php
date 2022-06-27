<?php include ('Job_portal_conn.php')?>

<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width" initial-scale = "1.0 ">
    <title> JOB PORTAL </title>
    <link rel="icon" href ="logo.png" type="image/x-ico">    
    <style>
      <?php include ('Job_portal.css')?>
@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap');

    </style>

</head>

    <body>
        
    <div class="content">
        <div class = "jp">
            <p>Best Jobs available matching your skills...</p>
            <img src="logo.png">
        </div>
        <div class="form">
            <form action="" method="post">
            Full Name
            <input type="text" placeholder="Enter your full name " name="cm" required > <br><br>
            Position applying 
            <input type="text" placeholder="Enter position applying for " name="pos" required><br><br>
            Qualifications
            <input class = "jd" type="text" placeholder="Enter your qualifications" name="jd" required><br><br>
            Year of Passout
            <input type="text" placeholder="Enter Passout year" name="skill" required><br><br>
            Email Id
            <input type="email" placeholder="Enter email id" name="ctc" required><br><br>
            <button name="fsubmit" class="fsubmit" type="submit">Submit</button>
        <button name="close" class="close">Close</button><br>

            </form>
        </div>
        
        <div class="show">
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
            $sql = "SELECT `Company_name`, `Position`, `Job_d`, `Skills`, `CTC`FROM `Posted_jobs`";
            $result = mysqli_query($conn,$sql);
             
            if($result-> num_rows > 0){
                while($rows=$result->fetch_assoc()){
                 
                echo '
                    <div class="box">
                        <div class = "jobs">
                            <h3 style ="text-align:center;">' .$rows['Position'].'</h3>
                            <h4 style = "text-align:center;">' .$rows['Company_name'].' </h4>
                            <p style = "color: black; text-align:justify;">' .$rows['Job_d'].' </p>
                            <p style ="color: black;"><b>Skills Required:</b>' .$rows['Skills'].' </p>
                            <p style = "color :black;"><b>CTC:</b>' .$rows['CTC']. '</p>
                            <button class="submit" type="button" >
                            Apply Now 
                            </button>
                        </div>
                    <div>';
                    }
                    }
                

            ?>
        </div>
        </div>      
        <script>

btns = document.getElementsByClassName("submit");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
		
            {
            form.classList.add('active')
        }
        });
    }


 
    const form = document.querySelector('.form');
    const submit = document.querySelector('.fsubmit');
    const close = document.querySelector('.close');    


   
        
    submit.onclick = function (){
            form.classList.remove('active')
        }    
        close.onclick = function (){
            form.classList.remove('active')
        }

  </script>
                 
       
    

  
        
    </body>
</html>    

