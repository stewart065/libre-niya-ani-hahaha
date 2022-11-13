<?php

require_once "connection.php";

if($_POST)
{
    $fname = $_POST['name'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $email     = $_POST['email'];
 
    $sql = "insert into fghj (name,uname,pass,email)VALUES('$fname','$username','$password','$email')";
    $res = $con->query($sql);
    if($res)
            header("Location:index.php");
       
        else
            echo "failed2";       
       
} 
          
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>

</head>
<body> 
<div class="ty0">
  <div class="container-fluid bg">
	<div class="container">
                <div class="row">
                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-2">
                                    <i class="lni lni-enter" aria-hidden="true"></i>
                                </div>
                                
                                <div class="col-sm-9 col-md-10 col-lg-10">
                                    <h1 class="heading">Register</h1>
                                  
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-2">
                                    <i class="lni lni-user" aria-hidden="true"></i>
                                </div>
                                
                                <div class="col-sm-9 col-md-10 col-lg-10">
                                    <h1 class="heading">Make Your Profile</h1>
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-2">
                                    <i class="lni lni-cloud-upload" aria-hidden="true"></i>
                                </div>
                                
                                <div class="col-sm-9 col-md-10 col-lg-10">
                                    <h1 class="heading">Upload Resume</h1>
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-3 col-md-2 col-lg-2">
                                    <i class="lni lni-search" aria-hidden="true"></i>
                                </div>
                                
                                <div class="col-sm-9 col-md-10 col-lg-10">
                                    <h1 class="heading">Search Jobs</h1>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                                <div class="card regform wow bounce animated" data-wow-delay="0.05s">
                                    <div class="card-body regform">
                                    <div class="myform form ">
                                        <div class="logo mb-3">
                                        <div class="col-md-12 text-center">
                                            <h1 class="sign">Signup</h1>
                                        </div>
                                        </div>
                                        <form action="insert.php" method="post">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="text"  name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Username</label>
                                                    <input type="text"  name="uname" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="Enter Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="password" name="pass" id="pass"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                
                                                <div class="col-md-12 text-center mb-3">
                                                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign Up</button>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                                    </div>
                                                </div>
                                                    </div>
                                                
                                        </form> 
                                </div>
                            </div>
                    </div>
            </div>
    </div> 
</div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="put.js"></script>


</body>
</html>