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

//echo "$checkExistence";
//$result = $mysqli->query($checkExistence);
//echo ($checkExistence);
//$arr = array($result);

if ($result = $mysqli->query($checkExistence)) {

    /* fetch associative array */
    // while ($row = $result->fetch_assoc()) {
    //     echo json_encode($row);
    // }

    /* free result set */
  //  $result->free();
}

//echo mysql_num_rows($result);
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
