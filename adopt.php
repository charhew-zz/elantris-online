<?php

session_start();
require_once("connect.php");
if (!isset($_SESSION['userid'])){
    $loggedin = false;
}

$userid = $_SESSION['userid'];
$name = $_SESSION['name'];
//if(isset($sid)) {unset($sid);}
$sid = isset($_GET['sid']) ? $_GET['sid'] : '';


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
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .species-img{
            width: 100%;
        }
        
        .species-img-confirm{
            width: 25%;
        }
        
        .species-info{
            background-color: #fff;
            text-align: center;
            padding: 25px;
        }
        
        .species-info:hover{
            background-color: #eee;
        }
        
        .species-title, .species-info p{
            margin-bottom: 5px;
            text-decoration: none;
            color: #222;
        }
        
        form{
            margin-bottom: 0px;
            text-align: center;
        }
        
    </style>


</head>

<body>

       
    <!-- Page Content -->
   <div class="container" style="text-align:center;">
            <div class="row">
                <div class="twelve columns">
                    <?php
                        $sql = "SELECT * FROM elantris_db.tbl_pets WHERE user_id=" . $user_id . "";
                        $result = $conn->query($sql);
                    if ($result->num_rows == 0) {
                        if($sid == ''){
                          echo "<h1>Adopt a pet!</h1>
                              <p>All users are currently limited to <strong>one</strong> pet.</p>";
                        }else{
                            echo "<h1>Confirm your pet!</h1>
                              <p>Is this the pet you want to choose?</p>";
                        }
                   }else{
                        echo "<h1>Nice try " . $name . "!</h1>
                              <p>You already have a pet! Keep exploring Elantris and give some other players a chace to adopt.</p>";
                    }

                    ?>
                    

                </div>
            </div>
                <?php 
//                    if($loggedin == false){
//                        echo '<h2>You need to login to adopt a pet!</h2>'
//                    }else
                        if($sid == ''){
                    $i=1;
                    $sql = "SELECT * FROM elantris_db.tbl_species";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                        
                            if($i == 1){
                                echo '<div class="row">';
                            }
                            
                        $s_id = $row["species_id"];
                        $species = $row["species"];
                        $imagename = $row["imgname"];
                        $bio = $row["bio"];

                        echo '<a href="adopt.php?sid='. $s_id . '"><div class="four columns species-info"><img class="species-img" src="pet/'. $imagename . '"/><h4 class="species-title">'. $species .'</h4><p>'. $bio .'</p></div></a>';
                            
                            if($i == 3){
                                echo '</div>';
                            }
       
                            if($i == 3){
                                $i=1;
                            }else{
                                $i++;
                            }
                        
                        }
                    }else{
                         $sql = "SELECT * FROM elantris_db.tbl_species WHERE species_id = ". $sid ."";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                        
                        echo '<div class="row">';
                            
                        $s_id = $row["species_id"];
                        $species = $row["species"];
                        $imagename = $row["imgname"];
                        $bio = $row["bio"];

                        echo '<img class="species-img-confirm" src="pet/'. $imagename . '"/><h4 class="species-title">'. $species .'</h4><p>'. $bio .'</p></div>';
                            
                            
       
                        }
                  echo '<div class="row">
                <div class="twelve columns">
                 <form action="" method="post" enctype="post">
                <input type="hidden" name="sid" value='. $sid .'>
                <label>Name of pet</label><input type="text" name="petname" required><br>
                <input type="submit" value="Adopt Pet" name="submit">
                </form>
                <a class="button button-primary" href="adopt.php">Go Back</a>';
                    }
                  
                ?>
    </div>

</body>

</html>