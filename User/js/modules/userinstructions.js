              $(document).ready(function(){
           $cbs = $('input[name="checkbox"]').click(function() {
                if($cbs.is(":checked")) {
	                $("#sub button").removeAttr("disabled");	
	            }else{
	            	$("#sub button").attr("disabled", "disabled");	
	            }
            });


    	$(".btn").on("click", function(){
		

         var user = JSON.parse(localStorage.getItem("session"));
              
                 if ( user == null)
                 {
             window.location.href ="UserDetails.php";
                    }
                else
                      {
          window.location.href = "taketest.php";
                }
})

    });