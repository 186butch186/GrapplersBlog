<?php
//@author: Michael Butchko
//Catches errors on startup
  ini_set('display_errors', True); 
  error_reporting(E_ALL | E_STRICT); 
  

//provides php functions for server side checking users input
include('php_functions.php'); 

//Variable for email confirmation use, set to the empty string value
$mail_status = "";

// ---- Validation ----
//Checks if the form was submitted
// define variables and set to empty values
$name_Err = $pass_Err = $pass_match_Err = "";
$username = $pass1 = $pass2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $name_Err = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $name_Err = "Only letters and white space allowed"; 
    }
  }
  



}


?>