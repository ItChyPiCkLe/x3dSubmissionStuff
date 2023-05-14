<?php
echo "php";
$k=json_decode($_POST['data'],true);
print_r($k);







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
		
		
		
					
			////////////Collect form data/////////////
			$name= $k['data']; // New name for student id=3
			$mark= $k['number'];         // New mark for student id=3      
			///////// End of data collection /// 
			$query="UPDATE PageInfo SET image=:name WHERE id=:mark";
			$sql=$dbhandle->prepare($query);
			$sql->bindParam(':name',$name,PDO::PARAM_LOB);
			$sql->bindParam(':mark',$mark,PDO::PARAM_STR, 25);
			
			
			
			if($sql->execute()){
			echo "Successfully updated record ";
			}
			else{
			print_r($sql->errorInfo()); // if any error is there it will be posted
			$msg=" Database problem, please contact site admin ";
			}
			
			

			
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
    	
    	// Close the database connection
		$dbhandle = NULL;









?>
