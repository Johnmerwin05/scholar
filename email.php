<?php 
$conn=mysqli_connect("localhost","root","","scholar_registration");

$query="SELECT * from scholar_registration ORDER BY Id DESC LIMIT 1";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);
                                
                                                    
if ($num>0) {  
while($data=mysqli_fetch_assoc($connect)){

    $firstname = $data['firstname'];
    $ticket = $data['ticket'];
    $email = $data['email'];


        $to = "$email";
         $subject = "Greetings from ScholarIBA";
         
         $message = "<b>Dear $firstname,</b><br><br>"; 
         $message .= "<b>Thank you for applying to the ScholarIBA scholarship program.</b><br><br>";
         $message .= "<b>Please be ready for the following requirements:</b><br><br>";
         $message .= "<b>1.  Provide a copy of your latest registration Form, signed and stamped by your high school or college/university registrar.</b> <br>";
         $message .= "<b>2.  Provide us with the most recent report card or official transcript from your school/college/university.</b> <br>";
         $message .= "<b>3.  Provide voters Certificate or any Valid ID</b> <br>";
         $message .= "<b>4.  Provide Indigency documents if necessary</b> <br><br>";
         $message .= "<b>Your ticket number is <h1>$ticket</h1> Please provide this to the office. Congratulations once again on being accepted into our waiting list!</b><br><br><br>";
         $message .= "<b>ScholarIBA Admin Team</b> <br>";
         
         
         $header = "From:cielomerwin@gmailcom \r\n";
         $header .= "Cc:cielomerwin@gmailcom \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script type='text/javascript'>window.top.location='thanks.html';</script>"; exit;
         }else {
            echo "Message could not be sent...";
         }







} }
                                                        
                                                        
?>
      