<?php
require 'database.php';
// get last data from the database.
$sql = "SELECT * FROM tenter ORDER BY ed DESC LIMIT 1";
 $result = mysqli_query($dbc, $sql) or die('Bad Query: $sql');

//  $sqli = "SELECT * FROM tenter ORDER BY C_Date DESC LIMIT 1";
//  $data = mysqli_query($dbc, $sqli) or die('Bad Query: $sqli');

//This is the tenter table for getting the clocking time
while($row = $result->fetch_assoc()){
   $e_id = $row["e_id"];
   $e_name = $row["e_name"];
   $e_time = $row["e_time"];
   $e_date = $row["e_date"];
   // echo $C_Date;
}
?> 
