<!DOCTYPE html>
<html lang="en">
<head>
<script >
function showHint() {
var str=document.getElementById("searchTxt").value;

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
   
            xmlhttp = new XMLHttpRequest();
        } else {

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
		
    }
}

</script>

  <title>UserHomePage</title>

   <link rel="stylesheet" type="text/css" href="UserHomePage.css">
  
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
	</div>

	<br>
	<br>
	<div class="row">
	    <div  class="col-sm-4" style="float: right";>
	
	    <form class="" >
          <div class="input-group">
               <input type="text" id="searchTxt"  placeholder="Search..." class="form-control"  />
           <div class="input-group-btn" >
                 <button class="btn btn-info" onclick="showHint()">
                 <span class="glyphicon glyphicon-search" ></span>
                 </button>
            </div>
           </div>

        </form>
	
	    </div>
	</div>
	
	<br>
	<br>
	<br>
		<div class="box">
		
	    
		<div  class="box1 left ">
		<h2 align="center" style="color:#093555;font-weight: bold;font-family:Arial Black;font-size:25px;" >Profile Photo </h2>
            		
		     <img align="left" src="images/image10.jpg"alt="User Photo" style="width:250px;height:200px;">
	         
		</div>	

        <div class="box2 left" >

         <h2 align="center" style="color:#093555;font-weight: bold;font-family:Arial Black;font-size:25px;" >User Home Page</h2>
		 <br>
		
         <ul>
             <li><a href="UserProfile.php">PROFILE</a></li>
             <li><a href="#">ABOUT</a></li>
             <li><a href="#">LOCATION</a></li>
             <li><a href="#">GROUP</a></li>
             <li><a href="#">NOTIFICATION</a></li>
			 <li><a href="logout.php">Log Out</a></li>

         </ul>		
			
		<?php 
		if(isset($_POST["submit"])){
		 $text=$_POST['postArea'];
		 
		
		}
		
		
		?>	



     <form action="UserHomePage.php" Method="Post">
	     <textarea rows="5" cols="100" name="postArea" placeholder="Write what's on your mind......."></textarea><br>
	     <button type="submit" class="btn btn-primary" name="submit" >Post</button><br>
     </form>
	 
	 </div>
	 </div>
	 
	 <div class="box2" align="center" id="txtHint">
	 </div>
	 

</body>

</html>