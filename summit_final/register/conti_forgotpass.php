<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

if(isset($_POST['emailid']))
{
	$emailid = $_POST['emailid'];
	$sql = "SELECT level FROM `crypt_user` WHERE email = '$emailid'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo $row['level'];
}