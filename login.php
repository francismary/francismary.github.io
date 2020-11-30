<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
    <div id="main-wrapper">
       <center> 
            <h2> Login Form</h2>  
            <img src="image/Capture.PNG" alt="" class="avatar">    
       </center> 
       <form action="user.php" method="POST" class="myform">
        <label for=""><b>Username:</b> </label> <br>
        <input name= "username"type="text" class="inputvalues" placeholder="type your username"> <br>
        <label for=""><b> Password:</b></label> <br>
        <input name="password"type="password" class="inputvalues" placeholder="type your password"><br> <br>
        <center>
            <input name="login"type="submit" id="login_btn" value="Login"/> <br>
            <a href="register.php" target="blank"><input type="button" id="register_btn" value="Register"/></a>

        </center>
        
       </form>
       <?php
            if(isset($_POST['login']))
            {
                $username =$_POST['username']; //we create new variables to be refrenced
                $password = $_POST['password'];

                $query ="select * from user WHERE username='$username'AND password='$password'";

                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                    //valid
                   $username = $_SESSION['username'];
                    header('location:user.php');
                }
                else    
                {
                    //invalid
                    echo '<script type ="text/javascript"> alert("incorrect username or password")</script>'; 
                }
            }
       ?>
    </div>
    
        
</body>
</html>