<?php 
	include('basededatos.php');

	$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

	if (!$connect) {
		echo "Error en la conexion";
	}
		echo "Buena conexion";

	print_r($POST);

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$nombre = $_POST['user'];
	$direccion = $_POST['adress'];
	$telefono = $_POST['phone'];

	function registrar( , $coreo, $pass, $nombre, $direccion, $telefono) 
		$query = 'INSERT INTO usuarios(nombre,direccion,password,correo,telefono)VALUES(' . $_email . ', ' . $_pass . ', ' . $_user . ', ' . $_adress . ', ' . $_phone . ' )'
		
	echo $query;
	
	registrar();
?>