<?php
	//database functies

	Function getConnection(){
		include 'settings.php';

		$con = NULL;

		try {
		$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	// set the PDO error mode to exception
    	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}

		catch(PDOException $e){
	    	echo "Connection failed: " . $e->getMessage();
	    }

	    return $con;
	}	
	
	Function checkYear($jaar){
		$yearExist = FALSE;	
		$con = getConnection();
		$sql = "SELECT Jaar FROM dranken WHERE Jaar = $jaar";

		$result = $con->query($sql);

		if($result->rowCount() > 0){
			$yearExist = TRUE;
		} return $yearExist;
	}
?>
