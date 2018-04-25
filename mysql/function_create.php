<?php

function createRows() {
    if (isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if ($connection) echo "we are connected";
        else die("database connection failed");


        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);
        if (!$result) die('Query FAILED' . mysqli_error($connection));
    }
}
