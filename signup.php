<!DOCTYPE html>
<html>
<head>
	<title>Signup your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signup.css">

</head>
<body>
   <div class="signup-form">
     <form action="" method="post">
       <div class="form-header">
           <h2>Sign Up Now!</h2>
           <p>It's free and always be free</p>
       </div>
       <div class="form-group">
           <label>UserName</label>
           <input type="text" name="user_name" class="form-control" placeholder="Ex:Sree/Arindom" autocomplete="off" required>
       </div>
       <div class="form-group">
           <label>Password</label>
           <input type="password" name="user_pass" class="form-control" placeholder="use a strong password" autocomplete="off" required>  
       </div>
       <div class="form-group">
           <label>Email Address</label>
           <input type="email" name="user_email" class="form-control" placeholder="something@site.com" autocomplete="off" required>
       </div>
       <div class="form-group">
           <label>Country</label>
           <select name="user_country" class="form-control" required>
           <option disabled="">Select your country</option>
           <option value="AF">Afghanistan</option>
  <option value="AX">Åland Islands</option>
  <option value="AL">Albania</option>
  <option value="DZ">Algeria</option>
  <option value="AT">Austria</option>
  <option value="AZ">Azerbaijan</option>
  <option value="BS">Bahamas</option>
  <option value="BH">Bahrain</option>
  <option value="BD">Bangladesh</option>
  <option value="BB">Barbados</option>
  <option value="BG">Bulgaria</option>
  <option value="BF">Burkina Faso</option>
  <option value="BI">Burundi</option>
  <option value="KH">Cambodia</option>
  <option value="CM">Cameroon</option>
  <option value="CA">Canada</option>
  <option value="CV">Cape Verde</option>
  <option value="KY">Cayman Islands</option>
  <option value="CF">Central African Republic</option>
  <option value="TD">Chad</option>
  <option value="CL">Chile</option>
  <option value="CN">China</option>
  <option value="CX">Christmas Island</option>
  <option value="CC">Cocos (Keeling) Islands</option>
  </select>
 </div>
  <div class="form-group">
           <label>Gender</label>
           <select name="user_gender" class="form-control" required>
           <option >male</option>
           <option >female</option>
           <option >others</option>
           </select>
           </div>
        <div class="form-group">
           <label class="checkbox-inline">
           <input type="checkbox" required> I accept the <a href="#"> Terms of Use</a> &amp; <a href="#">Privacy policy</a></label>
       </div>

       <div class="form-group">
           <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>	
       </div>
       <?php include 'signup_user.php'; ?>
     </form>
     <div class="text-center small" style="color:white;">Already have an account?<a href="signin.php"> Sign in here</div>
   	
   </div>
</body>
</html>