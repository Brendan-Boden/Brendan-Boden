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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


</head>
<body>
<?php 
menu();
?>
<!-- Contact form -->
<div class="container mt-5">
<br><br>
 <h1 class="text-center" style="color:#f97300;">Get in touch</h1>
        
            <div class="card mt-5">
                <div class="card-header  text-white" style="background-color:#f97300;text-decoration:none;"><i class="fa fa-envelope"></i> <b>Contact me
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo $http.'contact_me1.php'; ?>">
                        <div class="form-group mt-2">
                            <label for="name"><h2 style="color:#10828C;">Name:</h2></label>
                            <input type="text" class="form-control" id="name1" name="name1" aria-describedby="emailHelp" placeholder="Please enter your name" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email"><h2 style="color:#10828C;">Email address:</h2></label>
                            <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp" placeholder="Please enter your email" required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mt-2">
                            <label for="message"><h2 style="color:#10828C;">Message:</h2></label>
                            <textarea class="form-control" id="message1" name="message1" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto mt-2">
                        <input type="submit" class="btn btn-outline-secondary btn-lg mt-3" href="Send"> </div>
                    </form>
                </div>
            </div>
            
 <div class="row">       
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3 mt-5">
                <div class="card-header text-white" style="background-color:#f97300;"><i class="fa fa-home"></i> Address</div>
                <div class="card-body" style="color:#10828C;">
                    <p>The Old Barracks</p>
                    <p>Main St</p>
                    <p>Ballyshannon</p>
                    <p>Co. Donegal</p>
              <p>H94 FTW5</p>

                </div>

            </div>
        </div>
    
    

    <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3 mt-5">
                <div class="card-header text-white" style="background-color:#F97300;">Other ways to contact me</div>
                <div class="card-body" style="color:#10828C;">
                    <p>I'm available Mon-Fri 10am to 4pm GMT</p>
                          <p><a href="mailto:brendan@acl247.com" style="color:#10828C;text-decoration:none;"><i class="fa fa-envelope"></i> &nbsp;&nbsp;&nbsp;brendan@acl247.com</a></p>
                    <p><a href="tel:+353719852222" style="color:#10828C;text-decoration:none;"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp; +353 71 98 52222</a></p>
<p><a href="" style="color:#10828C;text-decoration:none;"><i class="fab fa-facebook-f"></i>&nbsp;&nbsp;&nbsp;Get in touch via Facebook</a></p>
<p><a href="sms:+353838282155&body=Please%20contact%20me." style="color:#10828C;text-decoration:none;" >Send me an SMS text</a></p>


                </div>

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