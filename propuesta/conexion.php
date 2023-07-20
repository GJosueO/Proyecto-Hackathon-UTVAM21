<?php
$server ='localhost';
	$user = 'josue';
	$password ='';
	$database = 'bd_comercios';

		$conexion = new mysqli($server,$user,$password,$database);

		if (mysqli_connect_errno()){
			echo 'No', mysqli_connect_error();
			exit();

		}

?>