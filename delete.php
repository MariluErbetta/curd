<?php

//the below is to cancel an id without being redirected to another page as the page we are on just refreshed.


include_once('config.php');

$id = $_GET['id'];

$sql="DELETE FROM employee where id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id'=>$id));

header("Location:index.php");

?>