<?php

    generateTable();

    function generateList()
    {
      $mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");
      $sql = mysqli_query($mysqli, "SELECT * from Users;");
      while ($row = $sql->fetch_assoc())
      {
      echo "<option value='" . $row["userID"]. "'>" . $row['userID'] . "</option>";
      }
    }

    function generateTable()
    {
      $mysqli = new mysqli("mysql.eecs.ku.edu", "m326s072", "xah7Aedi", "m326s072");
      $userID = $_POST['user'];
      //echo "$userID<br>";
      $sql = mysqli_query($mysqli, "SELECT content from Posts where author_id = \"$userID\";");
      echo "hello";
      echo "<table>";
      while ($row = $sql->fetch_assoc())
      {
        echo "<tr>";
        echo "<td>" .$row['content'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }





?>
