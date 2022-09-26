<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Browse Available Pets</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    </head>
    
    <body>
        <?php
            include "header.php";
        ?>
        <nav>
            <ul class="menu">
                <li > <a href="home.php">Home</a> </li>
                <li class="active"> <a href="find.php">Find a dog/cat</a></li>
                <li > <a href="dogcare.php">Dog care</a></li>
                <li > <a href="catcare.php">Cat care</a></li>
                <li > <a href= "create.php">Create an account</a></li>
                <li > <a href="give.php">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="content-browse">
            <div class="browse">
                
                <?php 
                echo "<h3>The pet(s) which matched your criteria</h3>";
                $file = fopen("available.txt", "r");
                $test=false;
                while(!feof($file))
                {
                    $line = fgets($file);
                    $result = explode(":", $line);
                    $info=array_slice($result,2,5);
                    $friend= explode(" ", $info[4]);
                    $find=["type"=>$_POST["type"], "breed"=>$_POST["breed"], "age"=>$_POST["age"], "gender"=>$_POST["gender"], "friendly"=>$_POST["friendly"]];
                    $pet=["type"=>$info[0], "breed"=>$info[1], "age"=>$info[2], "gender"=>$info[3], "friendly"=>$friend];
                    if($find["age"]=="doesn't matter")
                    {
            
                        unset($find["age"]);
                        unset($pet["age"]);
                    }
                    if ($find["breed"]=="doesn't matter")
                    {
                        unset($find["breed"]);
                        unset($pet["breed"]);
                    }
                    if($find["friendly"][0]=="doesn't matter"||$find["friendly"][1]=="doesn't matter"||$find["friendly"][2]=="doesn't matter"||$find["friendly"][3]=="doesn't matter")
                    {
                        unset($find["friendly"]);
                        unset($pet["friendly"]);
                    }
                    if($find["gender"]=="doesn't matter")
                    {
                        unset($find["gender"]);
                        unset($pet["gender"]);
                    }
                   
                    
                    
                    
                    
                    if($find==$pet)
                    {
                        echo implode(" : ", $result) . "<br>";
                        $test=true;
                    }
                   
                }
                if(!$test)
                {
                    echo "<h4><br>There are no pet which matched your criteria. Here are the available pets!</h4>";
                    $file = fopen("available.txt", "r");
                    while(!feof($file))
                    {
                        $line = fgets($file);
                        $result = explode(":", $line);
                        echo implode(" : ", $result)."<br>";
                    }
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