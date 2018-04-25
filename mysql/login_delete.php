<?php include "db.php"; ?>
<?php include "functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        label {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <div class="container">
            <div class="col-xs-6">

                <h1 class="text-center">Delete</h1>
                <form action="deletetable.php" method="post">

                    <div class="form-group">
                        <label for="username">Username
                            <input type="text" name="username" class="form-control">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password">Password
                            <input type="password" name="password" class="form-control">
                        </label>
                    </div>

                    <div class="form-group">
                        <label>
                            <select name="id" id="">
                                <?php showAllData(); ?>
                            </select>
                        </label>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
