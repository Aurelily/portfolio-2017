<?php
    $name2 = $_POST['name2'];
    $email2 = $_POST['email2'];
    $message2 = $_POST['message2'];
    $from = 'From: www.design-dev.net'; 
    $to = 'aurelie@design-dev.net'; 
    $subject = 'Contact';

    $body = "From: $name2\n E-Mail: $email2\n Message:\n $message2";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 

          Header("Location:  http://www.design-dev.net/?ret=0#contact");
        
        } else { 
            echo '<p>Oops! Veuillez réessayer et remplir tous les champs.</p>'; 
        }
    }
?>