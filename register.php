<?php

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
                    <h1><span class="text-logo">Create An Account</span></h1>
            </div>
                <div class="twelve columns">
                    <form action="register-processing.php" method="post">
                        <label>Username*</label><input type="text" name="name" required><br>
                        <label>Password*:</label><input type="password" name="password" required><br>
                    <input type="submit" value="Create Account" name="submit">
                    </form>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

    <!-- /.container -->


</body>

</html>
