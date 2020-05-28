<?php
	
	$severname = "localhost";

	$username = "root";

	$password = "";

	$dbname = "blogs";

	$conn = new mysqli($severname, $username, $password, $dbname);

	$query = "SELECT * FROM categories";

	$result = $conn->query($query);

	$categories = array();

	while ($row = $result->fetch_assoc()) {
		$categories[] = $row;
	}

	foreach ($categories as $cate) {
		echo "<pre>";
			print_r($cate);
		echo "</pre>";
	}

?>
