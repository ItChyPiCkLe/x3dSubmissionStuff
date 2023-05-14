	<?php 
	
	

		//$data = json_encode($_POST['data']);
		
		$k=json_decode($_POST['data'],true);
		print_r($k);
		//print_r($k[0]['title']);
		//echo count($k);
		
		//echo $k[0];
		
		echo gettype($k), "\n";
		//echo $data;
		//$elements = explode(',', $elements);
		
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

			//$sql = "UPDATE PageInfo SET title='Test', subtitle='Test' description ='test' WHERE title='Coca Cola'";	
		
		
		
			for ($x = 0; $x < count($k); $x++) {
  

			
		
		
			////////////Collect form data/////////////
			$name= $k[$x]['title']; // New name for student id=3
			$mark= $k[$x]['subtitle'];         // New mark for student id=3      
			$descripInfo= $k[$x]['descritption'];            // id of row to be updated.  
			$marker = strval($x + 1);
			///////// End of data collection /// 
			$query="UPDATE PageInfo SET title=:name,subtitle=:mark, description=:descrip WHERE id=:marker";
			$sql=$dbhandle->prepare($query);
			$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
			$sql->bindParam(':mark',$mark,PDO::PARAM_STR, 25);
			$sql->bindParam(':descrip',$descripInfo,PDO::PARAM_LOB, 5000);
			$sql->bindParam(':marker',$marker,PDO::PARAM_STR, 25);
			
			if($sql->execute()){
			//echo "Successfully updated record ";
			}
			else{
			print_r($sql->errorInfo()); // if any error is there it will be posted
			$msg=" Database problem, please contact site admin ";
			}
			}
			

			
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
    	
    	// Close the database connection
		$dbhandle = NULL;
		//echo "from Database";
		//echo "complete";
		
		
		
		
	

 ?>
	  