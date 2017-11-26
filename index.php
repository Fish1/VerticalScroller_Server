<html>
	<head>

	</head>

	<body>
		<p>
			Info Page
		</p>
<?php
try 
{
	$db = new PDO('sqlite:db/game.sql');

	echo '- Users - <br>';

	$result = $db->query('SELECT * FROM users');

	foreach($result as $row)
	{
		echo $row[0] . ' ' . $row[1] . '<br>';
	}

	echo '<br>- Scores - <br>';

	$result = $db->query('SELECT users.name,scores.score FROM users,scores WHERE users.userid=scores.userid');

	foreach($result as $row)
	{
		echo $row[0] . ' ' . $row[1] . '<br>';
	}
	
}
catch (Exception $e)
{
	echo $e->getMessage() . "\n";
}
?>
	</body>
</html>
