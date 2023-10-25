<?php
	

	$host = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "jedisearch";

	$dbconn = new mysqli($host, $username, $password, $dbname);

	if ($dbconn->connect_error) {
		die("Noooooooooo!<br>" . $dbconn->connect_error . "<br>" . $dbconn->connect_errno);
	}
	// else {
	// 	echo "<p>Connected!</p>";
	// }

?>