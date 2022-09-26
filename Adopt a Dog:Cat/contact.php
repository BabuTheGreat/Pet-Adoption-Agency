<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    </head>
    
    <body>
        <?php
            include "header.php";
        ?>
        <nav>
            <ul class="menu">
                <li > <a href="home.php">Home</a> </li>
                <li > <a href="find.php">Find a dog/cat</a></li>
                <li > <a href="dogcare.php">Dog care</a></li>
                <li > <a href="catcare.php">Cat care</a></li>
                <li > <a href= "create.php">Create an account</a></li>
                <li > <a href="give.php">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li class="active"> <a href="#">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <div class="browse">
                <h2> Contact Us </h2>
                <br/>
                <h4> Belal Abu-Thuraia 40209178</h4>
                <br/>
                <h5>Email Us: noname@gmail.com</h5>
                <br/>
                <h5>Call Us: (514) 999-9999</h5>
            </div>
        </div>
        <?php
            include "footer.php";
        ?>
        <script src="script.js?v=1"></script>
    </body>
</html>