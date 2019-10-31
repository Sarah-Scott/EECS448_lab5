<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "sarahlavscott", "EKiNgei4", "sarahlavscott");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$result = $mysqli->query("SELECT (user_id) FROM Users");

if ($result->num_rows == 0)
{
  echo "No users found";
}

while($row = $result->fetch_assoc())
{
  echo $row["user_id"] . "<br>";
}


$mysqli->close();

?>
