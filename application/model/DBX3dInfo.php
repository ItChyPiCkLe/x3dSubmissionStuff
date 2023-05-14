	<?php 
		$info;
		// get the brand bame
		$brandName = "Coca Cola"; 
		// Connect to the database table and retrieve the required brand data
		$upTwo = "sqlite:";
		 $upTwo .= realpath(dirname(__FILE__) . '/../../db/test1.db');
			
			
			
		// Connect to the database table and retrieve the required brand data
 		try {		
 			// Make a connection to the drinks database
			$dbhandle = new PDO($upTwo, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));

			// Prepare a SQL statement to select a record matching the brand name selected in the view drop-down list
			$sql = 'SELECT * FROM Model_3D';
			
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $dbhandle->query($sql);
		
			// Set up an array to return the results to the view
			$resulty = null;
			
			// Set up a variable to index each row of the array
			$i=0;	
			
			// Use PDO fetchall() the results from the database using a while loop
			// Use a while loop to loop through the table rows — there may be more than one record with the same brand name
			while ($data = $stmt->fetch()) {
				
				// Write the database contents to the results array for sending back to the view
				$resulty[$i]['brand'] = $data['brand'];
				$resulty[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$resulty[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$resulty[$i]['modelTitle'] = $data['modelTitle'];
				$resulty[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$resulty[$i]['modelDescription'] = $data['modelDescription'];
				$resulty[$i]['buttons'] = $data['buttons'];
			
				
				// increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
    	
    	// Close the database connection
		$dbhandle = NULL;
		//echo "from Database";
		echo json_encode($result);
		$info = $resulty;
		
		
		
		
	

 ?>
	  