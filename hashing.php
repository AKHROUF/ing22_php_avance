<?php

   $pass = "Admin@123";
   $pass1 = '$2y$10$r.J9SsIlx2YH3htW72TqYOaSS1zmpXwKyrFL0cJnZ6qQ39NE72Xx2';
   
   echo md5($pass) . "<br/>";   
   echo sha1($pass) . "<br/>";   
   echo crypt($pass, '10') . "<br/>";
   echo password_hash($pass, PASSWORD_DEFAULT) . "<br/>";
   echo password_verify($pass, $pass1)? 'OK':'KO' . "<br/>";