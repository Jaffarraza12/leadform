<?php  global $con;


if ($_SERVER['SERVER_NAME'] == 'localhost'){
 define('SERVER','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','apna');
 
} else {
 define('SERVER','localhost');
 define('USER','interna1_leads');
 define('PASS','iifj123!@');
 define('DB','interna1_leads');
 

}




$con = new mysqli(SERVER,USER,PASS,DB);

// Check connection
if ($con->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();die();
  
  }
?>