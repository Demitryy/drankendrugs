<?php
// Initialize the session
session_start();

?>
 
<ul id="nav">
  <li><a href="home.php">HOME</a></li>
  <li><a href="gegevens.php">GEGEVENS</a></li>
  <li><a href="contact.php">CONTACT</a></li>
  <div id="user">
  	<?php
  		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    		echo "<a href=\"login.php\"><button>Inloggen</button></a>";
    		echo "<a href=\"register.php\"><button>Registreren</button></a>";
		} else {
			echo "Je bent ingelogd als <b>" . htmlspecialchars($_SESSION["username"]) . "</b><br>";
			echo "<a href=\"logout.php\"><button>Uitloggen</button></a>";
		}	
 	?>
   
 	
 </div>
</ul>