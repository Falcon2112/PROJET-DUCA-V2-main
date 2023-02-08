<?php

try {
		$access=new pdo("mysql:host=localhost;dbname=duca;charset=utf8", "root", "");
		
		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
    
// session_start(array $options = []): bool


?>