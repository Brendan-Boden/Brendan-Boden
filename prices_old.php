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
$site.='prices.php';
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

<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

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