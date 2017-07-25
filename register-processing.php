<?php
$target_dir = "uploads/";
$origfile = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["password"];
$securepass= "";
$paypal = $_POST["paypal"];
$target_file = $target_dir . $name . '.jpg';
$imageFileType = pathinfo($origfile,PATHINFO_EXTENSION);

require_once("connect.php");


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $securepass = password_hash($pass, PASSWORD_DEFAULT);
        echo $name . $email . $pass . $securepass;
        
//        $sqlCommand = "INSERT INTO 'tbl_users' ('userID', 'username', 'email', 'paypal_email', 'password', 'image') VALUES (NULL, '" . $name . "', '" . $email ."', 'paypaltest', ". SHA1($pass) .", 'uploads/'". basename( $_FILES["fileToUpload"]["name"]). ")"; // dbname: portal - table: propery
//        $query = mysqli_query($conn, $sqlCommand);
        //$db = mysql_select_db('beatbeast_db');

        $sql = "INSERT INTO beatbeast_db.tbl_users (username, email, paypal_email, password, image) VALUES ('" . $name . "', '" . $email ."', '".$paypal."', '". $securepass ."', 'uploads/".$target_file . "')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>