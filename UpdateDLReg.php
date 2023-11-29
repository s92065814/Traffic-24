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
        <h1>Update or Delete Driver Licence Registration </h1>



        <form action="" method="POST" style="background-color:lightblue">
            <input type="text" name="nicnum" placeholder="Enter your NIC Number" required><br>
            <input type="submit" name="search" value="Search Data"> 
            
</form>
<a href="DLReg.php"><input type="submit" name="backPage" value="Back" 
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
    $nicnum = $_POST['nicnum'];

    $query = "SELECT * FROM dlreg WHERE nicnum = '$nicnum' ";
    $query_run = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
            <form action="" method="post">
                <input type="text" name="fullname" value="<?php echo $row['fullname']?>">
                <input type="text" name="address" value="<?php echo $row['address']?>">
                <input type="text" name="gender" value="<?php echo $row['gender']?>">
                <input type="text" name="contact" value="<?php echo $row['contact']?>">
                <input type="text" name="nicnum" value="<?php echo $row['nicnum']?>" readonly style="background-color:grey;">
                <input type="text" name="bloodgrp" value="<?php echo $row['bloodgrp']?>">
                <input type="text" name="category" value="<?php echo $row['category']?>">

              

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

    $FullName = $_POST['fullname']; 
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact']; 
    $nicnum = $_POST['nicnum'];
    $bloodgrp = $_POST['bloodgrp'];
    $category = $_POST['category'];


$sql = "UPDATE dlreg SET fullname='$FullName', address='$address', gender='$gender', contact='$contact', 
 bloodgrp='$bloodgrp', category='$category'  WHERE nicnum = '$nicnum'";

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
$sql = "DELETE FROM dlreg WHERE nicnum = '$nicnum'";

if(mysqli_query($link, $sql)){
    echo "Data Deleted Successfully!!" ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>