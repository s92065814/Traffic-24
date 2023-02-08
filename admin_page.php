<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="containerphp">
   <div class="content">
      <h3>Hi, <span><?php echo $_SESSION['admin_name'] ?></span></h3>
      <h1>welcome</h1>
      <p>You Logged in as Admin</p>      
      <a href="logout.php" class="btn">logout</a>
<div class="container-fluid">
		<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="Index.html"><img src="images/24Logo.png" width="198" height="85" alt=""/></a>
  	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  	        <ul class="navbar-nav mr-auto">
  	          <li class="nav-item active"> <a class="nav-link" href="Index.html">Home <span class="sr-only">(current)</span></a> </li>
  	          <li class="nav-item"> <a class="nav-link" href="Services.html">Services</a> </li>
  	          <li class="nav-item"> <a class="nav-link" href="LiveTraffic.html">LiveTraffic Flow</a></li>
  	          <li class="nav-item"> <a class="nav-link" href="Law.html">Law & Act</a></li>
  	          
            </ul>
  	        <form class="form-inline my-2 my-lg-0">
  	          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  	          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
</nav>
<div>
<h1 class="text-center">&nbsp;</h1>
  <h1 class="text-center">Department of Motor Traffic</h1>
    <p>&nbsp; </p>
</div>
<div class="row">
<div class="col-md-3">
    <div class="card col-md-8 offset-md-4"><a href="https://www.dmt.gov.lk/index.php?option=com_content&view=category&layout=blog&id=11&Itemid=203&lang=en" target="_blank"><img class="card-img-top" src="images/car1.jpg" alt="Card image cap" height="150"> </a>   </div>
  </div>
<div class="col-md-3">
  <div class="card col-md-8 offset-md-3"> <a href="https://www.dmt.gov.lk/index.php?option=com_content&view=category&layout=blog&id=12&Itemid=204&lang=en" target="_blank" ><img class="card-img-top" src="images/car2.jpg" alt="Card image cap" height="150"></a></div>
</div>
  <div class="col-md-3">
    <div class="card col-md-8 offset-md-2"> <a href="https://www.dmt.gov.lk/index.php?option=com_content&view=category&layout=blog&id=14&Itemid=206&lang=en" target="_blank" ><img class="card-img-top" src="images/car3.jpg" alt="Card image cap" height="150"> </a>   </div>
  </div>
		<footer>
			<br>
		<br>
		<br>
		<br>
		<br>
        <div class="row" align="center">
              <div class="col-md-2"><img src="images/24Logo.png" width="100" height="50" alt=""/></div>
              <div class="col-md-10">Copyright © 2022 Traffic 24.  Designed &amp; Developed by Traffic24 Team </div>
            </div>
          </footer>
		</div>
			</div>
	</div>
   </div>
</div>
</body>
</html>