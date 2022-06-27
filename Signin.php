<?php include 'loginform.php'?>
<?php include 'signupform.php'?>
<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width" initial-scale = "1.0 ">
    <title> Login </title>
    <link rel="icon" href = "logo.png" type="image/x-ico">    
        
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap');
    <?php include 'signin.css'?>
    </style>
</head>
<body>
     
    <div class="container">
        <div class = "b">
            <div class="block signin"> 
                <h1>Login</h1> 
                <h5 class= "u1">New User ?</h5>
                <button class = "signupbutton"type="button">Sign up</button>
            </div>
            <div class="block signup"> 
                
                <h1>Sign up</h1> 
                <h5 class="u2">Already have an account ?</h5>
                <button class = "loginbutton" type="button">Login</button>
            
            </div>  
        
    </div>
    </div>

    <div class="form">
        <div class="formbx loginform">
            <form action="" method="post">
                Username
                <input type="text" name = "Username" placeholder="Username"> 
                Password
                <input type="password" name = "Password" placeholder="Password"> 
                <input class = "s" name="submit_login" type="submit" placeholder="Login"> 
                <h6><a href="#" >Forget Password ?</a></h6>
            </form>
        </div>
        <div class="formbx signupform">
            <form action="" method="post">
                First Name
                <input type="text" name = "First_Name" placeholder="First Name" required> 
                Last Name
                <input type="text" name = "Last_Name" placeholder="Last Name" required> 
                Username
                <input type="text" name = "Username" placeholder="Username" required>
                Password
                <input type="password" name = "Password" placeholder="Password" required> 
                
                Email
                <input type="email" name = "Email" placeholder="Email" required>
                <a href="#"> <input class = "" name ="submit_signup" type="submit" placeholder="Submit"></a>
            </form>
        </div>
    </div>

    

    <script>
        const signupbutton = document.querySelector('.signupbutton');
        const loginbutton = document.querySelector('.loginbutton');
        const form= document.querySelector('.form');

        signupbutton.onclick = function (){
            form.classList.add('active')
        }

        loginbutton.onclick = function (){
            form.classList.remove('active')
        }
    </script>    
</body>
</html>
