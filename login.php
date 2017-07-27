<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 require_once("connect.php");

// Store Session Data
$name = $_POST["name"];
$pass = $_POST["password"];
$login_msg = 0;
$name = stripslashes($name);
$pass = stripslashes($pass);
$sql = "SELECT * FROM elantris_db.tbl_users WHERE username='" . $name . "'";
$result = $conn->query($sql);
$userid = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $securepass = $row["password"];
        $userid = $row["user_id"];
    }
} else {
    $login_msg = 2;  
}
    $auth = password_verify($pass, $securepass);

    if($auth == true){
        $_SESSION["name"] = $name;
        $_SESSION["userid"] = $userid;
        $login_msg = 1;  
    }else{
      $login_msg = 2;  
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Elantris Online - Alpha</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Custom CSS -->
    <style>
      
    </style>


</head>


<body>


    <div class="container">

        <div class="row">
            <div class="twelve columns">
                    <h1><span class="text-logo">Login</span></h1>
                </div>

            <div class="row">
                <div class="twelve columns">
                    <form action="" method="post" enctype="post">
                        <label>Username*</label><input type="text" name="name" required><br>
                        <label>Password*</label><input type="password" name="password" required><br>
                        <input type="submit" value="Login" name="submit">
                        <?php
                        if($login_msg == 1){
                            echo '<p id="login-msg">Login successful for <strong>' . $name . '</strong>, redirecting</p>';
                            echo "<script>
                                (function() {
                                   setTimeout(function(){

                                    window.location.href = 'adopt.php';

                                   },3000);
                                })();

                            </script>";
                        }
                        if($login_msg == 2){
                            echo '<p id="login-error" style="color:red">Authentication failed, please try again.</p>';
                        }

                        ?>
                    </form>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
