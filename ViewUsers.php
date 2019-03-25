<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$getUsers = "SELECT * from Users;";

//$result = $mysqli->query($getUsers);

//$arr = ($result->fetch_all());

if ($result = $mysqli->query($getUsers)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf("%s \n", $row["userID"]);
    }

    /* free result set */
    $result->free();
}

// if (empty($arr))
// {
//   echo "No users to show";
// }
// else
// {
//   $arr0 = $arr[0];
//   echo "$arr0";
// }

$result->free();

$mysqli->close();
?>
