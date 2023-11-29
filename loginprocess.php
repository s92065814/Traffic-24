<?php 
session_start(); 
include "connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;

    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();

    }else{
        $sql = "SELECT * FROM tb_user WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: Services.php");

                exit();

            }else{
                echo "Incorrect Username or Password";
               // header("Location: index.php?error=Incorect User name or password");
                exit();

            }

        }else{
            echo "Incorrect Username or Password";
           //header("Location: index.php?error=Incorect User name or password");
           // exit();
        }

    }

}else{

   // header("Location: MyPlan.html");
    exit();

}
?>
<html>
<head>
    <title>OOps!! </title>
</head>
<body>
<br><a href="Registration.php" >Back to Login </a>
</body>
</html>