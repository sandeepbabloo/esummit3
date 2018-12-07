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
  // $prof = $_POST['prof'];
  // if($prof == '1'){
  //   $company = strip_tags($_POST['startup']);
  //   $price = 1200;
  //   $discount = 300;

  // }
  // else{
  //   $college = strip_tags($_POST['college']);
  //   $price = 450;
  //   $discount = 150;
  // }
  // $amount = $price - $discount;
  // $city = strip_tags($_POST['city']);
  // $state = strip_tags($_POST['state']);
  // $college = strip_tags($_POST['college']);
  // echo "2o2";
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
        $count_mem = $row['count_mem'] + 1;;
        // $_SESSION['team_id'] = $team_id;
        $sql = "UPDATE `contingent_member` set name='$name',phone='$phone' where email='$email'";
        // $sql2 = "UPDATE contingent_group set count_mem = '$count_mem' where team_id='$team_id'";
        if(mysqli_query($con,$sql)){
          header("Location: cl.php");
        }
        else{
          echo mysqli_error($con);
        }

  
  // echo "done";
?>