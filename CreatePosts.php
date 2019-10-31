<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "sarahlavscott", "EKiNgei4", "sarahlavscott");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$id = $_POST["userId"];
$userPost = $_POST["post"];
if ($userPost== "")
{
      echo "Post cannot be blank<br>";
}
else
{

$result = $mysqli->query("SELECT (user_id) FROM Users WHERE user_id = '$id'");
if($result->num_rows == 0)
{
  echo "User does not exist<br>";
}
else
{
  $insert = "INSERT INTO Posts (author_id,content) VALUES ('$id','$userPost')";
  if($mysqli->query($insert) == TRUE)
  {
  echo "New post created";
  }
}





}

$mysqli->close();

?>
