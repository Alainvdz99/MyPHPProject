<?php include "db.php";?>
<?php include "functions.php"?>



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



      <div class="container">

     <div class="col-xs-6">
         <form action="updatetable.php" method="post">

             <div class="form-group">
                <label for="username">Username</label>
                 <input type="text" name="username" class="form-control">


             </div>

             <div class="form-group">
                <label for="password">Password</label>
                 <input type="password" name="password" class="form-control">


             </div>

              <div class="form-group">

                 <select name="id" id="">



                <?php

          showAllData();

                ?>


                 </select>



             </div>

              <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

             </div>


         </form>


     </div>

 </div>




</body>
</html>
