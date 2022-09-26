<?php
    session_start();
?>
<?php
?>
<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Log in</title>
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
                <li class="active"> <a href="#">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="form">
            <div class="find">
                <form action="login.php" name="create" method="post" onsubmit="return validateCreate()">
                    <section class="create">
                        <h1>You must log in first</h1>
                        <label>Username: </label>
                        <input type="text" name="username" id="username" size="50" >
                            <br><hr>
                        <label>Password: </label>
                        <input type="password" name="password" id="password" size="50" ><br>
                        <section class="submission">
                                <input type="submit" value="Log in"> <br><br>
                        
                            
                         <?php
                          
                            if(!empty($_POST)){
                                
                                $username=$_POST["username"];
                                $pass=$_POST["password"];
                                $file=fopen("login.txt", "r");
                                $_SESSION["status"]=false;
                                while(!feof($file))
                                {
                                    $line=fgets($file);
                                    $result=explode(":", $line);
                                    if($result[0]==$username && trim($result[1])==trim($pass))
                                    {
                                        $_SESSION["status"]=true;
                                        $_SESSION["username"]=$username;
                                        header("Location: give.php");
                                        exit();
                                       
                                    }
                                   
                                }
                                    $_SESSION["message"]="Login failed! Try again.";
                                    
                                
                                
                                if(isset($_SESSION["message"]))
                                {
                                    echo "<i><b>".$_SESSION["message"]."</b></i>";
                                    unset($_SESSION["message"]);
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