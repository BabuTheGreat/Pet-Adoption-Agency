<?php
session_start();
?>
<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
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
                <li class="active"> <a href = "#">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="form">
            <div class="privacy">
                <?php
                    if(!$_SESSION["status"])
                    {
                        echo "<h2>You are not signed in</h2>";
                    }
                    else
                    {
                        session_start();
                        session_unset();
                        echo "<h2>You have logged out</h2>";
                    }
                    
                ?>
                
            </div>
        </div>
           <?php
            include "footer.php";
           ?>
           <script src="script.js?v=1"></script>
    </body>
</html>