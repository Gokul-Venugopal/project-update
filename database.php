<?php

$servername='remotemysql.com';
$username='wohGjTctOq';
$password='JLw1XajDfn';
$dbname = "wohGjTctOq";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>


