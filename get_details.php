<?php

require 'database.php';
require 'get_clocking.php';
//comparing user employee id with the user id in the tuser table
$sql = "SELECT * FROM tuser WHERE id='$e_id'";
$result = mysqli_query($dbc, $sql) or die('Bad Query: $sql');

 while($row = $result->fetch_assoc()){
    $id = $row["id"];
    $name = $row["name"];
    $reg_date = $row["reg_date"];
    $dept = $row["dept"];
    $sex = $row["idno"];
    $division = $row["company"];

 }

//total employee 
$active = "SELECT count(id) AS total FROM tuser";
$data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
$values= mysqli_fetch_assoc($data);
$total_employees = $values['total'];
//total employee ends


//active employee begins
 $active = "SELECT count(id) AS total FROM tuser WHERE PassiveType= 'ACT'";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $active_employees = $values['total'];
 //active employee ends

 //Passive or non active employee begins
   $active = "SELECT count(id) AS total FROM tuser WHERE PassiveType!= 'ACT'";
   $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
   $values= mysqli_fetch_assoc($data);
   $passive_employees = $values['total'];
 //Passive employee ends here

 //ADA begins
 $active = "SELECT count(id) AS total FROM tuser WHERE PassiveRemark= 'Unauthorized Absence Deactivation'";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $ada = $values['total'];
 //ADA ends

 //system users 
 $active = "SELECT count(Username) AS total FROM usermaster";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $system_users = $values['total'];

 //system users end

 //terminal 
 $active = "SELECT count(id) AS total FROM tgate";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $terminal = $values['total'];
 //terminal ends

 //total department 
 $active = "SELECT count(dept) AS total FROM deptgate";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $department = $values['total'];

 //total department ends

 //foreach department begins
//  $sql = "SELECT * FROM deptgate WHERE group_id='4'";
 $sql = "SELECT * FROM deptgate";
 $eachdept = mysqli_query($dbc, $sql) or die('Bad Query: $sql');
 //foreach department ends

 //unassigned employees
 $active = "SELECT count(id) AS total FROM tuser WHERE dept= 'Not Assigned'";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $Not_assigned = $values['total'];
 //unassigned ends

 //raw logs
 $active = "SELECT count(e_date) AS total FROM tenter";
 $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
 $values= mysqli_fetch_assoc($data);
 $raw_log = $values['total'];
 //raw log ends

  //processed logs
  $active = "SELECT count(e_id) AS total FROM daymaster";
  $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
  $values= mysqli_fetch_assoc($data);
  $processed_log = $values['total'];
  //processed log ends

   //Active flags
   // $active = "SELECT count(Flag) AS total FROM flagtitle WHERE Title IS NOT NULL";
   // $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
   // $values= mysqli_fetch_assoc($data);
   // $total_flag = $values['total'];
   // echo $total_flag
   //Active  flags ends

   //Shift 
   $active = "SELECT count(id) AS total FROM tgroup";
   $data = mysqli_query($dbc, $active) or die('Bad Query: $sql');
   $values= mysqli_fetch_assoc($data);
   $total_shifts = $values['total'];
   //Shift end

   //getting all shift
   $active = "SELECT * FROM tgroup";
   $all_shift = mysqli_query($dbc, $active) or die('Bad Query: $sql');
   //ends
   
//    //getting the shift name with the shift id
//    $active = "SELECT * FROM tgroup where id='1'";
//    $result = mysqli_query($dbc, $active) or die(mysql_error());
//    while($row = mysqli_fetch_assoc($result)) {
//       $fromID = $row['name'];
//   }
//    //ends here

//    // begins shift roaster
//    $sql = "SELECT * FROM tuser WHERE group_id='4'";
//    $dailyshift = mysqli_query($dbc, $sql) or die('Bad Query: $sql');

   // public function get_roaster(){
   //    $sql = "SELECT * FROM tuser WHERE group_id='4'";
   //    $dailyshift = mysqli_query($dbc, $sql) or die('Bad Query: $sql');
   // }
  // The rest are passed in the dailyshift view

//  while($row = $result->fetch_assoc()){
//     $id = $row["id"];
//     $name = $row["name"];
//     $reg_date = $row["reg_date"];
//     $dept = $row["dept"];
//     $sex = $row["idno"];
//     $division = $row["company"];
//    echo $result;
//  }

// foreach($dailyshift as $result){
//    $id = $result["id"];
//    $name = $row["name"];
//    $reg_date = $row["reg_date"];
//    $dept = $row["dept"];
//    $sex = $row["idno"];
//    $division = $row["company"];
//   echo $id;
// }
?>