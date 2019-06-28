<!DOCTYPE HTML>

<head>
	<link rel= "stylesheet" href="styles.css">
</head>

<body>
	<?php 
	    include ('nav.php');
	    include ('pdo.php');

		$mode = $_GET['mode'];

		if($mode == "update"){
			$nr = $_GET['id'];	
				$sql= "select * FROM dranken
				WHERE id = $nr";

				$result= $con->query($sql);
					while($rows = $result->fetch()) {


					$jaar = $rows['Jaar'];
					$bier = $rows['Bier'];
					$wijn = $rows['Wijn'];
					$gedestilleerd = $rows['Gedestilleerd'];




					$action = "update.php";
					$modes = "Wijzigen";

					$id = $_GET['id'];
					}
		}elseif($mode == "toevoeg"){
		  		$action = "toevoeg.php";
		  		$jaar = NULL;
		  		$bier = NULL;
		  		$wijn = NULL;
		  		$gedestilleerd = NULL;
		  		$modes = "Toevoegen";
		  		}

		
		  		
		?>

		

		<div class="content">

		<p><b><?php echo $modes?></b></p>

		<form action="<?=$action?>" method="post">
			<input type="hidden" name="id" value="<?=$id?>">

			Jaar:<br> <input type="text" name="Jaar" placeholder="Jaar" value="<?=$jaar?>"><br><br>
			Bier:<br><input type="text" name="Bier" placeholder="Bier" value="<?=$bier?>"><br><br>
			Wijn:<br><input type="text" name="Wijn" placeholder="Wijn" value="<?=$wijn?>"><br><br>
			Gedestilleerd:<br><input type="text" name="Gedestilleerd" placeholder="Gedestilleerd" value="<?=$gedestilleerd?>"><br><br>

			<br><input type="text" name="id" placeholder="id" value="<?=$id?>" hidden><br><br>

			<input type="submit" value="Opslaan">
			<input type="reset" value="Reset">
			<br><a href="gegevens.php"><button>Terug naar de gegevenstabel</button></a>
		</form>
		</br><hr>
	</div>
</body>