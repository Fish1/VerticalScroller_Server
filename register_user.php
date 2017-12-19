<?php

try {
	$db = new PDO('sqlite:db/game.sql');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = $db->query('SELECT count(*) FROM users');

	$result = $db->query('SELECT count(*) FROM users WHERE ' .
		' username = ' . $username );

	/*
	foreach($result as $row)
	{
		echo $row[0] . '<br>';
	}
	 */

	echo $result;

	echo 'user already exists';
}
catch (Exception $e)
{
	echo 'Error';	
}
?>
