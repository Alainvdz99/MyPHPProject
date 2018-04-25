<?php

if(isset($_POST['submit'])) {
    
$username = $_POST['username'];
$password = $_POST['password'];
    
    $name = ["Alain", "Anus", "jan", "Theo", "keees", "Tim"];
    $minimun = 5;
    $maximun = 10;
    
    
    if(strlen($username) < $minimun ) {
        
       echo "Username has to be longer then five"; 
        
    }

if(strlen($username) > $maximun ) {
        
       echo "Username has to be less then ten"; 
        
    }

    
}
    

if(!in_array($username, $name)) {
    
    echo "Sorry you cannot login";
    
    
} else { 

    echo "welcome";
}



    
?>
