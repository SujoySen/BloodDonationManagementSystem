<?php
	include ("redirect.php");
        include ("database.php");
	        if(isset($_POST["UpDate"])){
	  
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
                    $location= $_POST["location"];	
			    if(isset($_POST["weight"]))
                    $weight= $_POST["weight"];	
 				
////////////////////
$image_type= $_FILES['file1']['type'];
	  $image_name= $_FILES['file1']['name'];
	if($image_type=="image/jpg" || $image_type=="image/png" || $image_type=="image/gif" || $image_type=="image/jpeg" )	  
		 { 
		 move_uploaded_file($_FILES['file1']['tmp_name'],'uploads/'.$_FILES['file1']['name']);
	  }	  
            
			if(user_insert($name,$email,$blood_group,$password,$birth_day,$location,$image_name))
                {redirected_to("UserProfile.php"); 
                    }				
            else{
			
			echo"ERROR IN UPDATING";

			}
			
			
			}				

	  
	  

$id = $_GET['id'];


$result = mysql_query("SELECT * FROM users WHERE id=$id");

while($res = mysql_fetch_array($result))
{
	$name = $res['name'];
	$location = $res['location'];
	$email = $res['email'];
	$bloodgroup = $res['blood_group'];
	$password = $res['password'];
	$birthday = $res['birth_day'];
	$photo = $res['photo'];
	$weight= $res['weight'];
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

     
    <div class="container-fluid" align="center">
	 

	
    <div  class="col-sm-4" ">
	
	
        <h2 align="center" >Update</h2>
     <form role="form" method="POST" action="SignUp.php" enctype="multipart/form-data">
	    
	    <div class="from-group">
		     <label for="name"> Name:</label>
             <input type="text" class="form-control" id="name" name="name" placeholder="Name" value=<?php echo $name;?>>
		</div>	 
		
		<div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value=<?php echo $email;?>>
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
             <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value=<?php echo $password;?>>
        </div>
		
		<div class="form-group">
             <label for="r_pwd">Re-enter password:</label>
             <input type="password" class="form-control" id="r_pwd" name="r_password" placeholder="Re enter password">
        </div>
		
		<div class="form-group">
		     <label for="bid">Birthday:</label>
             <input type="date" class="form-control" id="birthday" name="birthday" value=<?php echo $birthday;?> >
		
        </div>
		
		<div class="from-group">
		     <label for="location"> Location:</label>
             <input type="text" class="form-control" id="location" name="location" placeholder="Location" value=<?php echo $location;?>>
		</div><br>
		<div class="from-group">
		     <label for="photo"> Photo:</label>
             <input type="file" name="file" id="file" class="form-control" placeholder="photo" value=<?php echo $photo;?>>
		</div><br>
		<div class="from-group">
		     <label for="weight"> weight:</label>
             <input type="text" class="form-control" id="weight" name="weight" placeholder="weight" value=<?php echo $weight;?>>
		</div><br>		
		<button type="submit" class="btn btn-primary" name="UpDate" >Submit</button>
		
     </form>
	 
	 </div>
	 </div>
	 
	 
</body>

</html>