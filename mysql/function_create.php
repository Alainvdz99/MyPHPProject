<?php

function createRows() {
    if (isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username );
        $password = mysqli_real_escape_string($connection, $password );

        //**p encrypt password to make it more safe

        $salt = "iusesomecrazystrings22";
        $password = md5($password . $salt);

        $connection = mysqli_connect('zandalain.skfl.io' , 'test_db', '1234', 'test_db');

        if ($connection) echo "we are connected";
        else die("database connection failed");


        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);
        if (!$result) die('Query FAILED' . mysqli_error($connection));
    }
}
