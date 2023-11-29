<!DOCTYPE html>
<html lang="en">
<head>
    <title>Road Traffic Management system</title>
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
    
    /*** Save Button Vehicle Reg Form ***/
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
    <br>
<br><br>
<br>
    <div class="container">
        <header>New Vechicle Registration Form</header>

        <form method="post" action="VeRegProcess.php">
            <div class="form firsrt">
                <div class="details personal">                    
                    <div class="fields">
                        <div class="input-field">
                            <label>Name :</label>
                            <input type="text" name="cname" required>
                        </div>

                        <div class="input-field">
                            <label>Vechicle Type :</label>
                            <input type="text" name="Vtype" required>                            
                        </div>

                        <div class="input-field">
                            <label>Model :</label>
                            <input type="text" name="model" required> 
                        </div>

                        <div class="input-field">
                            <label>NIC Number :</label>
                            <input type="text" name="NIC" required>
                        </div>  

                        <div class="input-field">
                            <label>Make :</label>
                            <input type="text" name="make" required>
                        </div> 


                        <div class="input-field">
                            <label>Manufacturing Year :</label>
                            <input type="text" name="myear" required>  
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" required>
                        </div>  
                        
                        <div class="input-field">
                            <label>Chassis No. :</label>
                            <input type="text" name="chassis" required>
                        </div>


                        <div class="input-field">
                            <label>Engine No. :</label>
                            <input type="text" name="engNo" required>  
                        </div>

                        <div class="input-field">
                            <label>Colour :</label>
                            <input type="text" name="color" required>
                        </div>  
                        
                        <div class="input-field">
                            <label>Fuel Type :</label>
                            <input type="text" name="fuel" required>                            
                        </div>

                        <div class="input-field">
                            <label>Number of Tyres :</label>
                            <input type="text" name="tyre" required>  
                        </div>

                        <div class="input-field">
                            <label>Engine CC</label>
                            <input type="text" name="engCC" required>
                        </div>  
                        
                        <div class="input-field">
                            <label>Orgin</label>
                            <input type="text" name="orgin" required>
                        </div>

                        
                    </div>
                </div>
            </div>
            <button type="submit" class="button-33" role="button" name="add">Save</button>             
            
            
        </form>
        <a href="Update.php"><button type="submit" class="button-33" role="button" name="update" > UPDATE</button>
        <button type="submit" class="button-33" role="button" name="delete" > DELETE</button></a>
    </div>

</body>
</html>


