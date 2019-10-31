<?php


$mysqli = new mysqli("mysql.eecs.ku.edu", "sarahlavscott", "EKiNgei4", "sarahlavscott");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$posts = $_POST["checkbox"];
foreach($posts as $value)
{
	$delete = "DELETE FROM Posts WHERE post_id = '$value'";
	if($mysqli->query($delete) == TRUE)
	{
		echo "Post id: " .$value. " deleted. <br>";

	}
	else
	{
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
}

$mysqli->close();
?>
