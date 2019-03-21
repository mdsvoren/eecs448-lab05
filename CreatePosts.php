<?php
$userID = $_POST['userID'];
$message = $_POST['message'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$checkExistence = "SELECT userID FROM Users WHERE userID = $userID";
$insert = "INSERT INTO Posts (content, author_id) VALUES ('$message', '$userID');";

$result = $mysqli->query($checkExistence);


if ($message == "" || !$result)
{
  echo "Unable to create post";
}
else
{
    $mysqli->query($insert);
  echo "Successfully added new user";
}

$mysqli->close();
?>
