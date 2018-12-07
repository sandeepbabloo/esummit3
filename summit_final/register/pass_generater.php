<?php



send_message('ESP90546','bhavan@ecell.in','Dr. Kshama Kulhalli');


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

                Thanks and regards, 
                E-Cell, IIT Bombay.


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
            echo "sent";
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