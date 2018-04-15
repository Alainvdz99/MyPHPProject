<?php

if(isset($_POST['submit'])) {
    
    
$username =  $_POST['username'];
$password =  $_POST['password'];


$connection = Mysqli_connect('localhost' , 'root', '', 'loginapp'); 
    
    if($connection) {
        
        echo "we are connected";
    } else {
        
        
        die("database connection failed");
    }
    
    
    
    
    
    
    
    
    
//    
//    if($username && $password ) {
//        echo $username;  
//        echo $password;
//        
//        
//    
//        
//        
//    } else {
//        
//        echo "Wrong shit bruh";
//        
//    }
//    
//    
//    
//    
    

    
    
}








?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
   
 <div class="container">
     
     <div class="col-xs-6">
         <form action="login.php" method="post">
             
             <div class="form-group">
                <label for="username">Username</label>
                 <input type="text" name="username" class="form-control">
                 
                 
             </div>
             
             <div class="form-group">
                <label for="password">Password</label>
                 <input type="password" name="password" class="form-control">
                 
                 
             </div>
             
              <div class="form-group">
                <label for="submit">Submit</label>
                 <input type="submit" name="submit" class="form-control">
                 
                 
             </div>
             
         </form>
         
     </div>
     
     
     
 </div>   
   
   
   
    
</body>
</html>