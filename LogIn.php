<?php
	session_start();
      include ("database.php");
      include ("redirect.php");
      if(isset($_POST["submit"])){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            if(logIn($_POST["email"],$_POST["password"])){
	           //$role=;
			   $_SESSION["username"]=$_POST["email"];
			   $_SESSION["password"]=$_POST["password"];
			   $userid=logInForUserId($_POST["email"],$_POST["password"]);
			     $_SESSION["userid"]=$userid;
			   
			   if($_SESSION["role"]=="admin")
			   {redirected_to("AdminHomePage.php");
			   echo "Admin login";
			   }
			   else
               {redirected_to("UserHomePage.php");
			   echo "user login";
			   }
            }else{
                echo"User Name or Password did not match";
            
       }
      }else{
          echo "User Name or Password is Blank";
      }
     }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOG-IN</title>
	
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
	
	<img src="images/LOGO01.jpg"alt="LOGO01" style="width:150px;height:100px;">
	
	<br>
	
	<p style="font-size: 18px;">Let's dream a better world.... </p>
	
	<br>

        <h2 align="center" >LOG IN</h2>
     <form role="form" action="LogIn.php" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
		
        <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
        </div>
		
        <div class="checkbox">
             <label><input type="checkbox"> Remember me</label>
        </div>
		 
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button><br>
		<br>
		<a href="SignUp.php"> Don't have any account?</a>
		
     </form>
	 
   </div>
   </div>
   </div>
<script src="Login.js">
</script>
</body>

</html>