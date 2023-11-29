<?php
//$connection = mysqli_connect("localhost", "root","");
//$db = mysqli_select_db($connection, 'rt_motors');

$link = mysqli_connect("localhost", "root", "", "rt_motors");

if(isset($_POST['delete']))
{
    $engNo = $_POST['engNo'];

    $query = "DELETE FROM vechiclereg WHERE engNo = '$engNo'";
    $query_run = mysqli_query($link, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted Successfully!!") </script>';
        //header("location:VechicleReg.php");
    }
    else
    {
        echo '<script> alert("hmmmmm Somthing went Wrong!!!") </script>';
    }

    mysqli_close($link);
}
?>