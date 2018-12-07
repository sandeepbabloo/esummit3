<?php 
echo "wow";
error_reporting(E_ALL);
ini_set('display_errors', 1);
	$name = strip_tags($_POST['name']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$college = strip_tags($_POST['college']);
	$city = strip_tags($_POST['city']);
	$state = strip_tags($_POST['state']);
	echo "2o2";
        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
		 if(mysqli_query($con,"INSERT INTO reg_details (name,email,phone,college,city,state) VALUES ('$name','$email','$phone','$college','$city','$state')")){
		 	echo 'done';
		 }
		 else{
		 	echo mysqli_error($con);
		 }
	
	echo "done";
?>