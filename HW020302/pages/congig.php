<?php

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="1234";
$dbname="travels";

$db = mysqli_connect($host,$user,$password,$dbname, $port) 
    or die ('Could not connect to the database server' . mysqli_connect_error());
mysqli_set_charset($db,"utf8") or die ("Error");

?>