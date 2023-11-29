<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic24 Registration</title>
    <link rel="stylesheet" href="stylereg.css">
    <link rel="stylesheet" href="Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="full-page">
    <div  class="navbar">
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="map.php">Live Map</a></li>
                <li><a href="MyPlan.php">My Plan</a></li>
                
            </ul>
        </nav>
    </div>
    </div>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

<!--Login page-->
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form method="post" action="loginprocess.php">

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn animation" style="--i:3; --j:24;">Login</button>

                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>

            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome To Road Traffic Management System</h2>
            <p class="animation" style="--i:1; --j:21;">This system will help you to find the easy way for your travelplan</p>
        </div>


        <!--Register page -->
        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            
            <form method="post" action="process.php">
                
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name = "email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:20; --j:4;">
                    <input type="password" name="passwd" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn animation" name="register" style="--i:21; --j:5;">Sign Up</button>

                <div class="logreg-link animation" style="--i:22; --j:6;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>

            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome To Road Traffic Management System</h2>
            <p class="animation" style="--i:18; --j:1;">This system will help you to find the easy way for your travelplan</p>
        </div>
    </div>

<script src="script.js"></script>

</body>
</html>