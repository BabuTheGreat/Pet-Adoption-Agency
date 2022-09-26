<!DOCTYPE html>
<!---By Belal Abu-Thuraia 40209178--> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Find a dog/cat</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    </head>
    
        <body>
            <?php
                include "header.php";
            ?>
        <nav>
            <ul class="menu">
                <li > <a href="home.php">Home</a> </li>
                <li class="active"> <a href="#">Find a dog/cat</a></li>
                <li > <a href="dogcare.php">Dog care</a></li>
                <li > <a href="catcare.php">Cat care</a></li>
                <li > <a href= "create.php">Create an account</a></li>
                <li > <a href="give.php">Have a pet to give away</a> </li>
                <li > <a href = "logout.php">Log out</a></li>
                <li > <a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
            
          
        <div class="form">
            <div class="find">
                <form action="browse.php" name="find" method="POST" onsubmit="return validateFind()">
				    <h1>Find a Pet!</h1>
                    <p id="test"></p>
                    <section class="catordog">
                        <label>Which pet would you like?</label>
                        <br>
                        <input type="radio" name="type" id="dog" value="dog">
                        <label> Dog</label>
                        <input type="radio" name="type" id="cat" value="cat">
                        <label> Cat</label>
                    </section>
        <hr>
                    <section class="breed">
                        
                        <label>Breed of pet</label>
                         <br>
                       <label> Dog: </label>
                        <select name = "breed" id="dogbreed">
                                <option selected disabled value="0"></option>
                                <option value="Mixed"> Mixed Breed </option>
                                <option value="Beagle"> Beagle </option>
                                <option value="Bulldog"> Bulldog </option>
                                <option value="Corgi"> Corgi </option>
                                <option value="Chihuahua"> Chihuahua </option>
                                <option value="Dalmation"> Dalmation </option>
                                <option value="Golden"> Golden Retriever </option>
                                <option value="Labrador"> Labrador </option>
                                <option value="Maltese"> Maltese Dog </option>
                                <option value="Pomeranian"> Pomeranian </option>
                                <option value="Poodle"> Poodle </option>
                                <option value="Pug"> Pug </option>
                                <option value="Terrier"> Terrier </option>
                                <option value="Shepherd"> Shepherd </option>
                                <option value="doesn't matter">Doesn't matter</option>
                                
                        </select>
        <tab></tab>
                        <label>      Cat:</label>
                        <select  name="breed" id="catbreed">
                                <option selected disabled value="0"></option>
                                <option value="Mixed"> Mixed Breed </option>
                                <option value="Abyssinian"> Abyssinian </option>
                                <option value="Bengal"> Bengal </option>
                                <option value="Longhair"> Longhair </option>
                                <option value="Main Coone"> Main Coone </option>
                                <option value="Munchkin"> Munchkin </option>
                                <option value="Persian"> Persian </option>
                                <option value="Ragdoll"> Ragdoll </option>
                                <option value="Scottish Fold"> Scottish Fold </option>
                                <option value="Shorthair"> Shorthair </option>
                                <option value="Siamese"> Siamese </option>
                                <option value="Sphynx"> Sphynx </option>
                                <option value="doesn't matter">Doesn't matter</option>
                                
                        </select>
                        
                    </section>
        <hr>
                    <section id="age">
                        <label>Preferred age</label>
                         <br>
                        <select name="age" id="age-drop">
                            <option value="0"></option>
                            <option value="Less than 6 months old">Less than 6 months old</option>
                            <option value="6-12 months old">6-12 months old</option>
                            <option value="1-2 years old">1-2 years old</option>
                            <option value="2-4 years old">2-4 years old</option>
                            <option value="5-8 years old"> 5-8 years old</option>
                            <option value="8+ years old"> 8+ years old</option>
                            <option value="doesn't matter">Doesn't matter</option>
                        </select>
                        
                    </section>
        <hr>
                    <section class="gender">
                        <label>Preferred gender</label>
                        <br>
                        <input type="radio" name="gender" id="male" value="male">
                        <label >Male</label>
                        <input type="radio" name="gender" id="female" value="female">
                        <label>Female</label>
                        <input type="radio" name="gender" id="nomatter" value="doesn't matter">
                        <label>Doesn't Matter</label>
                    </section>
        <hr>
                    <section class="friendly">
                        <span>Does it need to get along with (Select all which apply) </span>
                        <br>
                        <input type="checkbox" name="friendly[]" id="dogs" value="dogs">
                        <label>Dogs</label>
                        <input type="checkbox" name="friendly[]" id="cats" value="cats">
                        <label>Cats</label>
                        <input type="checkbox" name="friendly[]" id="kids" value="kids">
                        <label> Kids </label>
                        <input type="checkbox" name="friendly[]" id="nomatter" value="doesn't matter">
                        <label>Doesn't Matter</label>
                    </section>
        <hr>

                    <section class="submission">
                        <input type="submit" value="Submit">
                        <input type="reset"  value="Clear">   
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