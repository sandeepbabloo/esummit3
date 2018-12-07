<?php 
// echo "wow";
session_start();
error_reporting(E_ALL);

ini_set('display_errors', '1');
include 'db_config.php';

 define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 
        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // var_dump($_POST["name"]);
        // var_dump($_POST["email"]);
        // var_dump($_POST["phone"]);
        // echo $_POST["name"][0];
        $str_name="";
        $str_email="";
        $str_phone="";
        $state="";
        $city="";
        $insert_id=-1;

        if(isset($_POST['type'])){
          $type = $_POST['type'];
          if($type == "prof"){


            $ticket = "Professional";
            $quantity = $_POST['quantity'];
            $email = $_POST['email'][0];
            $phone = $_POST['phone'][0];
            $price = 1300;                      //rajat change to 1300
            $total = $price*$quantity;
            $discount = 300*$quantity;        //rajat change to discount
            $amount = $total - $discount;
            if(isset($_POST["isEntre"])){
              $isEntre = $_POST["isEntre"];
            }
            else{
              $isEntre = '';
            }
            $coupon = "EarlyBird";
            $tax = 0.02*$amount;
            $is_prof=1;
            $src = $_POST["src"];
            $str_name=$_POST["name"][0];
            $str_email=$_POST["email"][0];
            $str_phone=$_POST["phone"][0];


            //adding to db
            $stmt=$conn->prepare("insert into reg_details (name, email, phone, startup, designation,count,is_prof,src,isEntre ) values (?,?,?,?,?,?,?,?,?)");
            echo $conn->error;
            $stmt->bind_param("sssssiiss",$_POST["name"][0],$_POST["email"][0],$_POST["phone"][0],$_POST["startup"],$_POST["designation"],$quantity,$is_prof,$src,$isEntre);
            $stmt->execute();
            echo $conn->error;
            $insert_id= $stmt->insert_id;
            $stmt->close();
            for($i=1;$i<$quantity;$i++){
              $stmt=$conn->prepare("insert into reg_details (name,email,phone,reference_id) values (?,?,?,?)");
              echo $conn->error;
              $stmt->bind_param("sssi",$_POST["name"][$i],$_POST["email"][$i],$_POST["phone"][$i],$insert_id);
              $stmt->execute();
              echo $conn->error;
              $stmt->close();
            }

          }
          elseif ($type=="stud") {
            $ticket = "Student Individual";
            $quantity = $_POST['quantity'];
            $email = $_POST['email'][0];
            $phone = $_POST['phone'][0];
            $price = 1;  //rajay
            $total = $price*$quantity;
            $discount = 0*$quantity; //rajat
            $amount = $total - $discount;
            $coupon = "";
            $src = $_POST["src"];
            $is_prof=0;
            if(isset($_POST["isEntre"])){
              $isEntre = $_POST["isEntre"];
            }
            else{
              $isEntre = '';
            }
            $str_name=$_POST["name"][0];
            $str_email=$_POST["email"][0];
            $str_phone=$_POST["phone"][0];
            $state = $_POST["state"];
            $city = $_POST["city"];
           
            $tax = 0.02*$amount;
            //adding to db
            $stmt=$conn->prepare("insert into reg_details (name, email, phone, state, city, college,count,is_prof,src,isEntre ) values (?,?,?,?,?,?,?,?,?,?)");
            echo $conn->error;
            $stmt->bind_param("ssssssiiss",$_POST["name"][0],$_POST["email"][0],$_POST["phone"][0],$_POST["state"],$_POST["city"],$_POST["college"],$quantity,$is_prof,$src,$isEntre);
            $stmt->execute();
            echo $conn->error;
            $insert_id= $stmt->insert_id;
            $stmt->close();
            for($i=1;$i<$quantity;$i++){
              $stmt=$conn->prepare("insert into reg_details (name,email,phone,reference_id) values (?,?,?,?)");
              echo $conn->error;
              $stmt->bind_param("sssi",$_POST["name"][$i],$_POST["email"][$i],$_POST["phone"][$i],$insert_id);
              $stmt->execute();
              echo $conn->error;
              $stmt->close();
            }

          }
          elseif ($type == "cl") {
            if(isset($_SESSION['team_id'])){
              $ticket = "Student Contingent";
              $team_id = $_SESSION['team_id'];
              $sql_cl = "SELECT count_mem,amount_to_pay,count_paid from contingent_group where team_id = '$team_id'";
              // echo $sql_cl;
              $result_cl = mysqli_query($con,$sql_cl);
              $row = mysqli_fetch_array($result_cl,MYSQLI_ASSOC);
              $quantity =$row['count_mem'] - $row['count_paid'];
              $amount = $row['amount_to_pay'];
              $price = 350; //rajat
              $total = $price*$quantity;
              $discount = $total - $amount;
              $coupon = "Contingent";
              $sql_cl_mem = "SELECT name,email,phone from contingent_member where group_id='$team_id' and is_leader = 1";
              $result_cl_mem = mysqli_query($con,$sql_cl_mem);
              // echo $sql_cl_mem;
              $row_mem = mysqli_fetch_array($result_cl_mem,MYSQLI_ASSOC);
              $str_name= $row_mem['name'];
              $str_email= $row_mem['email'];
              $str_phone= $row_mem['phone'];
              $insert_id=-1;
              $tax = 0.02*$amount;
              // echo $name[0];
            }
            else{
              header('Location: ../index2.php');
            }
            # code...
          }
          else{
            header('Location: ../index3.php');
          }
        }
        else{
          header('Location: ../index.php');
        }
?>