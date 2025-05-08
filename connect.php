<?php 
   $conn = mysqli_connect('127.0.0.1','root','','etec-database',3307);

   

   if($conn){
      echo "Connection successfully";
   }else{
      echo "Fail: " . mysqli_connect_error();
   }


?>