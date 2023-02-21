<?php
include 'config.php';
include 'menu.php';
//echo '<!doctype html>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brendan Boden Contact Me</title>
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php 
menu();
?>
<!-- Price list -->
<div class="container mt-5">
<br><br>

<?php 
//echo $_POST['name1'].'<br>';
//echo $_POST['email1'].'<br>';
//echo $_POST['message1'].'<br>';


  // enable check if from our server
  
  $ref = $_SERVER['HTTP_REFERER'];
  $site=$http;
  $site.='contact_me.php';
  // check its from our contact_us page
  
  if($ref !== $site)

  {
 die("Access Denied!- You appear to be trying to post from an unauthorized server");
  }
  //echo $ref;
  
  
  
  // use salt ??
  
  // sanitize data input
  
  function check_input($data)
  {
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
  }
  
  $name      =    check_input($_POST['name1']);
  $email    =    check_input($_POST['email1']);
  $message =    check_input($_POST['message1']);
  
  if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {
  echo "Attempted Email injection detected";
  } else {
 if ($name && $email && $message) {
  //	Send contact form...
  	// multiple recipients
  	$to  = 'info@brendan-boden.com';
  
  	
  	// subject
  	$subject = 'Brendan Boden Contact Us Form';
  
  	// message
  	$bottle = '
<html>
<head>
  <title>Brendan Boden Contact Us Form</title>
</head>
<body>
  <p><b>Brendan Boden Contact Us Form</b></p>
  <table>
  <tr><td><b>Name: </b></td><td><b>';
  	
  $bottle.=$name;
  
  $bottle.='
  </b></td></tr>
  <tr><td><b>Email: </b></td><td><b>';
  		
  		$bottle.=$email;
  		
  		$bottle.='</b></td></tr>
  <tr><td><b>Message: </b></td><td><b>';
  		
  		$bottle.=$message;
  		
  		$bottle.='</b></td></tr>
  </table>
</body>
</html>
';
  	
  	// To send HTML mail, the Content-type header must be set
  	$headers  = 'MIME-Version: 1.0' . "\r\n";
  	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  	
  	// Additional headers
  	/*
  	 $string= 'echo | ';
  	 $string.=$name;
  	 $string.=',';
  	 $string.=$email;
  	 $string.=',';
  	 $string.=$telephone;
  	 $string.=',';
  	 $string.=$enquiry;
  	 $string.=',';
  	 $string.=$message;
  	 $string.="sendmail -f support@acl247.com";
  	  
  	 echo exec ($string);
  	 */
  	// Mail it

  	if(mail($to, $subject, $bottle, $headers,"-r "."info@brendan-boden.com")){
  	
  	echo '<br><br><div class="jumbotron"><h2>Thank you';
  	echo ", ";
  	echo $name."<br><br> Your message has been sent.</h2><br><br></div>";
  	//echo "<br>".$bottle;
  	} else {
  	echo "<br><br><div class=\"jumbotron\"><h2>Error sending email</h2><br><br></div>";	
print_r(error_get_last());
//echo $MAIL;
  //echo $to.'-'.$subject.'-'.$headers;
//echo $bottle;	
}
  }
  }
  ?>
 </div>

    

<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>