<?php 
    session_start(); 
 $_SESSION['userid'] = array();
    session_destroy(); 
  
    header('location: administrador.php'); 
?>