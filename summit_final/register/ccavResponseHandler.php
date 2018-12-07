<!DOCTYPE html>
<html>
<head>
    <title>Payment Status | E-Summit '18</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>

<?php
session_start();
include('Crypto.php');

    error_reporting(0);
    ini_set('display_errors', 1);
    $conn = mysqli_connect("localhost","admin","adminadmin2012#","esummit_18");     
    $workingKey='B19ACACA2B3840F69C22C4F842228097';     //Working Key should be provided here.
    $encResponse=$_POST["encResp"];         //This is the response sent by the CCAvenue Server
    $rcvdString=decrypt($encResponse,$workingKey);      //Crypto Decryption used as per the specified working key.
    $order_status="";
    $decryptValues=explode('&', $rcvdString);
    $dataSize=sizeof($decryptValues);
    echo "<center>";



    $sql_str="INSERT INTO transaction ( ";
    for($i = 0; $i < $dataSize; $i++) 
    {
        if($i!=0){$sql_str=$sql_str.", ";}
        $information=explode('=',$decryptValues[$i]);
        $sql_str = $sql_str.$information[0];
    }
    $sql_str = $sql_str." ) VALUES (";
    for($i = 0; $i < $dataSize; $i++) 
    {
        if($i!=0){$sql_str=$sql_str.", ";}
        $information=explode('=',$decryptValues[$i]);
        // $sql_str = $sql_str."\"".$information[1]."\"";
        $sql_str = $sql_str."?";
    }
    $sql_str = $sql_str." )";

    // echo $sql_str;


    $params=array();
    for($i = 0; $i < $dataSize; $i++) 
        {
            
            $information=explode('=',$decryptValues[$i]);
            array_push($params,$information[1]);
        }
    $type=String;
    // var_dump($params);


    $stmt=$conn->prepare($sql_str);
        echo $conn->error;
    // call_user_func_array(array($stmt, "bind_param"), array_merge(array($type), $params));
    $stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssss", ...$params);
    echo $conn->error;
    $success = $stmt->execute();
    echo $conn->error;

    if($success){
        // echo "success";
    }else{
        echo "Some error occured while processing the transaction. Please contact bhavan@ecell.in";
    }


 
    for($i = 0; $i < $dataSize; $i++) 
    {
        $information=explode('=',$decryptValues[$i]);
        if($i==3)   $order_status=$information[1];
        if($i==18) $email = $information[1];
        if($i==35) $amount = $information[1];
        if($i==26) $id = $information[1];
        // echo $id;

    }
        if($id==-1){
            $type = 'cl';
        }
        else{
            $stmt=$conn->prepare("SELECT is_prof,is_shared,cr_referral_id,count,source from reg_details where id=?");
            echo $conn->error;
            $stmt->bind_param('i',$id);
            $success = $stmt->execute();
            echo $conn->error;

            $stmt->bind_result($is_prof,$is_shared,$cr_referral_id,$count,$source);
            // $speaker_list=array();
            $stmt->fetch();
            $stmt->close();
            if($is_prof == '1'){
                $type = 'prof';
            }
            else{
                $type = 'stud';
            }
        }

    
 
    if($order_status==="Success")
    {


        if($type=='prof'){


            //rajat  - chanfe to 1000
            // $total = 1*$count;
            $total = 1000*$count;
            if($is_shared == 1){
                $total = $total -100;
            }
            if($source=="app"){
                $total = $total -100;
            }
            if($amount >= $total){
                //generate summit id; for count people
                    $stmt=$conn->prepare("SELECT name,email from reg_details where (reference_id=? or id=?) and esummit_id is NULL");
                            // echo $_SESSION["team_id"];
                            echo $conn->error;
                            // echo $stmt."yo";
                            $stmt->bind_param("ii",$id,$id);
                            echo $conn->error;
                            $success = $stmt->execute();
                             echo $conn->error;
                             $stmt->bind_result($name,$email);
                             $stmt->store_result();
                             while($stmt->fetch()){
                                $esummit_id = unique_summit_id("ESP");
                                $stmt2=$conn->prepare("UPDATE reg_details set esummit_id = ? where email = ? and (reference_id=? or id=?)");
                                    // echo $_SESSION["team_id"];
                                    echo $conn->error;
                                    // echo $stmt."yo";
                                    $stmt2->bind_param("ssii",$esummit_id,$email,$id,$id);
                                    echo $conn->error;
                                    if($stmt2->execute()){
                                        send_message($esummit_id,$email,$name);
                                    }
                                $stmt2->close();
                             }


                        ?>
                            <div align="center" class="container" style="width:60%;text-align: center;background: #00a1c8;color: #E6E7EA;padding: 30px;font-size: 20px;margin-top: 50px; ">
                                <img src="images/verified.jpg"><br>
                                <b>Your payment is is successful</b><br>
                                We have sent your <strong>esummit ID's</strong> to your corresponding email(s) successfully. Please bring them to esummit as a proof of your registration(s).
                            </div>
                            <?php

            }
           
        }
        else if($type=='stud'){

            //rajat change to 350
            $total = 350*$count;

              if(!is_null($cr_referral_id)){
                $total = $total -50;
                give_points_to_cr($cr_referral_id);
            }
            
            if($amount >= $total){
                //generate summit id; for count people
                    $stmt=$conn->prepare("SELECT name,email from reg_details where (reference_id=? or id=?) and esummit_id is NULL");
                            // echo $_SESSION["team_id"];
                            echo $conn->error;
                            // echo $stmt."yo";
                            $stmt->bind_param("ii",$id,$id);
                            echo $conn->error;
                            $success = $stmt->execute();
                             echo $conn->error;
                             $stmt->bind_result($name,$email);
                             $stmt->store_result();
                             while($stmt->fetch()){
                                $esummit_id = unique_summit_id("ESS");
                                $stmt2=$conn->prepare("UPDATE reg_details set esummit_id = ? where email = ? and (reference_id=? or id=?)");
                                    // echo $_SESSION["team_id"];
                                    echo $conn->error;
                                    // echo $stmt."yo";
                                    $stmt2->bind_param("ssii",$esummit_id,$email,$id,$id);
                                    echo $conn->error;
                                    if($stmt2->execute()){
                                        send_message($esummit_id,$email,$name);
                                    }
                                $stmt2->close();
                             }

                              ?>
                            <div align="center" class="container" style="width:60%;text-align: center;background: #00a1c8;color: #E6E7EA;padding: 30px;font-size: 20px;margin-top: 50px; ">
                                <img src="images/verified.jpg"><br>
                                <b>Your payment is is successful</b><br>
                                We have sent your <strong>esummit ID's</strong> to your corresponding email(s) successfully. Please bring them to esummit as a proof of your registration(s).
                            </div>
                            <?php
                // for($i=0;$i<$count;$i++){
                //     echo unique_summit_id("ESS")."\n";
                // }
            }
           
        }
        else if($type=='cl'){
            if(isset($_SESSION['team_id'])){
                echo $_SESSION["team_id"];
                $id = $_SESSION['team_id'];
                $stmt=$conn->prepare("SELECT amount_to_pay,is_shared,count_mem,amount_paid,count_paid,ppp from contingent_group where team_id=?");
                echo $conn->error;
                $stmt->bind_param('i',$id);
                $success = $stmt->execute();
                echo $conn->error;
                $stmt->bind_result($amount_to_pay,$is_shared,$count_mem,$amount_paid,$count_paid,$ppp);
                // $speaker_list=array();
                $stmt->fetch();
                $stmt->close();
                
                if($is_shared == 1){
                    $total = $amount_to_pay;
                }else{
                    $total = $amount_to_pay;
                }
                echo $amount."=".$total;
                
                if($amount >= $total){
                    //pppa
                    if($count_paid==0){
                        $ppp = $amount_to_pay/$count_mem;
                       }


                    $amount_to_pay=0;
                    $amount_paid = $amount_paid + $total;
                    $count_paid_new = $count_mem;


                    
                    
                    
                    $stmt=$conn->prepare("UPDATE contingent_group set amount_to_pay=?,amount_paid=?,ppp=?, count_paid=? where team_id=?");
                    echo $_SESSION["team_id"];
                    echo $conn->error;
                    // echo $stmt."yo";
                    $stmt->bind_param("iiiii",$amount_to_pay,$amount_paid,$ppp,$count_paid_new,$_SESSION["team_id"]);
                    echo $conn->error;
                    $success = $stmt->execute();
                     echo $conn->error;
                    //generate summit id for all who does not have id yet
                   
                            
                            $stmt=$conn->prepare("SELECT id,name,email from contingent_member where group_id=? and esummit_id is NULL");
                            // echo $_SESSION["team_id"];
                            echo $conn->error;
                            // echo $stmt."yo";
                            $stmt->bind_param("i",$_SESSION["team_id"]);
                            echo $conn->error;
                            $success = $stmt->execute();
                             echo $conn->error;
                             $stmt->bind_result($member_id, $name,$email);
                             $stmt->store_result();
                             while($stmt->fetch()){
                                $esummit_id = unique_summit_id("ESC");
                                $stmt2=$conn->prepare("UPDATE contingent_member set esummit_id = ? where id = ? and group_id=?");
                                    // echo $_SESSION["team_id"];
                                    echo $conn->error;
                                    // echo $stmt."yo";
                                    $stmt2->bind_param("sii",$esummit_id,$member_id,$_SESSION["team_id"]);
                                    echo $conn->error;
                                    if($stmt2->execute()){
                                        send_message($esummit_id,$email,$name);
                                    }
                                $stmt2->close();
                             }
                             
                             $stmt->close();


                              ?>
                            <div align="center" class="container" style="width:60%;text-align: center;background: #00a1c8;color: #E6E7EA;padding: 30px;font-size: 20px;margin-top: 50px; ">
                                <img src="images/verified.jpg"><br>
                                <b>Your payment is is successful</b><br>
                                We have sent your <strong>esummit ID's</strong> to your corresponding email(s) successfully. Please bring them to esummit as a proof of your registration(s).
                            </div>
                            <?php


                        
                }
            else{
                exit();
            }
            
         }else{
            echo "Session not logged in";
         }

            
        }
        // echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
         
    }
    else if($order_status==="Aborted")
    {
        echo "<br>Thank you for visiting our site.We will keep you posted regarding the status of your order through e-mail";
     
    }
    else if($order_status==="Failure")
    {
        echo "<br>Thank you for visiting our site.However,the transaction has been declined.";
    }
    else
    {
        echo "<br>Security Error. Illegal access detected";
     
    }
 
    function idGenerator($y){
        $numbers = rand(10000, 99999);
        $prefix = $y;
        $id = $prefix . $numbers;
        return $id;
    }

    function unique_summit_id($prefix){

        $conn = mysqli_connect("localhost","admin","adminadmin2012#","esummit_18");     


        if($prefix == "ESS"||$prefix == "ESP"){

            while(true){
            
                     // $prefix="ES".
                $esummit_id = idGenerator($prefix);

                $stmt=$conn->prepare("SELECT esummit_id FROM reg_details WHERE esummit_id=?");
                echo $conn->error;
                $stmt->bind_param('s',$esummit_id);
                $success = $stmt->execute();
                echo $conn->error;
                $stmt->bind_result($temp);
                if(! $stmt->fetch()){
                    break;
                }

            }

        }
        else if($prefix == "ESC"){

            while(true){
            
                     // $prefix="ES".
                $esummit_id = idGenerator($prefix);

                $stmt=$conn->prepare("SELECT esummit_id FROM contingent_member WHERE esummit_id=?");
                echo $conn->error;
                $stmt->bind_param('s',$esummit_id);
                $success = $stmt->execute();
                echo $conn->error;
                $stmt->bind_result($temp);
                if(! $stmt->fetch()){
                    break;
                }

            }

        }

        return $esummit_id;
       
    }
    function send_message($esummit_id,$email_id,$name){
        include_once "../../fcof/swift/lib/swift_required.php";
        $subject = "Your E-Summit Pass | E-cell, IIT Bombay";
        $from = array('esummit@ecell.in' =>'E-Summit 2018');
        $replyTo = array(
        $email_id => $name);
        // $from = array('esummit@ecell.in' =>'E-Cell IITB');
                $to = array(
                 $email_id  => $name
                );
                $text = "Please update your browser to view this message";
                $html =  "Hello ".$name.",<br><br>

                Greetings from IIT Bombay E-Cell,<br><br>
                Your esummit ID is ".$esummit_id."<br>
                You registration for E-Summit 2018 has been successful. The dates for the E-Summit are 27th and 28th of January 2018. Please follow us on Facebook, Twitter and LinkedIn to keep getting all the updates. Also follow our <a href='http://www.ecell.in/esummit'>official website</a> and download our <a href='https://play.google.com/store/apps/details?id=in.ecell.esummit'>Android app</a> from the Play Store. Details about all the speakers, events, workshops, competitions, networking events and agenda would be available on the website and the app.<br><br>

                Hope you use all the resources of the E-Summit to the fullest.<br><br>

                Thanks and regards, <br>
                E-Cell, IIT Bombay.<br><br>

                <p style='color:blue';>Delivered with pepipost</p>

                ";

        $transport = Swift_SmtpTransport::newInstance('smtp.pepipost.com', 2525);
        $transport->setUsername('rajatg');
        $transport->setPassword('Rajat@1234');
        $swift = Swift_Mailer::newInstance($transport);

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        $message->setReplyTo($replyTo);
        $message->addPart($text, 'text/plain');

        if ($recipients = $swift->send($message, $failures))
        {
            // $data['success'] = true;
            // $data['sent'] = "yes";
            // echo '<script>alert("We have successfully received your message");window.location.href="https://www.ecell.in/template";</script>';
            // header('Location: ../index.php');
            // echo 'yes';
            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>We have received your message</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>';   
        } else {
            echo 'mail error';

            // $data['success'] = false;

            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Sorry! some error occured kindly mail your query to shoham@ecell.in</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>'; 
        }
    }



    function give_points_to_cr($cr_referral_id){
        $conn = mysqli_connect("localhost","admin","adminadmin2012#","cr_2017");
        $stmt=$conn->prepare("UPDATE profile set extra =extra+2000 where cr_id=?");
        echo $conn->error;
        $stmt->bind_param("s",$cr_referral_id);
        echo $conn->error;
        $stmt->execute();
    }
    



    


   

?>