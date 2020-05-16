<?php

// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="1234";
// $dbname="hw_04_db";

// $db = mysqli_connect($host,$user,$password,$dbname, $port) 
//     or die ('Could not connect to the database server' . mysqli_connect_error());
// mysqli_set_charset($db,"utf8") or die ("Error");


  $dsn = 'mysql:host=localhost;dbname=hw_04_db';
  $pdo = new PDO($dsn, 'root', '1234');


?>