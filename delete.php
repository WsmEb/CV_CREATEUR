<?php
require("C:/xampp/htdocs/PHP/FIN ETUDE PROJECT/connections/connection.php");

if(isset($_GET['username'])){
  $username = $_GET['username'];
  $connection->exec("DELETE FROM users WHERE username='$username';");
  header("location: panel.php");
  exit();
}

?>