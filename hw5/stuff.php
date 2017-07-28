	<table> 
		<caption>Results</caption>
		<?php
			//fetch each record in result set
			while($row = mysql_fetch_row($result)){
				// build table to display results
				print("<tr>");
				
				foreach($row as $value)
					print("<td>$value</td>");
				
				print("<tr>");
			}
		?> <!-- end PHP script -->
	</table>
	<p>Your search yielded
		<?php print(mysql_num_rows($result)) ?> results.</p>



				if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_assoc($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results["URL"]."</h3>".$results["description"]."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
            //if(preg_match("/string/", $search))
             
        }
        else{ // if there is no matching rows do following
           echo "No results";
        }


        //		$sql = "SELECT URL, description FROM urltable WHERE EXISTS (SELECT URL FROM urltable WHERE URL = '".$URLSubmit."');";
//		$result = mysqli_query($conn, $sql);

/*		if(array_search($URLSubmit,$result) != FALSE){
//			$query = "UPDATE urltable SET description = CONCAT(description, '".$DescriptionSubmit."') WHERE URL = '".$URLSubmit."');";
//			mysqli_query($conn, $query);
//			echo "Update";
//			echo array_search($URLSubmit,$result);
//		}else{
/			$query = "INSERT INTO urltable (URL, description) VALUES('$URLSubmit', '$DescriptionSubmit');";
    		mysqli_query($conn, $query);
    		echo "insert";
		}
*/
//		$sql = "SELECT * FROM urltable WHERE URL = " .$URLSubmit. ";";
//		$result = mysqli_query($conn, $sql);

//		if(mysqli_num_rows($result) > 0){
//			$query = "UPDATE urltable SET description = CONCAT(description, '$DescriptionSubmit') WHERE URL = '$URLSubmit')";
//			mysqli_query($query);
//		else{
//			$query = "INSERT INTO urltable" . "(URL, description)" . "VALUES('$URLSubmit', '$DescriptionSubmit')";0
//  		mysqli_query($query);
//		}

//		$results = mysqli_query("SELECT * FROM urltable WHERE URL = '$URLSubmit'");
		//$data = mysqli_fetch_row($results);
//		if(empty($data)) {
 //   		$query = "INSERT INTO urltable" . "(URL, description)" . "VALUES('$URLSubmit', '$DescriptionSubmit')";
    	//	mysql_query($query);
    	//	exit();
//		}else {
 //    		$query="UPDATE urltable SET description = CONCAT(description, '$DescriptionSubmit') WHERE URL = '$URLSubmit')";
     	//	mysql_query($query);
     		//$url = "http://www.somesite.com";
    	//	exit();
//		}		
		//$query = "INSERT INTO urltable" . "(URL, description)" . "VALUES('$URLSubmit', '$DescriptionSubmit')";