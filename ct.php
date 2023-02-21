<?php
include 'session.php';
// check token session id matches form submitted _POST

// SANITIZE INPUT - RENAME FUNCTION
  function check_input1($data1)
  {
  	$data1 = trim($data1);
  	$data1 = stripslashes($data1);
  	$data1 = htmlspecialchars($data1);
  	return $data1;
  }
  
  $token_from_form     =    check_input1($_POST['form_token_a']);

$token_from_session = $_SESSION['form_token1s'];
session_write_close();
if ( $token_from_form == $token_from_session) {
// OK

} else {
echo 'form'.$token_from_form.'session:'.$token_from_session;

die ("Form credentials incorrect! ");
}

  
?>
