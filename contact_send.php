<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Ebanglaltd'; 
    $to = 'muradbd.info@gmail.com'; 
    $subject = 'New Query ';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
   if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) 

 {
              echo '<script language="javascript">';
echo 'alert("Thanks !. Your Messages  Successfully Send")';

echo '</script>';
echo '<p><a href="http://www.ebanglaltd.com">HOME</a></p>';
          }


			else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>