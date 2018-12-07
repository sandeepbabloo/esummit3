<?php 
session_start();
// echo "wow";
error_reporting(E_ALL);
ini_set('display_errors', 1);
  $name = strip_tags($_POST['name']);
  $pass = strip_tags($_POST['pass1']);
  // $lname = strip_tags($_POST['lname']);
  $phone = strip_tags($_POST['phone']);
  $email = strip_tags($_POST['email']);
  
  $city = strip_tags($_POST['city']);
  $state = strip_tags($_POST['state']);
  if($_POST['college'] != 'other'){
    $college = strip_tags($_POST['college']);
  }
  else{
    $college = strip_tags($_POST['college_other']);
  }
  $is_leader=1;
  $count_mem=1;
  $amount_to_pay=($count_mem)*350;


include 'db_config.php';

// insert college
if($_POST['college'] == 'other'){
  $stmt_col = $conn->prepare("INSERT INTO `allcollege_trimmed`(`name`, `city`) VALUES (?,?)");
  echo $conn->error;
  $stmt_col->bind_param("ss",$college,$city);
  $success = $stmt_col->execute();
  echo $conn->error;
}

$stmt=$conn->prepare("INSERT INTO `contingent_group`(`college`, `city`, `state`, `username`, `password`, `count_mem`,amount_to_pay) VALUES (?,?,?,?,?,?,?)");
echo $conn->error;
$stmt->bind_param("sssssii",$college,$city,$state,$email,$pass,$count_mem,$amount_to_pay);

$success1 = $stmt->execute();
echo $conn->error;

$team_id = $stmt->insert_id;

$stmt->close();

$stmt=$conn->prepare("INSERT INTO contingent_member (group_id,name,email,phone,is_leader) VALUES (?,?,?,?,?)");
echo $conn->error;
$stmt->bind_param("isssi",$team_id,$name,$email,$phone,$is_leader);
echo $conn->error;
$success2 = $stmt->execute();
$stmt->close();

if($success1 && $success2){
   $_SESSION["team_id"]= $team_id;
   header("Location: cl.php");
}



          

?>