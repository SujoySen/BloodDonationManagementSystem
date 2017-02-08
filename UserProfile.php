<?php
session_start();?>
<html lang="en">
<head>
  <title>UserProfile</title>

   <link rel="stylesheet" type="text/css" href="../css/user_profile.css">
  
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
 
         <div id="wrapper">
           
            <div id="header">
              
				<div class="logo left ">
				<img src="images/LOGO01.jpg" alt="LOGO01"  width="250" height="150">
				</div>
				
                <div id="slogan" class="left ">
				
				<h1 style="color:#093555;font-weight: bold;font-family:Arial Black;font-size:40px;" >
				Shwopnojogi.com 
				</h1>
			
				</div>
				
				
                <div id="social" class="left ">
				<br>
				<br>
				<br>
				
				
				<p>Let's dream for a better world..... </p>
				</div>
	
	        </div>
	</div><br>
	
	<br>
	<br>
	
	
	
   <form align="left">
    <fieldset class="scheduler-border">
      <legend class="scheduler-border" ><h2>User Profile:</h2></legend>
		    <img align="left" src="<?php echo $img;?>"alt="User Photo" style="width:220px;height:180px;">
		<table align="center" >
			<tr>
		   	 <td><label >Name:</label></td>			 
<?php
		//$id=$_SESSION["user_id"];
	//echo $_SESSION["role"];
	include ("database.php");
    //$id=LogInForUserId($_SESSION["username"],$_SESSION["password"]);
	//echo $id;
	//$id1=$_SESSION["userid"];
	//$result = mysql_query("SELECT * FROM user WHERE user_id='".$id1."'");
	$res1=mysql_fetch_array($result);
              //$name=$res1["name"];
			 //var_dump($name);
			  $email=$res1['email'];
			  $bloodgroup=$res1["birth_day"];
			  $role=$res1["role"];
			  $birth_day=$res1["birth_day"];
			  $location=$res1["location"];
			  $last_given=$res1["last_given"];
			  $num_given=$res1["num_given"];
			  $weight=$res1["weight"];
			  $img=$res1["photo"];
			 
			echo "<td>".$res1["name"]."</td></tr><tr><td><label >E-mail:</label></td><td>";
			echo $email."</td></tr><tr><td><label >Blood group:</label></td><td>";
			echo $bloodgroup."</td></tr><tr> <td><label >Weight:</label></td><td>";
			echo $weight."</td></tr><tr><td><label >Date of birth:</label></td><td>";
			echo $birth_day."</td></tr><tr><td><label >Location:</label></td><td>";
			echo $location."</td></tr><tr><td><label >Last time given blood:</label></td><td>";
			echo $last_given."</td></tr><tr><td><label >No of Times Given:</label></td><td>";
			echo $num_given."</td></tr></tr><tr><td><label >User Type:</label></td><td>";
			echo $role."</td>"; 
			 ?>
				
			</tr>
        </table>
	</fieldset>
   </form>


</body>
        
	
		
</html>