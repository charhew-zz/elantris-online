<?php
session_start();
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
        
    </style>


</head>

<body>

       
    <!-- Page Content -->
   <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <h1>Elantris Online - Adopt</h1>
                </div>
            </div>
                <?php 
                    require_once("connect.php");
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
                  
                ?>
    </div>

</body>

</html>
