var error = "";
var email = JSON.parse(localStorage.getItem("session")).email;
var amount = localStorage.getItem("Amount");
$(document).ready(function(){
$.ajax({
		 	url : "../apis/GenricData.php",
		 	data : {"layout" : "1004" , "email":email},
		 	method: "POST",
		 	success: function(result){
				result = JSON.parse(result);
				$("#firstname").val(result.Name);
				$("#email").val(result.EMail);
				$("#add1").val(result.Location);
				$("#phone").val(result.Mobile_Number);
        if (amount !== null || amount == 0){
          $("#amt").val(amount);
        }
		 		console.log(result);
		 	},
		 	error : function(result){
		 		console.log(result);
		 	}
	})
})