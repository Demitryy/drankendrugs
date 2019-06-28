<?php
	include "databasefuncties.php";

	if(checkYear(1960) == TRUE){
		echo "jaar bestaat";
	} else {
		echo "jaar bestaat niet";
	}
?>