  $(document).ready(function() {
    
           $cbs = $('input[name="checkbox"]').click(function() {
                if($cbs.is(":checked")) {
	                $("#sub button").removeAttr("disabled");	
	            }else{
	            	$("#sub button").attr("disabled", "disabled");	
	            }
            });
    	$(".btn").on("click", function(){
			 window.location.href = "UserDetails.php";  
		})

    });