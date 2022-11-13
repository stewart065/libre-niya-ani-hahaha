<?php
   require_once "connection.php";

   $fname = $_POST['name'];
   $username = $_POST['uname'];
   $password = $_POST['pass'];
   $email     = $_POST['email'];

   $sql = "INSERT INTO `fghj`( `name`, `username`, `password`, `email`) VALUES ('$fname','$username','$password','$email')";
   $res = $con->query($sql);
   if($res)
           header("Location:index.php");
    else
           echo "failed";       
      
          

              