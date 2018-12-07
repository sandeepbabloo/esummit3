<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define( 'DBHOST_', 'localhost' );
define( 'DBUSER_', 'admin' );
define( 'DBPASS_', 'adminadmin2012#' );
define( 'DBNAME_', 'esummit_18' ); 
$response = array();
$response['leader'] = 0;
$response['html'] = '';
// $i = 0;
$con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$college = $_POST["college"];
$sql = "SELECT name,email,phone FROM `contingent_group` as a,contingent_member as b  WHERE a.`team_id` = b.group_id and a.college = '$college' and a.is_verified = 1 and b.is_leader = 1";
// SELECT * FROM contingent_group where college = '$college' and is_verifies=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$leader_name = $row["name"];
$leader_email = $row["email"];
$leader_phone = $row["phone"];
if($leader_name != ''){
	$response['leader'] = 1;
}
$response['html'] = "<h2>Leader info</h2>".$leader_name."<br>".$leader_email."<br>".$leader_phone."<br>".$college;
echo json_encode($response);
?>
