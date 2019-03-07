<?php 

//to access a database: 

		$databaseHost = 'localhost';
		$databaseName = 'database1';
		$databaseUsername = 'root';
		$dataPassword = '';

try {	
	// the code PDO stops hackers from trying and access our data:
	// put your database system - we are telling that we are using my sql
	//put your host + DATABASE THEN PUT A COME AND THEN USERNAME AND PASSWORD
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $dataPassword);
	
	$dbConn ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	//let's check if we got all our data
	/* foreach ($dbConn ->query("select * from employee") as $row) {
	print_r($row);	
	}*/ 
	
	
	// we use this to check for issues - to debug	
} catch (PDOException $e) {
	echo $e->getMessage();

}

?>