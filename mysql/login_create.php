<?php include "db.php"; ?>
<?php include "function_create.php" ?>
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
        <h1 class="text-center">Create</h1>
        <form action="create_user.php" method="post">

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
                <label for="submit">
                    <input type="submit" name="submit" class="form-control" value="Create">
                </label>
            </div>

        </form>
    </div>
</div>
</body>
</html>
