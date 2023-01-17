<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Last Name">
      <input type="email" name="email" required placeholder="Enter Email ID">
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="password" name="cpassword" required placeholder="Confirm Password">
      <select name="user_type">
         <option value="user">Guest</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>