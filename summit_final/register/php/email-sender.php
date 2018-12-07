<?php
// process.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array
    // if (empty($_GET['name']))
    //     $errors['name'] = 'Name is required.';

    // if (empty($_GET['email']))
    //     $errors['email'] = 'Email is required.';
    // if (empty($_GET['subject']))
    //     $errors['subject'] = 'Subject is required.';
    // if (empty($_GET['msg']))
    //     $errors['msg'] = 'Meage is required.';
    


    // if (empty($_GET['subject']))
    //     $errors['subject'] = 'Subject is required.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    // if ( ! empty($errors)) {

    //     // if there are items in our errors array, return those errors
    //     $data['success'] = false;
    //     $data['errors']  = $errors;
    // } else {
        include_once "../../../fcof/swift/lib/swift_required.php";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $msg = $_POST["message"];
        // $subject= $_POST["subject"];
        // $work = $_GET["work"];
        // $phone = $_GET["phone"];
        // $size = $_GET["size"];
        $subject = "Message from contact form of esummmit";
        $from = array('esummit@ecell.in' =>'E-Summit 2017');
        $replyTo = array(
            $email => $name);
        $to = array(
         'srijit@ecell.in'  => 'Srijit, E-Cell IITB',
         // 'shoham@ecell.in'  => 'Shoham, E-Cell IITB',
        );


        $text = "Please update your browser to view this message";
        $html =  "Name:".$name." <br> E-mail :". $email ."<br> <br> Message : ".$msg;

        $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 2525);
        $transport->setUsername('THE ENTREPRENEURSHIP CELL, IIT BOMBAY');
        $transport->setPassword('lXYcHl52RFJaElGCKzMpLw');
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
            echo '<script>alert("We have successfully received your message");window.location.href="https://www.ecell.in/esummit";</script>';
            // header('Location: ../index.php');
            // echo 'yes';
            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>We have received your message</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>';   
        } else {
            echo 'error';

            // $data['success'] = false;

            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Sorry! some error occured kindly mail your query to shoham@ecell.in</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>'; 
        }
        // $sql = "INSERT INTO `register`(`name`, `email`, `work`, `phone`, `size`) VALUES ('$name','$email','$email','$phone','$size')";
        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        // if(mysqli_query($conn,$sql)){
        //     $data['success'] = true;
        //     $data['message'] = '<div class="style-msg successmsg">
        //                     <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully read this important alert message.</div>
        //                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        //                 </div>';
        // }
        // else{
        //     $data['success'] = false;
        //     $data['server'] = mysqli_error($conn);
        // }
    // }

    // return all our data to an AJAX call
    // echo json_encode($data);
