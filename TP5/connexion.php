<?php 
define("DB", "biblio");
$handle=mysqli_connect("localhost", "aminelch","demo");


if($handle) {
	
	echo "connexion réussite" ;
	$okdb=mysqli_select_db($handle, DB);

	if($okdb) {
		echo "BD correcte";
	}else {
		echo "BD incorrecte";
	}

}
else {
	echo "Erreur de connection ". mysqli_connect_error();
}