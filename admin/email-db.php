<?php
include "../inc/dbconfig.php";

switch ($_GET['a']) {
  case "delete":
    $query = "DELETE FROM email WHERE id = '" . $_GET['id'] . "'";
    break;
}

mysql_query($query);

mysql_close();

header( "Location: email-index.php" );
?>