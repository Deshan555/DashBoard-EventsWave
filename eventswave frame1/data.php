<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=event", "root", "Gamage@97VI");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':commentID'		=>	$_POST["commentID"]
		);

		$query = "
		INSERT INTO comments 
		(commentID) VALUES (:commentID)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT commentID, COUNT(commentID) AS Total 
		FROM comments 
		GROUP BY commentID
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'commentID'		=>	$row["commentID"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>