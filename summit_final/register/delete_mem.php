<?php 
session_start();
// echo "wow";
error_reporting(E_ALL);
ini_set('display_errors', 1);

  $team_id = $_SESSION['team_id'];
  $id = strip_tags($_POST['id']);

        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql3 = "SELECT count_mem from contingent_group where team_id = '$team_id'";
        $result = mysqli_query($con,$sql3);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count_mem = $row['count_mem'] - 1;;
        // $_SESSION['team_id'] = $team_id;
        $sql = "DELETE FROM `contingent_member` where id='$id'";
        if($count_mem < 7){
            $amount = $count_mem*350;
        }
        elseif ($count_mem<20) {
            $amount = $count_mem*250;
            # code...
        }
        elseif ($count_mem<40) {
            $amount = $count_mem*200;
            # code...
        }
        else{
            $amount = $count_mem*150;
        }
        $sql2 = "UPDATE contingent_group set count_mem = '$count_mem',amount_to_pay='$amount' where team_id='$team_id'";
        if(mysqli_query($con,$sql) && mysqli_query($con,$sql2)){
          header("Location: cl.php");
        }
        else{
          echo mysqli_error($con);
        }

  
  // echo "done";
?>