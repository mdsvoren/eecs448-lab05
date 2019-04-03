<?php


    echo "Now in PHP";

    function generateList()
    {
      $mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");
      $userID = $_POST['user'];
      //echo "$userID<br>";
      $sql = mysqli_query($mysqli, "SELECT * from Posts");
      //echo "<table>";
      $checkIndex = 0;
      while ($row = $sql->fetch_assoc())
      {
        $postID = $row['post_id'];
        echo "<tr>";
        echo "<td>" .$row['content'] . "</td><td>" . $row['author_id']. "</td><td> <input type=\"checkbox\" name=\"$postID\"></td>";
        echo "</tr>";

        $checkIndex++;
      }
    //  echo "</table>";
    }

?>
