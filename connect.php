<?php 
$host = 'ec2-174-129-221-240.compute-1.amazonaws.com'; 
$dbname = 'd5mqn08j0c23qn'; 
$user = 'ohbmnlctuvkhbw'; 
$pass = '766df0fc2656fe78a9569ed3cdfb3fdf816eb5f7c10db785adf27d82f88a496b'; 
$connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass); 
 
$result = $connection->query("SELECT * FROM polls"); 
 
if($result !== null) {     
	echo $result->rowCount(); 
}
