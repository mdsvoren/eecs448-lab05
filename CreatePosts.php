<?php
$userID = $_POST['userID'];
$message = $_POST['message'];

$mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$checkExistence = "SELECT userID from Users where userID='$userID'";
$insert = "INSERT INTO Posts (content, author_id) VALUES ('$message', '$userID');";

$result = $mysqli->query($checkExistence);

$arr = ($result->fetch_all());

if ($message == "" || empty($arr))
{
  echo "Unable to create post";
}
else
{
    $mysqli->query($insert);
  echo "Successfully posted message";
}

$result->free();
$mysqli->close();
?>
