
<?php


/*Datos de conexion a la base de datos*/


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "host_db";
 

try{
	$conn = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
}catch(PDOException $e){
	die('Connection Failed:' .$e->getMessage());

}


$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}


$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//comprobar conexion

if(!$con){
	die("Connection failed: ".mysqli_connect_error());
}








?>