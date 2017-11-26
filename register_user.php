<?php

try {
	$db = new PDO('sqlite:db/game.sql');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = $db->query('SELECT count(*) FROM users');

	foreach($result as $row)
	{
		echo $row[0] . '<br>';
	}

	echo 'user already exists';
}
catch (Exception $e)
{
	echo 'Error';	
}
?>
