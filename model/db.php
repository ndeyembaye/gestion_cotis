<?php
	function getConnexion(){
		$host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'espaceMembre';
		$connect = mysqli_connect($host, $user, $pwd, $dbname);
		return $connect;
	}

	function executeSQL($sql){
		$execute = mysqli_query(getConnexion(),$sql);
		return $execute;
	}
?>