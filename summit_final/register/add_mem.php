<?php 
session_start();
// echo "wow";
error_reporting(E_ALL);
ini_set('display_errors', 1);
  $team_id = $_SESSION['team_id'];
  $name = strip_tags($_POST['name']);
  // $pass = strip_tags($_POST['pass1']);
  // $lname = strip_tags($_POST['lname']);
  $phone = strip_tags($_POST['phone']);
  $email = strip_tags($_POST['email']);
  
        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql3 = "SELECT count_mem,count_paid,ppp,amount_to_pay,is_verified from contingent_group where team_id = '$team_id'";
        $result = mysqli_query($con,$sql3);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count_mem = $row['count_mem'] + 1;
        $count_paid = $row['count_paid'];
        $ppp = $row['ppp'];
        $amount_to_pay = $row['amount_to_pay'];
        $is_verified=$row['is_verified'];
        // $_SESSION['team_id'] = $team_id;
        $sql = "INSERT INTO `contingent_member`(`group_id`, `name`, `email`, `phone`,  `is_leader`) VALUES ('$team_id','$name','$email','$phone',0)";
        if($is_verified == 0){
          $amount_to_pay = $count_mem*350;//rajat
        }
        else{
          if($count_paid == 0){
              if($count_mem<7){
                $amount_to_pay = $count_mem*350;//rajat
              }
              else if ($count_mem<20 && $count_mem >= 7) {
                $amount_to_pay = $count_mem*250;//rajat
                # code...
              }
              elseif ($count_mem>=20 && $count_mem<40) {
                # code...
                $amount_to_pay = $count_mem*200;
              }
              elseif($count_mem>=40){
                $amount_to_pay = $count_mem*150;
                
              }
          }
          else{
            $amount_to_pay = $amount_to_pay + $ppp;

          }
        }




        $sql2 = "UPDATE contingent_group set count_mem = '$count_mem',amount_to_pay='$amount_to_pay' where team_id='$team_id'";
        if(mysqli_query($con,$sql) && mysqli_query($con,$sql2)){
          header("Location: cl.php");
        }
        else{
          echo mysqli_error($con);
        }

  
  // echo "done";
?>