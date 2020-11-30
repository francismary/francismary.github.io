<?php
  session_start();  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
    <div id="main-wrapper">
       <center> 
            <h2> Home page</h2>  
            <h3> welcome
                <?php echo $_SESSION["username"]?> 
            </h3>
            <img src="image/Capture.PNG" alt="" class="avatar">    
       </center> 
       <form action="user.php" method="POST" class="myform"> 
            <input name="logout" type="submit" id="logout_btn" value="Log out"> <br>          
       </form>
       <?php
            if(isset($_POST['logout']))
            { 
                session_destroy();
                header('location:login.php');
            }   
                  
       ?>
    </div>
    
        
</body>
</html>