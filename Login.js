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
	

}
