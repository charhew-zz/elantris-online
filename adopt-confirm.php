<?php

session_start();
require_once("connect.php");

$userid = $_SESSION['userid'];
$name = $_SESSION['name'];
$sid = $_GET['sid'];


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
            
            .species-img {
                width: 100%;
            }
            
            .species-info {
                background-color: #fff;
                text-align: center;
                padding: 25px;
            }
            
            .species-info:hover {
                background-color: #eee;
            }
            
            .species-title,
            .species-info p {
                margin-bottom: 5px;
                text-decoration: none;
                color: #222;
            }
            
            form {
                margin-bottom: 0px;
            }

        </style>


    </head>

    <body>


        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="twelve columns" style="text-align:center;">
                    <?php
                        $sql = "SELECT * FROM elantris_db.tbl_pets WHERE user_id=" . $user_id . "";
                        $result = $conn->query($sql);
                    if ($result->num_rows == 0) {
                          echo "<h1>Confirm your pet!</h1>
                              <p>Is this the pet you want to choose?</p>";
                   }else{
                        echo "<h1>Nice try " . $name . "!</h1>
                              <p>You already have a pet! Keep exploring Elantris and give some other players a chace to adopt.</p>";
                    }

                    ?>


                </div>
            </div>
            <?php 
                    $sql = "SELECT * FROM elantris_db.tbl_species WHERE species_id = ". $sid ."";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                        
                                echo '<div class="row">';
                            
                            
                        $s_id = $row["species_id"];
                        $species = $row["species"];
                        $imagename = $row["imgname"];
                        $bio = $row["bio"];

                        echo '<div class="four columns species-info"><img class="species-img" src="pet/'. $imagename . '"/><h4 class="species-title">'. $species .'</h4><p>'. $bio .'</p></div>';
                            
                                echo '</div>';
                            
       
                        }
                  
                ?>
            <div class="row">
                <div class="twelve columns">
                    <form action="" method="post" enctype="post">
                        <input type="hidden" name="sid" value=< ?php echo $sid; ?>>
                        <input type="submit" value="Adopt Pet" name="submit">
                    </form>
                    <a class="button button-primary" href="adopt.php">Go Back</a>;

                </div>
            </div>

        </div>

    </body>

    </html>
