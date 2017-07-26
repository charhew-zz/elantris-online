<?php

$name = $_POST["name"];
$pass = $_POST["password"];
$securepass = password_hash($pass, PASSWORD_DEFAULT);

require_once("connect.php");


        $sql = "INSERT INTO elantris_db.tbl_users (username, password) VALUES ('" . $name . "', '" . $securepass . "')";

        if ($conn->query($sql) === TRUE) {
            echo "<h3>You have successfully registered! Redirecting</h3><br><p>Please click <a href='login.php'>here</a> if this page does not redirect.";
            echo "<script>
                (function() {
                   setTimeout(function(){

                    window.location.href = 'login.php';

                   },3000);
                })();

            </script>";
        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<h3 style='color: #f00;'>Error, your account has not been created</h3><br><p>Either we made a mistake, or your username is already taken. Please <a href='register.php'>try again</a> if this page does not redirect.";
            echo "<script>
                (function() {
                   setTimeout(function(){

                    window.location.href = 'register.php';

                   },3000);
                })();

            </script>";
        }


?>

 
