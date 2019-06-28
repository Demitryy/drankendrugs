<?php
	include ('pdo.php');

	if (isset($_POST)) {
		$jaar = $_POST['Jaar'];
		$bier = $_POST['Bier'];
		$wijn = $_POST['Wijn'];
		$gedestilleerd = $_POST['Gedestilleerd'];
		
		$check = $con->prepare("SELECT * FROM dranken WHERE Jaar = :jaar");
		$check->bindParam(":jaar", $jaar);
		$check->execute();

		if($check->rowCount() > 0){
			//check if year already exist
		   //echo "<h3>Dit jaar bestaat al</h3>";
		}else {
			$sql = "INSERT INTO dranken (Jaar, Bier, Wijn, Gedestilleerd) 
			VALUES (:j, :b, :w, :d)";

			$stmt = $con->prepare($sql);
			$stmt->bindParam(':j', $jaar);
			$stmt->bindParam(':b', $bier);
			$stmt->bindParam(':w', $wijn);
			$stmt->bindParam(':d', $gedestilleerd);
			$stmt->execute();
		}
		header("Location: gegevens.php");
	}
?>