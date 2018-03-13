<?php 
$host = 'ec2-54-204-45-43.compute-1.amazonaws.com'; 
$dbname = 'dbq0adtf71dekn'; 
$user = 'qytaprocyyadew'; 
$pass = '2bf3d454f2ee57b066f18d5676656d88d9091be21f5b47fa2a96669ca85b2163'; 
$connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass); 
 
$result = $connection->query("SELECT * FROM uniform"); 
 
if($result !== null) {     
	echo $result->rowCount(); 
}
