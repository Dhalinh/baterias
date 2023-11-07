<?php
	
	$user    	= "root";
	$pw 		= "AzuhfgxayI_6.hTG";
	$server	 	= "127.0.0.1";
	$database 	= "baterias_devs";


	/*
	$user 		= "helicomm_devs";
	$pw 		= "9PfxTt1&&446";
	$server	 	= "mx62.hostgator.mx";
	$database = "helicomm_lth";
	*/


    $conn = new PDO( "mysql:host=".$server.";dbname=".$database."",$user,$pw);
    $conn->exec("SET NAMES utf8");
    
	$con = mysqli_connect($server,$user,$pw) or die ("No se ha podido conectar al servidor de Base de datos");
	$con->set_charset('utf8');
	
	/*** FORMAT SPANISH SERVER */
	$con->query("SET lc_time_names = 'es_ES'");

	$db = mysqli_select_db( $con, $database ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	if ($con->connect_error) {

    die("Connection failed: " . $con->connect_error);

	}

?>