<body>
	<?php

		$URLSubmit = $_POST["URLSubmit"]; // creates variable $URLSubmit
		$DescriptionSubmit = $_POST["DescriptionSubmit"]; // creates variable $DescriptionSubmit


		$serverName = "CopDataSvr.ccec.unf.edu";
		$userName = "n00901846";
		$password = "01846Spr2017#";
		$dbName = "n00901846";

		$conn = mysqli_connect($serverName, $userName, $password, $dbName);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		} 

		$sql = "INSERT INTO urltable(URL, description) VALUES ('$URLSubmit', '$DescriptionSubmit') ON DUPLICATE KEY UPDATE description = CONCAT(description, '$DescriptionSubmit');";
		mysqli_query($conn, $sql);

		?>
		<p> Hello, the URL has been saved with the Description. </p></body></html>

</body>