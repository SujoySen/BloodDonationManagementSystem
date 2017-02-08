<?php
	include ("redirect.php");
        include ("database.php");
	        if(isset($_POST["submit"])){
	  
	            if(isset($_POST["name"]))
                    $name = $_POST["name"];
                if(isset($_POST["password"]))
                    $password = $_POST["password"];
                if(isset($_POST["email"]))
                    $email = $_POST["email"];
                if(isset($_POST["BloodGroup"]))
                    $blood_group= $_POST["BloodGroup"];
                if(isset($_POST["birthday"]))
                    $birth_day= $_POST["birthday"];
                if(isset($_POST["location"]))
                    {$location= $_POST["location"];	
 					
            
			if(user_insert($name,$email,$blood_group,$password,$birth_day,$location))
                {redirected_to("LogIn.php"); 
                    }				
            else{
			
			redirected_to("SignUp.php"); 
			$msg = $dom->getElementsByTagName('msg');
			$msg->value="Error";
			}
			
			
			}				

	  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGN-UP</title>

   <link rel="stylesheet" type="text/css" href="HomePage.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

     
    <div class="container-fluid">
	 
	<div class="row">
	
	 <img src="images/image19.png"alt="Mountain View" style="width:770px;height:665px;">
	
    <div  class="col-sm-4" style="position:fixed; left:850px; top:20px;">
	
	
        <h2 align="center" >SIGN-UP</h2>
     <form role="form" method="POST" action="SignUp.php">
	    
	    <div class="from-group">
		     <label for="name"> Name:</label>
             <input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>	 
		
		<div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
		
		
	    <div class="form-group">
          <label for="blgroup" >Blood Group:</label><br>
			<select name="BloodGroup">
                <option  value="A+">A+</option>
                <option  value="A-">A-</option>
                <option  value="B+">B+</option>
                <option  value="B-">B-</option>
				<option  value="O+">O+</option>
                <option  value="O-">O-</option>
                <option  value="AB+">AB+</option>
                <option  value="AB-">AB-</option>
            </select>
        </div>
	

        <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
		
		<div class="form-group">
             <label for="r_pwd">Re-enter password:</label>
             <input type="password" class="form-control" id="r_pwd" name="r_password" placeholder="Re enter password">
        </div>
		
		<div class="form-group">
		     <label for="bid">Birthday:</label>
             <input type="date" class="form-control" id="birthday" name="birthday" >
		
        </div>
		
		<div class="from-group">
		     <label for="location"> Location:</label>
             <input type="text" class="form-control" id="location" name="location" placeholder="Location">
		</div><br>
		<p name="msg" value=""></p>
		<button type="submit" class="btn btn-primary" name="submit" >Submit</button>
		
     </form>
	 
	 </div>
	 </div>
	 </div>
	 
<script src="SignUp.js">
</script>
</body>

</html>