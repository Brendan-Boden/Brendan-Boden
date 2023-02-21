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
//echo $_POST['web_package'];
//echo $_POST['package_price'];

// enable check if from our server

$ref = $_SERVER['HTTP_REFERER'];
$site=$http;
$site.='prices1.php';
// check its from our contact_us page

if($ref !== $site)

{
 //   die("Access Denied!- You appear to be trying to post from an unauthorized server");
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

$web_pa      =    check_input($_POST['web_package']);
$pa_price    =    check_input($_POST['package_price']);

if ($web_pa && $pa_price) {
    
echo "<div class=\"container mt-5\">";

echo '<br><br>
<h1 class="text-center" style="color:#f97300;">';

echo $web_pa.' package for €'.$pa_price.' Ex VAT selected' ;

echo '</h1>';
?>

<div id="smar
  </script>
 <form action="<?php echo $paypal_url;?>" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="<?php echo $paypal_email;?>">

  <input type="hidden" name="item_name" value="<?php echo $prod_name2_b; ?>">
  <input type="hidden" name="amount" value="<?php echo $amount2_b; ?>">
  <input type="hidden" name="currency_code" value="EUR">

  <input type="hidden" name="first_name" value="<?php echo $fn1_b; ?>">
  <input type="hidden" name="last_name" value="<?php echo $ln1_b; ?>">
  <input type="hidden" name="address1" value="<?php echo $ad1_b; ?>">
  <input type="hidden" name="address2" value="<?php echo $ad2_b; ?>">
  <input type="hidden" name="city" value="<?php echo $ad3_b; ?>">
  <input type="hidden" name="state" value="<?php echo $ad4_b; ?>">
  <input type="hidden" name="night_phone_a" value="<?php echo $Tel1_b; ?>">

  <input type="hidden" name="email" value="<?php echo $Email1_b; ?>">
    <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

<?php 
/*
echo '

<div class="card mt-5">
<div class="card-header  text-white" style="background-color:#f97300;text-decoration:none;"> <b>Credit Card Payment
</div>
<div class="card-body">
<form method="post" action="';

echo $http."paypal.php"; 

echo '">

<label for="name"><h2 style="color:#10828C;">Name:</h2></label>
<div class="form-group mt-2">
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control" id="fn1" name="fn1" aria-describedby="First Name" placeholder="First name" required>
</div>
<div class="col-md-6">
<input type="text" class="form-control" id="ln11" name="ln1" aria-describedby="Last Name" placeholder="Last name" required>
</div>
</div>
</div>

<div class="form-group mt-2">
<label for="email"><h2 style="color:#10828C;">Card number:</h2></label>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control" id="cn1" name="cn1" aria-describedby="Card number" placeholder="Card number" required>
</div>
<div class="col-md-2">
<img src="';

echo $http.'card.png';

echo '" class="img-fluid rounded float-left"  alt="credit card paypal logos">

</div>
</div>
</div>



<div class="form-group mt-2">
<label for="email"><h2 style="color:#10828C;">Expiration Date:</h2></label>
<div class="row">
<div class="col-md-1">
<input type="number" class="form-control" id="ed1" name="ed1" aria-describedby="Expiration date month" placeholder="MM" required>
</div>
<div class="col-md-1">
<input type="number" class="form-control" id="ed2" name="ed2" aria-describedby="Expiration date year" placeholder="YY" required>
</div>
</div>


<div class="form-group mt-2">

<h2 style="color:#10828C;">Security code CVV: </h2>
<div class="col-md-1">
<input type="text" class="form-control" id="cvv1" name="cvv1" aria-describedby="Card CVV" placeholder="Card CVV" required>
</div>

</div>


<div class="mx-auto mt-2">
<input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Pay Now"> </div>
</form>
</div>
</div>

';

echo "</div>";
    
    
} else {
    
echo "<b>Error detected</b>";    
}
*/
?>

 </div>

    
<p><br><br></p>
<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>