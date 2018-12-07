<?php
session_start();
ini_set('display_errors', 1);

    $conn = mysqli_connect("localhost","admin","adminadmin2012#","esummit_18");     


    $order_status="Success";
    $amount=2;
    $id=172;
 
   
        if($id==-1){
            $type = 'cl';
        }
        else{
            $stmt=$conn->prepare("SELECT is_prof,is_shared,count from reg_details where id=?");
            echo $conn->error;
            $stmt->bind_param('i',$id);
            $success = $stmt->execute();
            echo $conn->error;

            $stmt->bind_result($is_prof,$is_shared,$count);
            // $speaker_list=array();
            $stmt->fetch();
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
            $total = 900*$count;
            if($is_shared == 1){
                $total = $total -100;
            }
            if($amount >= $total){
                //generate summit id; for count people
                for($i=0;$i<$count;$i++){
                    echo unique_summit_id("ESP");
                }
            }
           
        }
        elseif($type=='stud'){
            $total = 1*$count;
            echo $count;
            if($is_shared == 1){
                $total = $total -50;
            }
            if($amount >= $total){
                //generate summit id; for count people

                for($i=0;$i<$count;$i++){
                    echo unique_summit_id("ESS");
                }
            }
           
        }
        elseif($type=='cl'){
            if(isset($_SESSION['team_id'])){
                $id = $_SESSION['team_id'];
                $stmt=$conn->prepare("SELECT amount_to_pay,is_shared,count_mem,amount_paid, from contingent_group where team_id=?");
                echo $conn->error;
                $stmt->bind_param('i',$id);
                $success = $stmt->execute();
                echo $conn->error;
                $stmt->bind_result($amount_to_pay,$is_shared,$count_mem,$amount_paid);
                // $speaker_list=array();
                $stmt->fetch();
                if($is_shared == 1){
                    $total = $amount_to_pay -50;
                }
                if($amount >= $total){
                    //pppa
                    $ppp = $amount_to_pay/$count_mem;
                    $amount_paid = $amount_paid + $total;
                    // $count_paid = $count_paid + $count_mem;
                    $stmt=$conn->prepare("UPDATE contingent_group set amount_to_pay=0,amount_paid=?,$ppp=?,$count_paid=? from contingent_group where team_id=?");
                    echo $conn->error;
                    $stmt->bind_param('iii',$amount_paid,$ppp,$count_mem);
                    $success = $stmt->execute();
                    //generate summit id for all who does not have id yet
                     for($i=0;$i<$count_mem-$count_paid;$i++){
                            echo unique_summit_id("ESC");
                        }
                }

            }
            else{
                exit();
            }
        }
        // echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
         
    }
    else if($order_status==="Aborted")
    {
        echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
     
    }
    else if($order_status==="Failure")
    {
        echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
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
                $stmt->bind_param('i',$esummit_id);
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

                $stmt=$conn->prepare("SELECT esummit_id FROM contingent_group WHERE esummit_id=?");
                echo $conn->error;
                $stmt->bind_param('i',$esummit_id);
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


    


?>