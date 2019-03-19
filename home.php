<!DOCTYPE html>
<html>
<head>
	<title>MY Chat- HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container main-section">
    <div class="row">
    	<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
    	  <div class="input-group searchbox">
    	  <div class="input-group-btn">
    	    <center><a href="Includes/find_friends.php"><button class="btn btn-default search-icon" name="search_user" type="submit">Add New user for fun</button></a>
    	    	
    	    </center>
    	  	
    	  </div>

    	  </div>

    	 <div class="left-chat">
    	 <ul>
    	 	<?php include("Includes/get_users_data.php");?>
    	 </ul>	
    	 </div>
    	  </div>
    		<div class="col-md-9 col-xs-12 right-sidebar">
    			
    		</div>
    	</div>
    </div>

</body>
</html>