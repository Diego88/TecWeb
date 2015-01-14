<?php
	
	$hotsdb = "localhost";
	$basededatos = "afim21";

	$usuariodb = "root";
	$clavedb = "";

	$tabla_db1 = "monitores";


	$mysqli=new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos") or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 	
	
?>