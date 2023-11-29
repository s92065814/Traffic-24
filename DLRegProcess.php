<?php
include_once 'connection.php';
if(isset($_POST['add']))
{	 
	 $FullName = $_POST['fullname']; 
	 $address = $_POST['address'];
	 $gender = $_POST['gender'];
     $contact = $_POST['contact']; 
	 $nicnum = $_POST['nicnum'];
	 $bloodgrp = $_POST['bloodgrp'];
     $category = $_POST['category'];
	
	 

	 $sql = "INSERT INTO dlreg (fullname, address, gender, contact, nicnum, bloodgrp, category)
	 VALUES ('$FullName', '$address', '$gender', '$contact', '$nicnum', '$bloodgrp', '$category')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record Added successfully !";
        

	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);

	 }
    
	 mysqli_close($conn);
}
?>
<html>
<head>
    <title>Data Added Success </title>
</head>
<body>
<br><a href="DLReg.php" >Back to New Entry </a>
</body>
</html>