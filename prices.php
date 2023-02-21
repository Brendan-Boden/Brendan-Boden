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
<div class="album py-5 mt-5">
<div class="container">

 
 <div class="row">
 <div class="col-md-4">
  <div class="card mb-4 box-shadow text-center" >
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">Wordpress 5</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>Up to 5 pages in Wordpress</li>
              <li>Web Hosting, Email server and DNS</li>
              <li>Basic SEO</li>
              <li> Facebook and Google integration</li>
              <li>Domain Name for 1 year</li>
              <li>SSL Cert for 1 year</li>
              <li>1 professional email account</li>
              <li>Up to 2 stock images</li>
              <li>Contact us page</li>
              <li>Daily monitoring, Backup & IDS check</li>
            </ul>
            <h2>€ 199 Ex VAT</h2>
            <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="Wordpress 5" />
           <input type="hidden" id="package_price" name="package_price" value="199" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
        </div>
 </div>
 
  <div class="col-md-4">
   <div class="card mb-4 box-shadow text-center" >
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">Wordpress 10</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>Up to 10 pages in Wordpress</li>
              <li>Web Hosting, Email server and DNS</li>
              <li>Basic SEO</li>
              <li> Facebook and Google integration</li>
              <li>Domain Name for 1 year</li> 
              <li>SSL Cert for 1 year</li>
              <li>3 professional email accounts</li>
              <li>Up to 2 stock images</li>
              <li>Contact us page</li>
              <li>Daily monitoring, Backup & IDS check</li>
            </ul>
            <h2>€ 499 Ex VAT</h2>
            <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="Wordpress 10" />
           <input type="hidden" id="package_price" name="package_price" value="499" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
        </div>
 </div>
  <div class="col-md-4">
   <div class="card mb-4 box-shadow text-center" >
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">eCommerce 10</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 Custom pages with Bootstrap & PHP</li>
              <li>eCommerce - up to 25 products</li>
              <li>Accept Online payments </li>
              <li>Basic SEO, Facebook and Google integration</li>
              <li>Domain Name & SSL Cert for 1 year</li>
              <li>5 professional email accounts</li>
              <li>Up to 10 stock images</li>
              <li>Contact us and Call back</li>
              <li>Daily monitoring, Backup & IDS check</li>
              <li>€ 299 deposit, remainder within 30 days</li>
            </ul>
            <h2>€ 999 Ex VAT</h2>
            <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="eCommerce 10" />
           <input type="hidden" id="package_price" name="package_price" value="999" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
        </div>
 </div>
 
</div>    
  <div class="row">
 
  <div class="col-md-4">
 <div class="card mb-4 box-shadow text-center" >
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">eCommerce 150</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 Custom pages with Bootstrap & PHP</li>
              <li>Up to 150 products</li>
              <li>Multiple Online payment options </li>
              <li>14 Days advanced SEO</li>
              <li> Facebook and Google integration</li>
              <li>10 Pages content writing</li>
              <li>Easy to use blog</li>
              <li>Youtube, Instagram integration<li>
              <li>Domain Name & SSL Cert for 1 year</li>
              <li>14 professional email accounts</li>
              <li>Up to 15 stock images</li>
              <li>Contact us page</li>
              <li>Call back system</li>
              <li>Hourly monitoring, Backup & IDS check</li>
              <li>€ 299 deposit, remainder within 60 days</li>
            </ul>
            <h2>€ 2,999 Ex VAT</h2>
            <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="eCommerce 150" />
           <input type="hidden" id="package_price" name="package_price" value="2999" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
        </div>
</div> 
 
  <div class="col-md-4">
 <div class="card mb-4 box-shadow text-center" >
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">eCommerce Unlimited</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>25 Custom pages with Bootstrap & PHP</li>
              <li>Unlimited products - you are in control</li>
              <li>Multiple Online payment options </li>
              <li>30 Days advanced SEO</li>
              <li> Facebook and Google integration</li>
              <li>15 Pages content writing</li>
              <li>Easy to use blog</li>
              <li>Youtube, Instagram integration<li>
              <li>Domain Name & SSL Cert for 1 year</li>
              <li>25 professional email accounts</li>
              <li>Up to 30 stock images</li>
              <li>Contact us page</li>
              <li>Call back & Live chat</li>
              <li>Hourly monitoring, Backup & IDS check</li>
              <li>€ 499 deposit, remainder within 60 days</li>
            </ul>
            <h2>€ 4,999 Ex VAT</h2>
        <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="eCommerce Unlimited" />
           <input type="hidden" id="package_price" name="package_price" value="4999" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
        </div>
 </div>
 
  <div class="col-md-4">
  <div class="card mb-4 box-shadow text-center">
          <div class="card-header" style="background-color:#f97300;">
            <h4 class="my-0 font-weight-normal text-white">eCommerce Unlimited XL</h4>
          </div>
          <div class="card-body">
          
            <ul class="list-unstyled mt-3 mb-4">
              <li>50 Custom pages with Bootstrap & PHP</li>
              <li>Unlimited products - you are in control</li>
              <li>Automate Quotations, Sales and Returns</li>
              <li>Multiple Online payment options </li>
              <li>60 Days advanced SEO</li>
              <li> Facebook and Google integration</li>
              <li>25 Pages content writing</li>
              <li>Easy to use blog</li>
              <li>Youtube, Instagram integration<li>
              <li>Domain Name & SSL Cert for 1 year</li>
              <li>5 professional email accounts</li>
              <li>Up to 30 stock images</li>
              <li>Contact us, Call back & Live chat</li>
              <li>Hourly monitoring, Backup & IDS check</li>
              <li>€ 899 deposit, remainder within 60 days</li>
            </ul>
            <h2>€ 9,999 Ex VAT</h2>
            <form method="post" action="<?php echo $http.'prices1.php'; ?>">
             <input type="hidden" id="web_package" name="web_package" value="eCommerce Unlimited XL" />
           <input type="hidden" id="package_price" name="package_price" value="9999" />
             
            <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" value="Buy Now" />
            </form>
          </div>
 
 </div>
 </div>

    </div> 

<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>