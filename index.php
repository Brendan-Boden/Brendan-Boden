<?php
include 'config.php';
include 'menu.php';
//echo '<!doctype html>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
echo '
<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "Organization",
"name": "Brendan Boden",
"url": "https://www.brendan-boden.com",
"sameAs": [
"www.facebook.com/AclComputing/brendan.boden.7",
"https://www.instagram.com/brendan_boden74/"
],
"email": "info@brendan-boden.com",
"telephone": "+353 71 98 52222",
"address": {
"@type": "PostalAddress",
"addressLocality": "Ballyshannon",
"addressRegion": "Donegal",
"postalCode": "F94 HTW5",
"streetAddress": "The Old Barracks Main St"
}
}
</script>
';

	    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="description" content="Brendan Boden, your local Web Designer and Full Stack Software Developer. Full mobile ready Website packages from from € 199 Ex VAT. Free Hosting, Domain, professional email and SSL Cert for the first year!
Pop into my office in Ballyshannon for a free consultation.">
  <meta name="keywords" content="web design dublin,web design donegal,web design sligo,web design galway,web design belfast,web design derry,website development,mobile ready website,small business, wordpress, ecommerce,SEO">
	
	
	<title>Welcome to Brendan-Boden.com</title>
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>
<style>
#intro {
  
        height: 100vh;
      }
      </style>

  <!-- navbar -->
<?php 
menu();
?>


<!-- header -->
<header class="header mt-5">
<?php 
/*
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
            <h5 class="mb-4">Best & free guide of responsive web design</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button"
              rel="nofollow" target="_blank">Start tutorial</a>
            <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
              role="button">Download MDB UI KIT</a>
          </div>
        </div>
      </div>
    </div>
    */
    ?>
    <!-- Background image -->

  <div id="intro" class="bg-image">
    
  <div class="overlay"></div>
   <div class="container">
   	  <div class="description">
  	<h1><b>
  		Welcome. I'm Brendan Boden</b><h1>
  		
  		<p  class="mt-2">
  		<h2 style="color:#ffffff;">Full Stack Developer</h2></p> 
  		<br>
  		<a class="btn btn-outline-secondary btn-lg" href="<?php echo $http.'contact_me.php';?>">Contact Me</a>
  	
  </div>
   </div>
  </div>
  
</header>



<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>