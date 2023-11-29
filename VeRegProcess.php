<?php
include_once 'connection.php';
if(isset($_POST['add']))
{	 
	 $Name = $_POST['cname']; 
	 $NIC = $_POST['NIC'];
	 $Address = $_POST['address'];
     $VehicleType = $_POST['Vtype']; 
	 $Make = $_POST['make'];
	 $Model = $_POST['model'];
     $ManufYear = $_POST['myear'];
	 $Orgin = $_POST['orgin'];
	 $ChassisNo = $_POST['chassis'];
     $EngNo = $_POST['engNo']; 
	 $Colour = $_POST['color'];
	 $Fuel = $_POST['fuel'];
     $Tyre = $_POST['tyre'];
     $EngCC = $_POST['engCC'];
	 

	 $sql = "INSERT INTO vechiclereg (Name, NIC, Address, VehicleType, Make, Model, ManufYear, Orgin, ChassisNo, EngNo, Colour, Fuel, Tyre, EngCC)
	 VALUES ('$Name', '$NIC', '$Address', '$VehicleType', '$Make', '$Model', '$ManufYear', '$Orgin', '$ChassisNo', '$EngNo', '$Colour', '$Fuel', '$Tyre', '$EngCC')";

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
<br><a href="VechicleReg.php" >Back to New Entry </a>
</body>
</html>