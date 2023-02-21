<?php
//error_reporting(-1);
//ini_set('display_errors', true);
if (!isset($_SESSION))
  {
    session_start();
  }
 
  
  session_write_close();
?>
