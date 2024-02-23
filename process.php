<?php
  if (isset($_POST['email']))  {

    // Still not function at local
  
    //Email information
    $admin_email = "ar28297@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $message = $_POST['message'];
    
    //send email
    // mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    mail($admin_email, "New Form Submission", $phone, "From:" . $email);
    
    header('Location: http://localhost:3000/success.html');
  }