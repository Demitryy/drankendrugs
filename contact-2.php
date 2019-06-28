<!DOCTYPE HTML>

<head>
	<link rel= "stylesheet" href="styles.css">
</head>

<body>

	<?php
		include ('nav.php');
	?>

	<div class="content">

	<h1>Bedankt voor je bericht <?php echo $_POST["Naam__1"]; ?></h1><br><hr><br>

	<p><b>Je hebt naar ons gestuurd:</b><br><br>

		<?php echo $_POST["Bericht__3"]; ?>

	</p>

	<hr>

	<p>Je zult zo spoedig mogelijk van ons horen</p><br><hr><br>

	<a href="home.php"><button>Return naar de homepagina</button></a><br><br><hr>

</div>
</body>