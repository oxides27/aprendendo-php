<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "visitas";

$conecta = mysql_connect ($host, $user, $pass, $db)
or die ("Deu merda");

mysql_select_db($db)
or die ("Deu merda");
?>
