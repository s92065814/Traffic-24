<?php
include("developVechi.php");
?>
<!DOCTYPE html>
<html>
<head>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

 
</head>
<style>
    table{
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
        border: 3px solid purple;
        border-spacing: 0px;
        table-layout: fixed;
        margin-left: auto;
        margin-right: auto;
        color : #fff;
    }
    th {
        color: green;
        border: 1px solid black;
        }
 
    td {
        border: 1px solid black;
        word-wrap: break-word;
    }

    th, td {
        padding: 20px;
        border: 1px solid black;
    }
    thead th {
        width: 25%;
    }
    caption {
        font-weight: bold;
        font-size: 24px;
        text-align: left;
        color: #333;
        margin-bottom: 16px;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.container {
  width: 100%;
  min-height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 120px;
  background: #27282c;
}

.button {
  position: relative;
  padding: 16px 30px;
  font-size: 1.5rem;
  color: var(--color);
  border: 2px solid rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  text-shadow: 0 0 15px var(--color);
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  transition: 0.5s;
  z-index: 1;
}

.button:hover {
  color: #fff;
  border: 2px solid rgba(0, 0, 0, 0);
  box-shadow: 0 0 0px var(--color);
}

.button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--color);
  z-index: -1;
  transform: scale(0);
  transition: 0.5s;
}

.button:hover::before {
  transform: scale(1);
  transition-delay: 0.5s;
  box-shadow: 0 0 10px var(--color),
    0 0 30px var(--color),
    0 0 60px var(--color);
}

.button span {
  position: absolute;
  background: var(--color);
  pointer-events: none;
  border-radius: 2px;
  box-shadow: 0 0 10px var(--color),
    0 0 20px var(--color),
    0 0 30px var(--color),
    0 0 50px var(--color),
    0 0 100px var(--color);
  transition: 0.5s ease-in-out;
  transition-delay: 0.25s;
}

.button:hover span {
  opacity: 0;
  transition-delay: 0s;
}

.button span:nth-child(1),
.button span:nth-child(3) {
  width: 40px;
  height: 4px;
}

.button:hover span:nth-child(1),
.button:hover span:nth-child(3) {
  transform: translateX(0);
}

.button span:nth-child(2),
.button span:nth-child(4) {
  width: 4px;
  height: 40px;
}

.button:hover span:nth-child(1),
.button:hover span:nth-child(3) {
  transform: translateY(0);
}

.button span:nth-child(1) {
  top: calc(50% - 2px);
  left: -50px;
  transform-origin: left;
}

.button:hover span:nth-child(1) {
  left: 50%;
}

.button span:nth-child(3) {
  top: calc(50% - 2px);
  right: -50px;
  transform-origin: right;
}

.button:hover span:nth-child(3) {
  right: 50%;
}

.button span:nth-child(2) {
  left: calc(50% - 2px);
  top: -50px;
  transform-origin: top;
}

.button:hover span:nth-child(2) {
  top: 50%;
}

.button span:nth-child(4) {
  left: calc(50% - 2px);
  bottom: -50px;
  transform-origin: bottom;
}

.button:hover span:nth-child(4 ) {
  bottom: 50%;
}

.navbar ul{
  list-style: none;
    display: flex;
}
.navbar ul li{
  padding: 10px 30px;
    position: relative;
}
h1{
  color:pink;
  text-align : center;
}

.button-33 {
    background-color: #c2fbd7;
    border-radius: 100px;
    box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
    color: green;
    cursor: pointer;
    display: inline-block;
    font-family: sans-serif;
    padding: 7px 20px;
    text-align: center;
    text-decoration: none;
    transition: all 250ms;
    border: 0;
    font-size: 16px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    
  }
  
  .button-33:hover {
    box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
    transform: scale(1.05) rotate(-1deg);
  }

</style>
<body>
<div class="full-page">
        <div  class="navbar">
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>                    
                    <li><a href="MyPlan.php">My Plane</a></li>
                    <li><a href="index.php">LogOut</a></li>
                </ul>
            </nav>
        </div>
        <hr>

    </div>


<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
    <h1>Record of Vehicle Registration  </h1>
      <table class="table table-bordered">
       <thead><tr>
       <th>ID</th>
        <th>Name</th>
         <th>NIC No.</th>
         <th>Address</th>
         <th>Vehicle Type</th>
         <th>Make</th>
         <th>Model</th>
         <th>Manuf Year</th>
         <th>Orgin</th>
         <th>Chassis No</th>
         <th>Engine No</th>
         <th>Colour</th>
         <th>Fuel Type</th>
         <th>No. of Tyre</th>
         <th>Engine CC</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Name']??''; ?></td>
      <td><?php echo $data['NIC']??''; ?></td>
      <td><?php echo $data['Address']??''; ?></td>
      <td><?php echo $data['VehicleType']??''; ?></td>
      <td><?php echo $data['Make']??''; ?></td>
      <td><?php echo $data['Model']??''; ?></td>
      <td><?php echo $data['ManufYear']??''; ?></td>  
      <td><?php echo $data['Orgin']??''; ?></td>
      <td><?php echo $data['ChassisNo']??''; ?></td>
      <td><?php echo $data['EngNo']??''; ?></td>
      <td><?php echo $data['Colour']??''; ?></td>
      <td><?php echo $data['Fuel']??''; ?></td>
      <td><?php echo $data['Tyre']??''; ?></td>
      <td><?php echo $data['EngCC']??''; ?></td>




     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
<a href="Report.php"><button type="submit" class="button-33" role="button" >Back</button></a>
</div>
</div>
</body>
</html>