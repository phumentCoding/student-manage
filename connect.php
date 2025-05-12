<?php 
   $conn = mysqli_connect('127.0.0.1','root','','etec-database',3307);

   if(!$conn){
      die("Error -> ". mysqli_connect_errno());
   }


?>