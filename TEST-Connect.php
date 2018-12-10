<?php
// ini_set("display_errors", On);
// error_reporting(E_ALL);
?>

<?php

// echo "hello world";

$conn_string = "host = localhost port = 5432 dbname = postgres user = postgres password = postgres";
// echo $conn_string;

$db_conn = pg_connect($conn_string);
// echo $db_conn;

if (!$db_conn){
  echo "Failed<br>";
  // error_log(pg_last_error());
} else {
  echo "Success<br>";
}


?>
