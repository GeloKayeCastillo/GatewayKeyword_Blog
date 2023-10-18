<?php
$server = "sql111.epizy.com";
$username = "epiz_33181676";
$password = "mPqY2Ij30rB";
$dbname = "epiz_33181676_lavishly_ph";

$conn mysql_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}



?>