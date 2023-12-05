<?php

 $name = filter_input(INPUT_POST, 'name',);
 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


 if($name && $email){
    
    header("Location:page-obrigado.php");
    exit;

 } else{ 
   
   header("Location:index.php");
    exit;
 }