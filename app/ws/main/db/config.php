<?php
define('SERVER_IP', '127.0.0.1');
define('SERVER_PORT', '7788');

define('MAX_THREADS', 32);

define('MYSQL_HOST', 'db');
define('MYSQL_DB', 'realtime');
define('MYSQL_PORT', '3306');
define('MYSQL_USER', 'realtime');
define('MYSQL_PASS', 'realtime12345');


/*
try{
	$pdoConn = new PDO("mysql:host=".MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
	$pdoConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdoConn->exec("use ".MYSQL_DB.";");
}catch(PDOException $e){
	echo $e->getMessage();
}
*/
?>
