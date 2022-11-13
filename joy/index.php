<?php
       
       session_start();
       if(isset( $_SESSION['uname'])){

        header('location:home.php');
       }
         if($_POST){
         include 'connection.php'; 
         
				
		 if(isset($username) && isset($password)){
			$username = $_POST['uname'];
			$password = $_POST['password'];
			
		}

           $sql	="SELECT * FROM `fghj` WHERE username='$username' && password = '$password'";
  
            $res=mysqli_query($con,$sql);
                 if($res)
                 {
                  $num=mysqli_num_rows($res);
                  if($num>0)
                  {
                          $_SESSION['uname']=$username;
                          header('location:home.php');
                  }
                  else{
                          echo 'INVALID INPUTS';
                  }
            }
         }   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="fg.css">
</head>
<body>
	<div class="parent">

		<form action=""method="POST">
			<div class="login-wrap">
				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
					<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
					<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Username or Email</label>
								<input type="text" name="uname"  class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input type="password" name="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Keep me Signed in</label>
							</div>
							<div class="group">
								<input type="submit" name="Submit" class="button" value="Sign In">
								
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<label for="tab-2">Forgot Password?</label> <br>
		 						 <a href="signup.php">Sign Up </a>
							</div>
						</div>
						<div class="for-pwd-htm">
							<div class="group">
								<label for="user" class="label">Username or Email</label>
								<input id="sername" type="text" class="input">
							</div>
							<div class="group">
								<input type="submit" class="button" value="Reset Password">
							</div>
							<div class="hr"></div>
						</div>
					</div>
				</div>
			</div>
		</form>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        
	
	</div>
</body>
<style>
  
</style>
</html>