
<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "sarahlavscott", "EKiNgei4", "sarahlavscott");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$id= $_POST["id"];

echo "<font color='#A41262'> <font size='5'> <b> $id </b> </font> </font> <br>";


$result = $mysqli->query("SELECT * FROM Posts WHERE author_id = '$id'");
if ($result->num_rows == 0)
{
  echo "No results found<br>";
}
else
{
  echo "<br><table id = 'contents'><tr><th>POST ID:</th><th>CONTENT OF POST:</th></tr>";
  while($row = $result->fetch_assoc())
  {
      echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"] . "</td></tr>";
  }
  echo "</table>";
}


$mysqli->close();
?>
