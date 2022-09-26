function date(){
const d= new Date();
var hour= d.getHours();
var date=d.getDate();
var year= d.getFullYear();
var month= d.getMonth();
var min= d.getMinutes();
var sec= d.getSeconds();

//creating variables to get number of digits of time to change format of clock conditionally
var hlength= hour.toString().length; 
var mlength= min.toString().length; 
var slength= sec.toString().length; 

if(hlength==1 && mlength==1 && slength==1)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + "0" +hour +":"+ "0" +min+":"+ "0" +sec;
    }
else if(hlength==1&&mlength==1&& slength==2)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + "0" +hour +":"+ "0" +min+":"+ sec;
    }
else if(hlength==1&&mlength==2&& slength==1)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + "0" +hour +":"+ min+":"+ "0" +sec;
    }
else if(hlength==1&&mlength==2&& slength==2)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + "0" +hour +":"+ min+":"+ sec;
    }
else if(hlength==2&&mlength==2&& slength==1)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + hour +":"+ min+":"+ "0" +sec;
    }
else if(hlength==2&&mlength==1&& slength==1)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + hour +":"+"0" +min+":"+ "0" +sec;
    }
else if(hlength==2&&mlength==1&& slength==2)
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + hour +":"+"0" +min+":"+sec;
    }
else
    {
        document.getElementById("date").innerHTML= month +"/"+ date+ "/" + year +"      " + hour +":"+min+":"+sec;
    }
    setTimeout("date()", 1000);
}

//Validation function for find a pet form
function validateFind(){
    
        //Valid type of pet
        var type=document.getElementsByName("type");
        if (!(type[0].checked) && !(type[1].checked))
            {
                alert("Please select the type of pet.");
                return false;
            }

        //Valid breed of pet
        var dogbreed = document.getElementById("dogbreed");
        var catbreed = document.getElementById("catbreed");    
        if(dogbreed.value=="0" && catbreed.value=="0")
            {
                alert("Please select the breed of pet you want.");
                return false; 
            }

        //In case user selects cat breed while previously choosing dog as type of pet..or vice versa
        if((type[0].checked && catbreed.value!=="0") ||(type[1].checked && dogbreed.value!=="0"))
            {
                alert("Your selections for type of pet and breed do not match! Please try again.");
       
                if(catbreed.value!="0")
                    {
                        document.getElementById("catbreed").selectedIndex="0";
                    }
                if(dogbreed.value!="zero")
                    {
                        document.getElementById("dogbreed").selectedIndex="0";
                    }
                return false; 
            }
               

        // Valid age of pet
        var age = document.getElementById("age-drop");
        if(age.value=="0")
            {
                alert("Please select a preferred age.")
                return false; 
            }

        //Valid gender choice
        var gender = document.getElementsByName("gender");
        if(!(gender[0].checked) && !(gender[1].checked) && !(gender[2].checked))
            {
                alert("Please select a gender choice.");
                return false; 
            }

        //Valid friendly choice
        var friendly = document.getElementsByName("friendly[]");
        if(!(friendly[0].checked||friendly[1].checked||friendly[2].checked||friendly[3].checked))
            {
                alert("Please select a choice for friendliness.");
                return false; 
            }         

}

//Validation form for give a pet form
function validateGive(){
    
    //Validate type of pet
    var type=document.getElementsByName("type");
    if (!(type[0].checked) && !(type[1].checked))
        {
            alert("Please select the type of pet you want to give.");
            return false;
        }
    
    //Validate breed of pet
        
    var dogbreed = document.getElementById("dogbreed");
    var catbreed = document.getElementById("catbreed");    
    if(dogbreed.value=="0" && catbreed.value=="0")
        {
            alert("Please select the breed of pet you are giving.");
            return false; 
        }
    //In case user selects cat breed while previously choosing dog as type of pet..or vice versa
    if((type[0].checked && catbreed.value!="0") ||(type[1].checked && dogbreed.value!="0"))
        {
            alert("Your selections for type of pet and breed do not match! Please try again.");
            if(catbreed.value!="0")
                {
                    document.getElementById("catbreed").selectedIndex="0";
                }
            if(dogbreed.value!="0")
                {
                    document.getElementById("dogbreed").selectedIndex="0";
                }
            return false; 
        }
    // Valid age of pet
    var age = document.getElementById("age-drop");
    if(age.value=="0")
        {
            alert("Please select age of pet.")    
            return false; 
        }
    
    //Valid gender choice
    var gender = document.getElementsByName("gender");
    if(!(gender[0].checked) && !(gender[1].checked))
        {
            alert("Please select the gender of the pet.");
            return false; 
        }
    //Valid friendly choice
    var friendly = document.getElementsByName("friendly[]");
    if(!(friendly[0].checked||friendly[1].checked||friendly[2].checked))
        {
            alert("Please select a choice for friendliness.");
            return false; 
        } 
    //Valid "tell us" text
    var tell = document.forms["give"]["tell"].value;
    if(tell=="")
        {
            alert("Please briefly tell us about your pet.");
            return false; 
        }
    //Valid name
    var name = document.forms["give"]["name"].value;
    if( name==""|| name==null )
        {
            alert("Please enter your full name.");
            return false;
        }
    //Valid email
    var email = document.forms["give"]["email"].value;
    if(email==""|| email==null)
        {
            alert("Please enter your email.")
            return false;
        }
    var pattern=/[A-z 0-9 ! #  $ % & ' * + - / = ? ^ _ `]+@[A-z 0-9 - .]+\.[A-z 0-9 -]{2,3}$/g;
    if(pattern.test(email))
        {
            var index= email.indexOf("@");
            var recipient = email.substring(0,index-1);
            if(recipient.length>64)
                {
                    alert("Recipient name exceeds limit of 64 characters. Please try again.");
                    return false;
                }
            var domain = email.substr(index+1);
            if(domain.length>253)
                {
                    alert("Domain name exceeds limit of 253 characters. Please try again.");
                    return false; 
                }
        }
    else
        {
            alert("Email is invalid. Try again");
            return false;
        }
    
    
}
function validateCreate(){
    var user = document.forms["create"]["username"].value;
    var pattern_user = /^[A-z 0-9]+$/;
    if(!pattern_user.test(user))
        {
            alert("Username does not meet criteria. Please try another username.");
            return false;
        }
    var pattern_pass = /^(?=.*[0-9])(?=.*[A-Za-z]).{4,}$/;
    var password = document.forms["create"]["password"].value;
    if(!pattern_pass.test(password))
        {
            alert("Password did not meet criteria. Please try another password");
            return false; 
        }
}

