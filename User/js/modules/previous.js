var error = "";
		
$("#submit").on("click", function(){
	$(".error").html("");
	var password = $("#password").val(),
		repassword = $("#repassword").val(),
		flag = true;
	
	 if(password === "" ||  !ispass(password)){
		error = "password should be minimum 8 letters with atleast 1 uppercase, lowercase, number and special character ";
		flag = false;
	}
	else if(repassword === "" ){
		error = 'Password cannot be blank';
		flag = false;
	}
	else if(repassword !== "" ){
		if(password !== repassword) {
			error = "Password mismatch" ;
			flag = false;
		}else{
			error = "";					
		}
	}else{
		error = "Enter Re-Password";
		flag = false;
	}

	if(!flag){
		$(".error").html(error).css({"color":"#FF0000" , "font-weight":"bold" , "text-align": "center" , "margin": "10px 0px"});
       }
  
})
			

