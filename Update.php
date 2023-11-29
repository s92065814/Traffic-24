<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Styles.css">
</head>
<style>
    body{
        background-color: whitesmoke;
    }
    input{
        width: 260px;
        height:30px;
        border:1px;
        border-radius:05px;
        padding:8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;
    }
    </style>
<body>
<div class="full-page">
        <div  class="navbar">
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="MyPlan.php">My Plane</a></li>
                    <li><a href="Registration.php">LogOut</a></li>
                </ul>
            </nav>
        </div>
        <hr>

    
    <center>
        <h1>Update or Delete Vechile Registration </h1>



        <form action="" method="POST" style="background-color:lightblue">
            <input type="text" name="engNo" placeholder="Enter Engine Number" required><br>
            <input type="submit" name="search" value="Search Data"> 
            
</form>
<a href="VechicleReg.php"><input type="submit" name="backPage" value="Back" 
style="
background: linear-gradient(
    50deg,
    rgba(255, 255, 255, 0.4) 12%,
    rgba(255, 255, 255, 0.1) 77%
  );
  background-blend-mode: ;
  box-shadow: 0px 4px 24px 1px rgba(0, 0, 0, 0.28);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);"></a>



<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'rt_motors');

if(isset($_POST['search']))
{
    $engNo = $_POST['engNo'];

    $query = "SELECT * FROM vechiclereg WHERE engNo = '$engNo' ";
    $query_run = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
            <form action="" method="post">
                <input type="text" name="cname" value="<?php echo $row['Name']?>">
                <input type="text" name="Vtype" value="<?php echo $row['VehicleType']?>">
                <input type="text" name="model" value="<?php echo $row['Model']?>">
                <input type="text" name="NIC" value="<?php echo $row['NIC']?>">
                <input type="text" name="make" value="<?php echo $row['Make']?>">
                <input type="text" name="myear" value="<?php echo $row['ManufYear']?>">
                <input type="text" name="address" value="<?php echo $row['Address']?>">
                <input type="text" name="chassis" value="<?php echo $row['ChassisNo']?>">
                <input type="text" name="engNo" value="<?php echo $row['EngNo']?>" readonly style="background-color:grey;">
                <input type="text" name="color" value="<?php echo $row['Colour']?>">
                <input type="text" name="fuel" value="<?php echo $row['Fuel']?>">
                <input type="text" name="tyre" value="<?php echo $row['Tyre']?>">
                <input type="text" name="engCC" value="<?php echo $row['EngCC']?>">
                <input type="text" name="orgin" value="<?php echo $row['Orgin']?>">

                <br>
                <input type="submit" name="update" value="Update Data" style="background-color:skyblue;">
                
            </form>
            <form action="" method="POST">
            <input type="submit" name="delete" value="Delete Record" style="background-color:red;">
            </form>
        <?php
    }
}

?>
</center>
</div>
</body>

</html>

<?php

$link = mysqli_connect("localhost", "root", "", "rt_motors");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['update']))
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
    $Colour = $_POST['color'];
    $Fuel = $_POST['fuel'];
    $Tyre = $_POST['tyre'];
    $EngCC = $_POST['engCC'];
    $EngNo = $_POST['engNo'];

$sql = "UPDATE vechiclereg SET Name='$Name', NIC='$NIC', Address='$Address', VehicleType='$VehicleType', 
Make='$Make', Model='$Model', ManufYear='$ManufYear', Orgin='$Orgin', ChassisNo='$ChassisNo', Colour='$Colour', 
Fuel='$Fuel', Tyre='$Tyre', EngCC='$EngCC'  WHERE EngNo='$EngNo'";

if(mysqli_query($link, $sql)){
    echo '<script> alert("Data Updated Successfully!!") </script>';
} else {
    
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
}
?>



<?php

$link = mysqli_connect("localhost", "root", "", "rt_motors");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM vechiclereg WHERE engNo = '$engNo'";

if(mysqli_query($link, $sql)){
    echo "Data Deleted Successfully!!" ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>