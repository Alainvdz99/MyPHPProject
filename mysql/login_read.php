<?php



$connection = Mysqli_connect('localhost' , 'root', '', 'loginapp'); 
    
    if($connection) {
        
    echo "we are connected";
    } else {    
    die("database connection failed");
    }
    
    
    $query = "SELECT * FROM users";
    
    
    $result = mysqli_query($connection, $query);
    
    
    if(!$result) {
        
        die('Query FAILED' . mysqli_error());
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
         
     </div>
     
     <?php
     
     while($row = mysqli_fetch_assoc($result)) {
        
         ?>
         
         <pre>
         
         <?php
         print_r($row);
         ?>
         
         </pre>
         
         <?php
     }
     
     
     
     
     ?>
     
     
     
     
     
 </div>   
   
   
   
    
</body>
</html>