<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "sarahlavscott", "EKiNgei4", "sarahlavscott");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$id = $_POST["userId"];
if ($id== "")
{
        echo "User Id cannot be blank<br>";
}
else
{
    $insert = "INSERT INTO Users (user_id) VALUES ('$id')";
    if ($mysqli->query($insert) == TRUE)
    {
        echo "New user created<br>";
    }
    else
    {
        echo "User already exists<br>";
    }
}

$mysqli->close();

?>
