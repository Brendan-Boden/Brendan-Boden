<?php
include 'config.php';
function menu(){
    echo '
<!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="#">&nbsp;&nbsp;Brendan</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">
	        <li class="nav-item">
	        <a class="nav-link" data-value="Home" href="';
echo $http.'index.php';
echo '">Home</a>
	      </li>';
echo '	      <li class="nav-item">
	        <a class="nav-link" data-value="about" href="';
echo $http.'about_me.php';
echo '">About</a>
	      </li>';
	echo '	      <li class="nav-item">
	        <a class="nav-link" data-value="about" href="';
echo $http.'prices.php';
echo '">Prices</a>
	      </li>    
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact" href="';
echo $http.'contact_me.php';
echo '">Contact</a>
	      </li>
	    </ul>
	    
	  </div>
</nav>';
}
?>

