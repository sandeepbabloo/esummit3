<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$team_id = $_SESSION['team_id'];

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "<script>alert('Sorry, your file is too large.');window.location.href='https://www.ecell.in/esummit/register/cl.php';</script>";
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only pdf files are allowed.');window.location.href='https://www.ecell.in/esummit/register/cl.php';</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, there was an error uploading your file.');window.location.href='https://www.ecell.in/esummit/register/cl.php';</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file."_".$team_id)) {

        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 
        $doc_url = "https://www.ecell.in/esummit/register/uploads/".basename( $_FILES["fileToUpload"]["name"]."_".$team_id);
        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE `contingent_group` SET doc_url = '$doc_url' where team_id='$team_id'";
        if(mysqli_query($con,$sql)){
        	        echo "<script>alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.');window.location.href='https://www.ecell.in/esummit/register/cl.php';</script>";
          // header("Location: cl.php");
        }
        else{
          echo mysqli_error($con);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>