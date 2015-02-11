<?php
$dbHost = "localhost";
$dbUser = "remediho_lgadmin";
$dbPass = "Remedi1138";
$dbName = "remediho_lgarden";

$db = mysql_connect($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName, $db);
?>