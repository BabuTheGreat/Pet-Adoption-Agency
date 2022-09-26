<!DOCTYPE html>
<!--Belal Abu-Thuraia 40209178-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create an account</title>
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
                <li class="active"> <a href= "#">Create an account</a></li>
                <li > <a href="give.php">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="form">
            <div class="find">
                
                <form action="" method="post" name="create" onsubmit="return validateCreate()">
                
                    <section class="create">
                        <h1 >Create an Account</h1>
                        <label>Username: </label>
                        <input type="text" name="username" id="username" size="50" >
                        <br><hr>
                        <label>Password: </label>
                        <input type="password" name="password" id="password" size="50" ><br>
                        <section class="submission">
                            <input type="submit" value="Create"> <br><br>
                    <?php 
                    if(!empty($_POST))
                    {
                        $file = fopen("login.txt", "r");
                        $copy=false;
                        while(!feof($file))
                        {
                            $line =fgets($file);
                            $result = explode(":", $line);
                            if($result[0]===$_POST["username"])
                            {
                                echo "<b>Sorry, the username already exist. Please try another username.</b>";
                                $copy=true;
                                break;
                            }
                        }
                        if(!$copy)
                        {
                            $user= "\n".$_POST["username"]. ":".$_POST["password"];
                            $file=fopen("login.txt", "a+");
                            fwrite($file, $user);
                            echo "<i>Your account was successfully created! You are ready to now login!</i>";
                        }
                    }
                    ?>
                    </section>
                        <ul>
                            <li>Username can only contain uppercase and lowercase letters and digits</li>
                            <li> Password must be at least 4 characters long</li>
                            <li>Password characters are to be only letters and digits only</li>
                            <li>Password must have at least one letter and one digit </li>
                        </ul>
                    </section>

                </form>
              
                
            </div>
        </div>
        <?php
                include "footer.php";
        ?>
        <script src="script.js?v=1"></script>
    </body>
</html>