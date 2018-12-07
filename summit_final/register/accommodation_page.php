<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO `acco_after`(`name`, `email`,  `phone`) VALUES ('$name','$email','$phone')";
        if(mysqli_query($con,$sql)){
        	 include_once "../../fcof/swift/lib/swift_required.php";
        $subject = "Accomodation Information | E-cell, IIT Bombay";
        $from = array('esummit@ecell.in' =>'E-Summit 2018');
        $replyTo = array(
        $email => $name);
        // $from = array('esummit@ecell.in' =>'E-Cell IITB');
                $to = array(
                 $email  => $name
                );
                $text = "Please update your browser to view this message";
                $html =  "Hello,<br><br>
Greetings from the Entrepreneurship Cell, IIT Bombay.<br><br>
We are really sorry to inform you that accommodation from our side is over. But you can avail accommodation through Oyo rooms.  <br><br>
You can contact Lalit Acharya for the same. <br>
Lalit Acharya - +91 9529251444
";

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
            // echo '<script>alert("We have successfully received your message");window.location.href="https://www.ecell.in/template";</script>';
            // header('Location: ../index.php');
            // echo 'yes';
            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>We have received your message</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>';   
            header('Location:../index.php');
        } else {
            echo 'mail error';

            // $data['success'] = false;

            // $data['message'] = '<div class="style-msg successmsg">
            //                 <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Sorry! some error occured kindly mail your query to shoham@ecell.in</div>
            //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //             </div>'; 
        }
    }
?>