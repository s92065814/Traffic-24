<?php
include_once 'connection.php';
if(isset($_POST['register']))
{	 
	 $username = $_POST['uname']; //add [the name use in the form of each field]
	 $email = $_POST['email'];
	 $password = $_POST['passwd'];
	 

	 $sql = "INSERT INTO tb_user (username,email,password)
	 VALUES ('$username','$email','$password')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        

	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);

	 }
    // header("Location: Registration.php");
	 mysqli_close($conn);
}
?>
<html>
<head>
    <title>Registration Success </title>
</head>
<body>
<br><a href="Registration.php" >Back to Form </a>
</body>
</html>