<?php 
if (!isset($_SESSION)) 
{ 
    session_start(); 
}
if(!empty($_POST)){
    $file =fopen("available.txt", "r");
    $count=1;
    while(!feof($file))
        {
            $line = fgets($file);
            $count++;
        }

    $file=fopen("available.txt", "a+");
    $info="\n". $count . ":".$_SESSION["username"].":".$_POST["type"].":".$_POST["breed"].":".$_POST["age"].":".$_POST["gender"].":";
    $temp="";
    $size=count($_POST["friendly"]);
    for ($i=0; $i<$size;$i++)
        {
            if($i==($size-1))
            {
                $temp.=$_POST["friendly"][$i];
            }
            else
            {
              $temp.=$_POST["friendly"][$i]." ";
            }
        }
    $info.= $temp.":"."More info"."('".$_POST["tell"]."')".":". $_POST["name"].":".$_POST["email"];
    fwrite($file, $info);
    header("Location: thankyou.php");
}
?>