<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
    <div id="main-wrapper">
       <center> 
            <h2> Registration Form </h2>  
            <img src="image/Capture.PNG" alt="" class="avatar">    
       </center> 
       <form action="register.php" method="post" class="myform">
       <label for=""><b>Fullname:</b> </label> <br>
            <input name="fullname" type="text" class="inputvalues" placeholder="type your fullname" required> <br>
            <label for=""><b>Email:</b> </label> <br>
            <input name="email" type="email" class="inputvalues" placeholder="type your email" required> <br>
            <label for=""><b>Gender:</b> </label>
            <input name="gender" type="radio" class="radiobtns" value="male" checked required> Male
            <input name="gender" type="radio" class="radiobtns" value="female" required> Female <br>

            <label for=""><b>Qualification:</b> </label> <br>
            <select name="qualification" class="qualification">
                <option value="ND" selected>ND</option>
                <option value="HND">HND</option>
                <option value="Bsc">Bsc</option>
                <option value="Msc">Msc</option>
                <option value="PhD">PhD</option>
            </select> <br>
            <label for=""><b>username:</b> </label> <br>
            <input name="username" type="text" class="inputvalues" placeholder="type your username" required> <br>
            <label for=""><b> Password:</b></label> <br>
            <input name="password" type="password" class="inputvalues" placeholder="type your password" required><br>
            <label for=""><b>Comfirm Password:</b> </label> <br>
            <input name="cpassword" type="password" class="inputvalues" placeholder="comfirm password" required> <br>
            <center>
                <input name="submit_btn" type="submit" id="signup_btn" value="sign up"/> <br>            
            </center>
            <a href="login.php" target="blank"><input type="button" id="back_btn" value="Back to login"/></a>

        
       </form>
       <?php
            if(isset($_POST['submit_btn'])) /*used to check if the button is clicked or not*/
            {
                //echo'<script type ="text/javascript"> alert("sign up button clicked")</script>';
               
               
               
                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                
                if($password==$cpassword)
                {//we query the database from here
                    $query="select * from user WHERE username='$username'";
                    $query_run = mysqli_query($con,$query);
                    
                    if(mysqli_num_rows($query_run)>0)
                    {
                        //there is already a user with user name
                        echo '<script type ="text/javascript"> alert("user already exist ..try another username")</script>';
                    }
                    else
                    {
                        $query="insert into user values('$username','$password')";
                        $query_run=mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script type ="text/javascript"> alert("User Registered.. go to login page")</script>';
                        }
                        else
                        {
                            echo '<script type ="text/javascript"> alert("Error")</script>'; 
                        }

                    }
                }
                else{
                    echo '<script type ="text/javascript"> alert("password and comfirm password does not match")</script>'; 
                }
            
            }

       ?>
    </div>
    
        
</body>
</html>