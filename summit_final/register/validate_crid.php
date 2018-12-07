<?php 
        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
     
$id = $_POST['insert_id'];
$crid = $_POST['crid'];

$conn = mysqli_connect("localhost","admin","adminadmin2012#","cr_2017");
$stmt=$conn->prepare("SELECT extra from profile where cr_id=?");
echo $conn->error;
$stmt->bind_param("s",$crid);
echo $conn->error;
$stmt->execute();
$stmt->bind_result($extra);
if($stmt->fetch()){
	$sql = "UPDATE reg_details set cr_referral_id = '$crid' where id='$id' ";
	$result = mysqli_query($con,$sql);
	$extra=$extra+20;
	

	echo "success";
}else{
	echo "failur".$crid.$insert_id;
}

$stmt->close();



?>
