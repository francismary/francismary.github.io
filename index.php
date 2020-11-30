<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>center for infomation and telecommunication Engineering</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="navbar">
        <a class="active" href="#Home">Home</a>
        <a href="#About">About</a>
        <a href="#Mission">Mission</a>
        <a href="#Vision">Vision</a>
        <a href="#Conact">Contact</a>
        <a href="#Product">Products</a>
        <a href="#Facilities">Facilities</a>
        <div class="dropdown">
            <button class="dropbtn">Departments
                
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#Finance">Finance Department</a>
                <a href="#Marketing">Marketing Department</a>
                <a href="#HR">Human Resource Department</a>
                <a href="#Admin" target="blank">Administrative Department</a>

            </div>
        </div>
        <a href="register.php" target="blank">Register</a>
        <a href="login.php" target="blank">Login</a>
        <a href="user.php" target="blank">User</a>
        <div class="search-container">
            <form action="search.php" method="POST">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit">search</button>
            </form>
        </div>
    </div>
    <div class="image" id="main">
       <center>
        <h1 class="pad">welcome to center for information and telecommunication Engineering <br>
             University of Port Harcourt</h1>
            
       </center>
       <h3 class="h3">We offer the following short term courses</h3>
       <ul class="h3">
        <li>Web Development</li>
        <li>Graphics Design</li>
        <li>Python Programming</li>
        <li>Database Management</li>
        <li>Routing &  Switching</li>
        <li>Consultancy</li>
        </ul>
    </div>
    <h2 id="h2">Exploring Academic Heights</h2>
    <div id="grid">
        <Aside>
            <p class="p"> <strong>Some Tips Towards Academic Excellence</strong> </p>
            <ul>
                <li>Diligence</li>
                <li>Consistency</li>
                <li>Focus</li>
                <li>Discpline</li>
                <li>Team Work</li>
                <li>Regularity</li>
                <li>Punctuality</li>
                <li>Alarcrity</li>
                <li>Regularity</li>
                <li>Punctuality</li>
                <li>Alarcrity</li>
            </ul>
        </Aside>
        <Aside>
            <p class="p"> <strong>Some Tips Towards Academic Excellence</strong> </p>
    
            <ul>
                <li>Diligence</li>
                <li>Consistency</li>
                <li>Focus</li>
                <li>Discpline</li>
                <li>Team Work</li>
                <li>Regularity</li>
                <li>Punctuality</li>
                <li>Alarcrity</li>
                <li>Regularity</li>
                <li>Punctuality</li>
                <li>Alarcrity</li>
            </ul>
        </Aside>
        <center>
            <p class="p"><strong>Reaching Academic Achelon</strong></p>
            <img id="img" src="pictures/th3TGZ7WNH.jpg" alt="">
            <p style="text-align:center;">Explore the Heights and breadths
                 of knowledge and watch the transforming
                 effect within you.</p>
        </center>    
       
    </div>
       
   
    <h2 class="h2" id="Facilities"> explore our facilities</h2>
    <div class="grid2">
        <center>
            <div><img class="img" src="pictures/francis.jpg" alt=""> <br> <br>
                <a href=""><button>Learn more</button></a>
                <p style="text-align: center;">this is an image Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt non veniam saepe earum accusamus? Debitis est eos minima, sed,
                 reiciendis libero omnis unde corporis quo, cupiditate labore dolorem molestiae commodi.</p>
            </div>
        </center>
        <center>
            <div><img class="img" src="pictures/francis.jpg" alt=""> <br> <br>
                <a href=""><button>Learn more</button></a>
                <p style="text-align: center;">this is an image Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quisquam, veniam totam similique quasi,
                hic vitae deserunt enim molestias, voluptate libero maiores! Optio tempora suscipit libero ad iure quasi? Nulla.</p> 
            </div>
        </center>
        <center>
            <div><img class="img"  src="pictures/francis.jpg" alt=""> <br> <br>
                <a href=""><button>Learn more</button></a>
                <p style="text-align: center;">this is an image Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quidem nostrum nulla voluptate doloribus ad,
                fugiat dolorum, sapiente facere velit unde dolor id ipsum cupiditate amet accusantium architecto. Expedita, impedit.</p> 
                
            </div>
        </center>
    </div>
    <hr style="line-height-step: 3px ;">
    <div class="last_div">
        <p style="margin-left: 20px; margin-right: 20px;">
            your satisfaction is our priority <br>
            Trial will convince you. <br>
            <b>CITE....</b> <br>
            <i>bridging the gap</i>
        </p>
       
    </div>
    <footer class="footer">
        Center for information and telecom engineering <br>
        Copyright 2020
        <p style="text-align:right; padding-right: 5px; ">Powered by Franclick-Tech services</p>
    </footer>
    
</body>
</html>