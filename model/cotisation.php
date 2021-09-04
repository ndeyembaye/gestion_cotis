<?php
	 require_once 'db.php';
	function addCotisation($datecotis,$mois, $motif,$montant,$matricule){
		$sql = "INSERT INTO cotisation VALUES(null, '$datecotis','$mois', '$motif','$montant','$matricule')";
		return executeSQL($sql);
	}

	function listCotisation(){
		$sql = "SELECT * FROM cotisation";
		return executeSQL($sql); 
	}
		function deleteCotisation($numCotis){
			$sql = "DELETE FROM cotisation WHERE numCotis = $numCotis";
				return executeSQL($sql);
			}
	function getCotisationByNum($numCotis){
		$sql = "SELECT * FROM cotisation WHERE numCotis='$numCotis'";
		return executeSQL($sql);
	}
	function updateCotisation($numCotis, $datecotis, $mois,$motif,$montant,$matricule){
    	$sql = "UPDATE cotisation SET numCotis='$numCotis', datecotis='$datecotis',mois='$mois', motif='$motif',montant='$montant', matricule='$matricule'  WHERE numCotis='$numCotis'";
		return executeSQL($sql);
	}
	function RechercheDeMois($mois){
		$sql = "SELECT * FROM cotisation WHERE mois='$mois'";
		return executeSQL($sql);
	}
	function  detail($mat){
		$sql = "SELECT * FROM cotisation WHERE matricule='$mat'";
		return executeSQL($sql);
	}
?>