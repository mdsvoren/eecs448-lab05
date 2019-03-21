<?php
$userID = $_POST['userID'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$insert = "INSERT INTO Users(userID) VALUES('$userID');";

$result = $mysqli->query($insert);

if ($userID == "" || !$result)
{
  echo "Unable to add new user";
}



echo "finish";

$mysqli->close();
?>
