<?php
echo "<h1>Delete Confirmation</h1><br>";

$numPosts = ($_POST['numberOfPosts']);


//get an array of the post numbers that are to be deleted
$deletables = array();
for ($i = 0; $i < $numPosts; $i++)
{
  if (!empty($_POST[$i]))
  {
    $deletables[count($deletables)] = $i;
  }
}


  $mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");
  //echo "$userID<br>";
  $sql = mysqli_query($mysqli, "SELECT * from Posts");

  //find the post id for all items to be deleted
  $toDelete = array();
  $currentIteration = 0;
  while ($row = $sql->fetch_assoc())
  {
    for ($i = 0; $i < count($deletables); $i++)
    {
      if ($currentIteration == $deletables[$i])
      {
        $toDelete[count($toDelete)] = ($row['post_id']);
      }
    }
    $currentIteration++;
  }

  //Delete all specified
  for ($i = 0; $i<count($toDelete); $i++)
  {
    $num = $toDelete[$i];
    echo "Deleted post_id: $num<br>";
    $delete = "DELETE FROM Posts WHERE post_id = '$num';";
    $mysqli->query($delete);
  }



?>
