window.onload=function(){
	var namefield=document.getElementById("name");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Name Cant be blank");
		}
	}
	
		var namefield=document.getElementById("email");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Email Cant be blank");
		}
	}
	
		var namefield=document.getElementById("password");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Password Cant be blank");
		}
		else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))) {
			 alert("You have entered an invalid email address!");
		};
		
	}
	
		var namefield=document.getElementById("r_password");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Retype password Cant be blank");
		}
	}
	
	
		var namefield=document.getElementById("birthday");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Birthday Cant be blank");
		}
	}
	
	
		var namefield=document.getElementById("location");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Location Cant be blank");
		}
	}
	
	
		var namefield=document.getElementById("name");
	namefield.onblur=function(){
		if(namefield.value==""){
			alert("Name Cant be blank");
		}
	}
}
