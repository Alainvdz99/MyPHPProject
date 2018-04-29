<?php include "db.php"; ?>

<?php

/**
* Show all data
*/

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) die('Query FAILED' . mysqli_error($connection));

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo '<option value="' . $id . '">' . $id . '</option>';
    }
}


/**
* Show all data
*/

function UpdateTable()
{
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "
      UPDATE users 
      SET username = '$username', password = '$password' 
      WHERE id = $id
     ";

    $result = mysqli_query($connection, $query);
    if (!$result) {

        die("QUERY FAILED" . mysqli_error($connection));
    }
}

/**
 * Deletes a row with the matching ID
 */
function deleteRows()
{
    global $connection;

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];

        $query = "Delete from users WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {

            die("QUERY FAILED" . mysqli_error($connection));
        } else {

            echo "record deleted";
        }
    }

}
