<?php 
session_start();
// echo "wow";

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
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	// echo $username;
	// echo $pass;
	$sql = "SELECT count(*) as counter FROM `contingent_group` WHERE username = '$username' and password = '$pass'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo $row['counter'];
	if($row['counter']>0){
		$sql2 = "SELECT team_id FROM `contingent_group` WHERE username = '$username' and password = '$pass'";
		$result2 = mysqli_query($con,$sql2);
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
		$team_id = $row2['team_id'];
		$_SESSION['team_id'] = $team_id;
		header('Location: cl.php');
	}
	else{
		echo "Wrong Email / Password";
		header('Location: contingent_login.php');
	}
}