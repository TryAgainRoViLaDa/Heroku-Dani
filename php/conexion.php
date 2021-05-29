<?php

function conectar()
{
	$user="id16927528_tryagainrodavila";
	$pass="";
	$server="localhost";
	$db="id16927528_tryagain";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>