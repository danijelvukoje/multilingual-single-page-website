<?php
  session_start();
  
  if (isset($_GET['lang'])) {
     
    // GET request found
 
    if ($_GET['lang'] == 'gb') {
       
      // asked for the language 'gb' so include the 'gb.php' file
      include ("gb.php");
      $_SESSION['lang'] = 'gb';
    } else {
 
      // if not asked for 'gb', include 'hr.php' as default
      include ("hr.php");
      $_SESSION['lang'] = 'hr';
    }
  } else if (isset($_SESSION['lang'])) {
 
    //SESSION variable found
 
    if ($_SESSION['lang'] == 'gb') {
 
      // language already set to 'gb', so include 'gb.php'
      include ("gb.php");
    } else {
 
      // SESSION variable not set to 'gb', so include 'hr.php' by default
      include ("hr.php");
    }
  } else {
     
    // SESSION varibale not set, so set it to 'hr' and include 'hr.php' by default
    include ("hr.php");
    $_SESSION['lang'] = 'hr';
  }
?>