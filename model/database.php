<?php
$host = 'cfmysqldb.cqa9dcydvtr5.us-east-1.rds.amazonaws.com';
$user = 'admin';
$password = 'Cupcakes1234';
$database = 'gorgeous_cupcakes';

try {
	$dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_general_ci"
	];
	$conn = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('../view/database_error.php');
	exit();
}
