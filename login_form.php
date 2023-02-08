<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

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





   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter Email Id">
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>