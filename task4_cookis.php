<?php 

  
  $value = "Test Cookie";

  setcookie('student',$value,time()+86400,'/');

   echo  $_COOKIE['student']['name'];
   echo  $_COOKIE['student']['email'];
   echo  $_COOKIE['student']['password'];
   echo  $_COOKIE['student']['linked_in'];
   echo  $_COOKIE['student']['gender'];
   echo  $_COOKIE['student']['file'];


?>