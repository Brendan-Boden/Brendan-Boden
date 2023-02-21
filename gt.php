<?php
include 'session.php';
$form_token1= md5($_SERVER['HTTP_USER_AGENT']);

$_SESSION['form_token1s']=$form_token1;
/*
// insert form_token1 <input type=\"hidden\"  id='fta' name=\"form_token_a\" value="<?php echo $form_token1; ?>">
*/

// get remote ip

/*
function getUserIP1()
  	{
  		$client1  = @$_SERVER['HTTP_CLIENT_IP'];
  		$forward1 = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  		$remote1 = $_SERVER['REMOTE_ADDR'];
  	
  		if (filter_var($client1, FILTER_VALIDATE_IP))
  		{
  			$ip1 = $client1;
  		}
  		elseif (filter_var($forward1, FILTER_VALIDATE_IP))
  		{
  			$ip1 = $forward1;
  		}
  		else
  		{
  			$ip1 = $remote1;
  		}
  	
  		return $ip1;
  	}
  

$remote_ip=getUserIP1();
*/
  session_write_close();
?>
