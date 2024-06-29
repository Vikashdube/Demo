<?php
 if($_SERVER['REQUEST_METHOD']==='POST'){

   $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
   $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);

   // validate inpute data

   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "Invalid email format";

   }else {
      echo "thank you ," . $name . "! we have received your details.";
      
   }
 }

?>