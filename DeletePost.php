<?php
    function generateList()
    {
      $mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");
      $userID = $_POST['user'];
      //echo "$userID<br>";
      $sql = mysqli_query($mysqli, "SELECT * from Posts");
      $checkIndex = 0;

      echo "<tr>";
      echo "<th>Content</th><th>User</th><th> Delete? </th>";
      echo "</tr>";

      while ($row = $sql->fetch_assoc())
      {
        $postID = $row['post_id'];
        echo "<tr>";
        echo "<td>" .$row['content'] . "</td><td>" . $row['author_id']. "</td><td> <input type=\"checkbox\" name=\"$checkIndex\"></td>";
        echo "</tr>";

        $checkIndex++;
      }
      $numPosts = $checkIndex;
      echo "<input type=\"number\" name=\"numberOfPosts\" value=\"$numPosts\" style=\"display: none\">";

    }

?>
