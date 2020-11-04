<?php
require 'database.php';
require 'get_clocking.php';
// define variables and set to empty values
// $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $department = test_input($_POST["name"]);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["department"])) {
        $nameErr = "Department is required";
        } 
        else {
        header('Location:getdailyshift.php?dept_name='.$_POST['department']);
        }
    }
}

//for shift test
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["shift"])) {
            $nameErr = "Shift is required";
            } 
            else {
            header('Location:getdailyshift.php?shift_name='.$_POST['shift']);
            }
        }
    }
?>