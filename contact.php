<!DOCTYPE HTML>

<head>
	<link rel= "stylesheet" href="styles.css">
</head>

<body>


	<?php 
	    include ('nav.php');
	?>

		<div class="content">

			<h1>Contact</h1>
			<hr>

			<style>

				</style>

				<script language="Javascript">
					function validate(){
					var allok = true;
					  if(Contact.Naam__1.value == ""){
					    alert('Invalid input for Naam');
					    return false;
					  }
					  if(Contact.Email__2.value.indexOf("Email") == ""){
					    alert('Invalid input for Email, this must include "Email" character(s)');
					    return false;
					  }
					document.Contact.Submit.disabled="disabled";
					return true;
					}
				</script>

				<div id="contact">

					<form name="Contact" method="Post" action="contact-2.php" onSubmit="return validate();">
						Naam:           <input type="edit" name="Naam__1" placeholder="Voor- en achternaam"value="" size="30">
						<br/><br/>
						Email:          <input type="edit" name="Email__2" value="" placeholder="E-mail" size="20">
						<br/><br/>
						Bericht:<br><textarea name="Bericht__3" placeholder="Vul hier jouw bericht in" cols="50" rows="4"></textarea><br><br>

						<input type="submit" name="Submit" value="Verzenden">
					</form>

				</div>

		</div>

	</body>

</html>