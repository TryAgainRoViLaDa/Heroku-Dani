<?php

function conectar()
{
	$user="root";
	$pass="";
	$server="localhost";
	$db="tryagain";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>