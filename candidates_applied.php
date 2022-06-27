
<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width" initial-scale = "1.0 ">
    <title> Dashboard </title>
    <link rel="icon" href = "logo.png" type="image/x-ico">  
    <style>
@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap');
</style>   
    <style>
      <?php include 'dashboard_1.css'?>
      </style>

</head>
<body>
<div class = "T">
    <div class="container">
      <div class="row">
        <div class="col">
        <a href="http://localhost/User.php/">Dashboard</a>
          <ul class="nav">
          <a href="http://localhost/dashboard_1.php/"><li class="J"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg> Jobs</li></a>
          <a href="http://localhost/candidates_applied.php"><li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg> Candidates Applied</li></a>
            <a href="#"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
    </svg> Contact</li></a>
            <a href="#"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
    </svg> About</li></a>


          </ul><br>
        </div>
      </div>
    </div>

    <div class="PJ">
        <table class = "table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Candidate Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Qualifications</th>
                    <th scope="col">Year Passout</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $host = 'localhost';
                    $user = 'root' ;
                    $password = '' ;
                    $db = 'Login';
                
                    $conn = mysqli_connect($host,$user,$password,$db);
                    $sql="SELECT  `Full name`, `Applied for`, `Qualifications`, `Year of passout`, `EmailId` FROM `Candidates`";
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                    if($result -> num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        echo "
                        <tbody style ='text-align:center'>
            <tr style = border : 2px solid black>
                        <tr>
                        <th scope = 'row' >" .++$i." </th>
                        <td>" .$row['Full name']. "</td>
                        <td>" .$row['Applied for']. "</td>
                        <td>" .$row['Qualifications']. "</td>
                        <td>" .$row['Year of passout']. "</td>
                        <td>" .$row['EmailId']. "</td>


                        </tr>";}}
                    else{
                        echo "" ;
                    }    
         
          
                ?>
            </tbody>
        </table>
    </div>
</div>    
</body>
</html>