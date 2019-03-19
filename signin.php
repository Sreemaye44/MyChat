<!DOCTYPE html>
<html>
<head>
	<title>Signin your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signin.css">

</head>
<body>
   <div class="signin-form">
     <form action="" method="post">
       <div class="form-header">
           <h2>Sign In</h2>
           <p>Welcome to Mychat</p>
       </div>
       <div class="form-group">
           <label>Email</label>
           <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" required>
       </div>
       <div class="form-group">
           <label>Password</label>
           <input type="password" name="pass" class="form-control" placeholder="password" autocomplete="off" required>	
       </div>
       <div class="small">Forgot password? <a href="forgot_pass.php">Click here</a><br>
       </div>
       <div class="form-group">
           <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>	
       </div>
       <?php include 'signin_user.php'; ?>	
     </form>
     <div class="text-center small" style="color:black;">Don't have an account?<a href="signup.php"> Click here</div>
   	
   </div>
</body>
</html>