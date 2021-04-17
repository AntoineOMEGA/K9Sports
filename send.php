<?php
    if(isset($_POST["submit"])){
        if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
            echo "Fill out the entire form.";
        }else{
                $email=$_POST['email'];
                $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                $email= filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email){
                echo "Invalid Email";
            } else {
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $headers = 'From:'. $email . "rn";
                $headers .= 'Cc:'. $email . "rn";
                $message = wordwrap($message, 70);
                mail("k9sportsthebarn@gmail.com", $subject, $message, $headers);
                echo "Your mail has been sent successfully.";
            }
        }
    }
?>