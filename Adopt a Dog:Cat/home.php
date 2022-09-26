<!DOCTYPE html> 
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thuraia Paws</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <nav>
            <ul class="menu">
                <li class="active"> <a href="#">Home</a> </li>
                <li > <a href="find.php">Find a dog/cat</a></li>
                <li > <a href="dogcare.php">Dog care</a></li>
                <li > <a href="catcare.php">Cat care</a></li>
                <li > <a href= "create.php">Create an account</a></li>
                <li > <a href="give.php">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="content-care">
            <div class="welcome">
                <h2 > Welcome to Thuraia Paws' adoption agency </h2>
                <h3 > Search for <em>YOUR</em> dream pet</h3>
                <h3> Learn how to take care of your new cat or dog </h3>
                <h3> We can help you give away your pet</h3>
                
            </div>
         <div id="homepics">
            <img src="cat1.jpeg" alt="cat1" id="cat1">
            <img src="dog1.jpeg" alt="dog1" id="dog1">
         </div>
        </div>
            <!-- Source:    
                            -https://www.scientificamerican.com/article/why-do-cats-purr/--
                            -https://www.goodhousekeeping.com/life/pets/advice/g1921/large-dog-breeds/-->
            
            <?php
                include "footer.php";
            ?>
       <script src="script.js?v=1"></script>

    </body>
</html>