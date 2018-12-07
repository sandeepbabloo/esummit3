<?php
start_session();
error_reporting(E_ALL);
ini_set(display_errors,1);
	define(DBHOST_,'localhost')
	define(DBUSER_,'admin')
	define(DBPASS_,"adminadmin2012#")
	define(DBNAME_,"esummit_18")
 	$con=mysqli_connect(DBHOST_,DBUSER_,DBPASS_,DBNAME_);
 	if(!$con){
 		die("Connection failed: " . mysqli_connect_error());
 	}
 	
