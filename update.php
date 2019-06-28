<!DOCTYPE HTML>

<head>
	<link rel= "stylesheet" href="styles.css">
</head>

<?php
	include ('pdo.php');

	if (isset($_POST)) {
		$id = $_POST['id'];
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
			$sql = "UPDATE dranken SET Jaar = '$jaar' , Bier = '$bier', Wijn = '$wijn', Gedestilleerd = '$gedestilleerd'
				Where id = '$id'";

			$stmt = $con->prepare($sql);
			$stmt->bindParam(':j', $jaar);
			$stmt->bindParam(':b', $bier);
			$stmt->bindParam(':w', $wijn);
			$stmt->bindParam(':d', $gedestilleerd);
			$stmt->execute();  	
	
		if ($con->query($sql) == TRUE) {
		    echo "<h1>Gegevens zijn gewijzigd</h1>";
		    header( "Refresh:2; url=gegevens.php");
		} else {
		    echo "<h1>Gegevens zijn NIET gewijzigd</h1>";
		    header( "Refresh:2; url=gegevens.php");
		}
	}}
?>

</html>
