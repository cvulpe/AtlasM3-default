<?php

    print_r($_POST);

    //define variables and  set to empty values
    $name_error= $email_error = "";
    $name=$email=$message=$success= "";

    //Form is submitted with POST method
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['name'])){
            $name_error ="Name is required";
        }else{
            $name = test_input($_POST['name']);
            //Check if name only contains letters and whitespaces
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $name_error ="Only letters and white spaces are allowed";
            }
        }
        if(empty($_POST['email'])){
            $email_error = "Email address is required";
        }else{
            $email = test_input($_POST['email']);
            //Check if email address is valid
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $email_error = "Your email address is invalid";
            }
        }
        
        if(empty($_POST['message'])){
            $message ="";
        }else{
            $message = test_input($_POST['message']);
        }
        if($name_error == "" && $email_error == "") {
            // Prepare the email content
            $message_body = "";
            unset($_POST['submit']);
            foreach($_POST as $key => $value){
                $message_body .= "$key:$value\n";
            }
            $to = "emailaddress";
            $subject = "Contact Form Submit";
            if(mail($to, $subject, $message)){
                $success = "Message send, thank you for contacting us!";
                $name = $email = $message= "";
            }
        }
    }

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
?>