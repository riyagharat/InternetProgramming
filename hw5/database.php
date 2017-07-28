<body>
	<?php

		$serverName = "CopDataSvr.ccec.unf.edu";
		$userName = "n00901846";
		$password = "01846Spr2017#";
		$dbName = "n00901846";

		$star = "*";

		$conn = mysqli_connect($serverName, $userName, $password, $dbName);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		$search = mysql_escape_string($_GET['search']); // creates variable $search
		$search = htmlspecialchars($search); 

		if(strcmp($search, $star) == 0){
			$sql = "SELECT * FROM urltable ORDER BY URL, description ASC;";
		}else{

		// build SELECT quer
			$sql = "SELECT URL, description FROM urltable WHERE (URL LIKE '%".$search."%' OR description LIKE '%".$search."%') ORDER BY URL, description ASC;";
		//$query = "SELECT " . $search . " FROM urltable ORDER BY URL ASC";
		}

		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
             
            while($row = mysqli_fetch_assoc($result)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$row["URL"]."</h3>".$row["description"]."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
           echo "No results";
        }
	?> <!-- end PHP script -->

</body>