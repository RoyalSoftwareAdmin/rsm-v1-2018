var error = "";
		
$("#submit").on("click", function(){
	$(".error").html("");
	var name = $("#name").val(),
		lname = $("#lname").val(),
		email = $("#email").val(),
		password = $("#password").val(),
		gender = $('input[name=Gender]:checked').val(),
		repassword = $("#repassword").val(),
		flag = true;
	if((name === "" || name === undefined) || (!isalpha(name)) || !isalpha(lname)){
		error = "Name Should have only Alphabets";
		flag = false;
	}
	else if(email === "" || !ismail(email)){
		error = "Enter correct Mail Eg: mail@royalsoftwaresolution.com";
		flag = false;
	}
	else if(password === "" ||  !ispass(password)){
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
   else{
		$.ajax({
			url : "../apis/UserData.php",
			data : {"layout" : 1001, "fname" :name ,"lname":lname, "email": email, "password" : password , "gender" : gender},
			method : "POST",
			success: function(resultData){
		     result = JSON.parse(resultData);
			 if(result.Status == 1){
				$("#successModal").modal("show");
			 }	 
			 else{
			 	$(".modal-body").html(result.Status);
				$("#errModal").show();
				 }
			},
			error : function(error) {
				console.log(error.responseText);
				$(".modal-body").html(error.responseText);
				$("#errModal").show();
			}
			
			
		})
	}
})
			

$(document).ready(function(){
	$(".closeModal").on("click", function(){
		 window.location = "login.php";  
	})
})