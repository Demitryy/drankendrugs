<?php
include ('pdo.php');

if (isset($_POST)) {
	
	//naam van product ophalen
	$id = $_GET['id'];

	//sql delete query
	$delete= "DELETE FROM `dranken` WHERE `dranken`.`id`= $id";

	$stmt = $con->prepare("DELETE FROM dranken WHERE id = $id");
			$stmt->bindParam(':id',$id);
			//$stmt->debugDumpParams();
			$stmt->execute();
			header('Location: ' . $_SERVER['HTTP_REFERER']);

}

?>