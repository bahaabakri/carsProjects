<?php 

$dsn = 'mysql:host=localhost;dbname=cars';
$user = 'root';
$pass = '';
$option = array (
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
try {
	$con = new PDO($dsn, $user, $pass, $option);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	//echo "Connect DataBase shop";
}
catch (PDOException $e) {
	echo "Faild to connect DataBase " . $e->getMessage();
}




?>