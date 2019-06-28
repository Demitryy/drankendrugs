<!DOCTYPE HTML>

<head>
	<link rel= "stylesheet" href="styles.css">
</head>

<body>
	<?php 
	    include ('nav.php');
	    include ('pdo.php');
	?>

		<div class="content">

			<h1>Gegevens</h1>
			<hr>

			<br><p>In deze tabel vind u alle gegevens van het alcoholgebruik van bier, wijn en gedestilleerde dranken per jaar.</p><br>
			<hr>



			<?php

					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			    	
					} else {
						?>
							<br><a href="insupd.php?mode=toevoeg"><button>Gegevens toevoegen</button></a>
							<?php
					}
				?>

			<br><br><hr><br><br>

			<table cellspacing="0" class="tabel">

			<tr>
				<th>Jaar</th>
				<th>Bier</th>
				<th>Wijn</th>
				<th>Gedestilleerd</th>
				<th>Totaal</th>
				<th>Gedestilleerd 2</th>
				<th>Totaal 2</th>
				<th>Wijn %</th>
				<?php


					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			    	
					} else {
						echo "<th>Wijzigen</th>";
						echo "<th>Verwijderen</th>";
					}
				?>
			</tr>

		</br>

			<?php
				$sql= "SELECT * FROM dranken ORDER BY Jaar DESC";
				$result= $con->query($sql);
				while($rows = $result->fetch()) {

					$gedestilleerd2 = $rows['Gedestilleerd'] / 8 *7;
					$totaal2 = $gedestilleerd2 + $rows['Bier'] + $rows['Wijn'];

				

			?>

			<tr>	  
				<td> <?php echo $rows['Jaar'] ?> </td>
				<td> <?php echo $rows['Bier'] ?> </td>
				<td> <?php echo $rows['Wijn'] ?> </td>
				<td> <?php echo $rows['Gedestilleerd'] ?> </td>
				<td> <?php echo $rows['Bier']+$rows['Wijn']+$rows['Gedestilleerd']?> </td>

				<td> <?php echo (round($gedestilleerd2, 1)); ?> </td>
				<td> <?php echo (round($totaal2,1)); ?> </td>
				<td> <?php echo round( ($rows['Wijn'] / $totaal2 *100)); ?>%</td>


				

				<?php

					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			    	
					} else {
						?>
							<td><a href="insupd.php?mode=update&&id=<?= $rows['id']?>" value="<?$rows['id']?>" ><button>Wijzigen</button></a></td>

							<td>
				        		<form action="delete.php?id=<?=$rows['id']?>" method ="post">
		 							<input type="hidden" name="Naam" value="<?=$nummer?>">
		   							<input type="submit" name="submit" value="Verwijderen">
								</form>
							</td>
							<?php
					}
				?>
					        
			</tr>
		 	<?php
		 		}
		 	?>
		</table>

		<br><br><hr><br><br>

		<h1>Gemiddeldes</h1>

		<table>
			<tr>
				<th></th>
				<th>Bier</th>
				<th>Wijn</th>
				<th>Gedestilleerden</th>
			</tr>

			<?php
				$gem = "SELECT ROUND(AVG(Bier), 1) as Bier, ROUND(AVG(Wijn), 1) as Wijn, ROUND(AVG(Gedestilleerd), 1) as Gedestilleerd FROM dranken;";
				$result= $con->query($gem);
				while($rows = $result->fetch()) {
			?>
			<tr>
				<td>Gemiddelde</td>
				<td> <?php echo $rows['Bier'] ?> </td>
				<td> <?php echo $rows['Wijn'] ?> </td>
				<td> <?php echo $rows['Gedestilleerd']?></td>
			</tr>
			<?php } ?>

		</table>

		<br><br><hr>
</body>

</html>