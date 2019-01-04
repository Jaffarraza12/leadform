<?php  global $con;


if ($_SERVER['SERVER_NAME'] == 'localhost'){
 define('SERVER','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','apna');
 
} else {
 define('SERVER','localhost');
 define('USER','adornher_apna');
 define('PASS','apna123@');
 define('DB','adornher_apna');
 

}




$con = new mysqli(SERVER,USER,PASS,DB);

// Check connection
if ($con->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();die();
  
  }
?>