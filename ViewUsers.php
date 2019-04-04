<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$getUsers = "SELECT * from Users;";
echo "<h1>Registered Users:</h1>";
if ($result = $mysqli->query($getUsers)) {
echo "<h4>";
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf("%s \n", $row["userID"]);

        echo "<br>";

    }
echo "</h4>";
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
