<?php

function conectar()
{
	$user="xsgtsfwpvbzrja";
	$pass="beba546683475ac81cba03f86f3f5c18518b7e603d3ef2bd8c25039e52e79b4b";
	$server="ec2-54-73-58-75.eu-west-1.compute.amazonaws.com";
	$db="tryagain";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>