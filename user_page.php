<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet" type="text/css">

</head>
<body>

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
</div>
</div>

   
<div class="containerphp">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>