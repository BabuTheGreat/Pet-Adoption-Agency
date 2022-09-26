<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Privacy Disclaimer Statement</title>
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
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="form">
            <div class="privacy">
                <h2> Privacy/Disclaimer Statement</h2>

                <h4>Your privacy matters to us: your information will not be sold or misused.</h4>
                <h4 id="myname"> © 2022 Belal Abu-Thuraia</h4>
                
            </div>
        </div>
           <?php
            include "footer.php";
           ?>
           <script src="script.js?v=1"></script>
    </body>
</html>