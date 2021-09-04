<?php
	 require_once 'db.php';
	function addMembre($nom,$prenom, $adresse,$tel){
		$sql = "INSERT INTO membre VALUES(null, '$nom','$prenom', '$adresse','$tel')";
		return executeSQL($sql);
	}

	function listMembre(){
		$sql = "SELECT * FROM membre";
		return executeSQL($sql); 
	}
 function rechercheMembre($matricule){
    $sql="SELECT  * FROM membre WHERE matricule='$matricule'";
	return executeSQL($sql); 
 }
 function deleteMembre($mat){
	$sql = "DELETE FROM membre WHERE matricule = $mat";
	return executeSQL($sql);
 }


?>