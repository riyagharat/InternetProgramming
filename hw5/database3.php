<body>
	<?php
		$URLUpdate = $_POST["URLUpdate"]; // creates variable $URLUpdate
		$DescriptionUpdate = $_POST["DescriptionUpdate"]; // creates variable $DescriptionUpdate

		$query = "UPDATE urltable SET URL=CONCAT(URL, '$DescriptionUpdate')";
		
		// Connect to MySQL
		if(!($database = mysql_connect("CopDataSvr.ccec.unf.edu", "n00901846", "01846Spr2017#")))
			die("Could not connect to database </body></html>" );
			
		// open n00901846 database
		if(!mysql_select_db("n00901846", $database))
			die("Could not open database </body></html>");
			
		// query n00901846 database
		if(!($result = mysql_query($query, $database))){
			print("<p>Could not execute query!</p>");
			die(mysql_error() . "</body></html>");
		}
		
		mysql_close($database);
		?>
		<p> Hello, the URL has been updated with the Description. </p></body></html>

</body>