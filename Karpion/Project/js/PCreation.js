var userNode = document.getElementById("username");
var passNode = document.getElementById("password");
var emailNode = document.getElementById("email");

var Ubool = false;
var Pbool = false;
var Ebool = false;


userNode.addEventListener("change",Vuser,false);
passNode.addEventListener("change",Vpass,false);
emailNode.addEventListener("change",Vemail,false);


function Vuser(event){
    //nothing yet but should check name against every name in database
    //currently just checks to make sure theres text and no space

    //adds text saying bad username
    if (userNode.value.search(/^[^ ]\w+$/)){
        document.getElementById("Uerror").innerHTML = "Please enter a username";
        Ubool = false;
    }
    else{
        document.getElementById("Uerror").innerHTML = "";
        Ubool = true;
    }

}

function Vpass(event){
    //no set password parameters
    //checks for 6+ characters
    //1 cap 1 number

    //adds text saying bad password
    if (passNode.value.search(/.*[A-Z]+.*[0-9]+.*|.*[0-9]+.*[A-Z]+.*/)){
        document.getElementById("Perror").innerHTML = "Please enter a password that contains atleast one capital letter and one number";
        Pbool = false;
    }
    else{
        document.getElementById("Perror").innerHTML = "";
        Pbool = true;
    }
}

function Vemail(event){
    //checks for @
    //checks for .com

    //adds text to page saying bad email
    if (emailNode.value.search(/\w+@\w+\.com/)){
        document.getElementById("Eerror").innerHTML = "Please enter a valid email address";
        Ebool = false;
    }
    else{
        document.getElementById("Eerror").innerHTML = "";
        Ebool = true;
    }
}


function verify(){
    if(Ubool && Pbool && Ebool){
        alert("Succesfully Registered User")
    }
    else{
        alert("Error: Cannot Register User")
    }

}