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
$sql = "UPDATE reg_details set is_shared = '1' where id='$id' ";
$result = mysqli_query($con,$sql);
?>
