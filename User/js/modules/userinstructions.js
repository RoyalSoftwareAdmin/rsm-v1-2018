  $(document).ready(function() {
    
        var $submit = $("#sub").hide(),
            $cbs = $('input[name="checkbox"]').click(function() {
                $submit.toggle( $cbs.is(":checked") );
            });
    
    });

$(document).ready(function(){
	$(".btn").on("click", function(){
		 window.location.href = "UserDetails.php";  
	})
})