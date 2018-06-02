var ResponseData = '';
$(document).ready( function(){
	var userName = JSON.parse(localStorage.getItem("session")).userName;
	var cat_id = localStorage.getItem("section");
	var div_id = localStorage.getItem("div");
	$(".userName span").html(JSON.parse(localStorage.getItem("session")).fname);
	
	$.ajax({
		url : "../apis/GenricData.php",
	method : "POST",
	data : {"layout" : 1008 ,"cat_id" : cat_id , "div_id" : div_id},
	success : function(data){
		Response = JSON.parse(data);
		$('.cat_id span').html(Response.cat_name);
		$('.division span').html(Response.div_name);
		},
	error : function(){
		console.log("error");
	}

	})

	$.ajax({
	url : "../apis/GenricData.php",
	method : "POST",
	data : {"layout" : 1007 ,"cat_id" : cat_id , "div_id" : div_id},
	success : function(data){
			ResponseData = JSON.parse(data);
			
			var template = '' , template1 = '';
			for (var i = 0 ; i< (ResponseData.length) ;  i++){
				template += '<div class="qtnleft questionParent"><input type="hidden" name="correct_option" data-val="'+ResponseData[i].correct_option+'"><input type="hidden" name="correct_answer" data-val="'+ResponseData[i].writtenanswer+'"><button type="button" class="btn questionBtn question'+i+'"  data-id='+i+' data-val='+ResponseData[i].test_id+'>Q '+(i+1)+' </button></div>';
			}
			//$('#questionParentLeft').html(template);
			$('#questionParentLeft').html(template);
			$('.question0').click();
			$(".question").html(ResponseData[0].question);
			//$('.question0').parent().addClass('active');
			$('.la1 span, .la3 span').html(0);
			$('.la2 span').html(ResponseData.length);
		}


	})

	var countDownDate = new Date().getTime(); 
 	var x = setInterval(function(){ 
		var now = new Date(); now.setMinutes(now.getMinutes() - 30); 

		now = now.getTime(); 
		var left = countDownDate - now;
		 var minutes = Math.floor((left % (1000 * 60 * 60)) / (1000 * 60)); 
		 var seconds = Math.floor((left % (1000 * 60)) / 1000);
		  if ( minutes == 3 ) 
		  	{ 
		  		$("#time").css("color","#FF0000"); 
		} 
		if ( minutes == 0 ) { 
			$("#time").addClass("blink_me");
		} 
		document.getElementById("time").innerHTML = minutes + "m " + seconds + "s "; 
		if (left < 0) { 
			
			clearInterval(x); 
			document.getElementById("time").innerHTML = "You are Done!!";
			$('#successModal_id').show();
				
			$(".modal-body .row").html( " Thank You For Attending The Test <br />Successfully Completed Your Test");
			$(".btn-danger").css( "visibility", "hidden");
			
			} 
			

    }, 1000); 

   $(document).on("click", '.questionBtn',  function(){
		$(".question").html(ResponseData[($(this).data('id'))].question);
		if (ResponseData[($(this).data('id'))].correct_answer.length  == 0) {
			$(".enteredAnswerParent").hide();
			$(".option1 span").html(ResponseData[($(this).data('id'))].option1);
			$(".option2 span").html(ResponseData[($(this).data('id'))].option2);
			$(".option3 span").html(ResponseData[($(this).data('id'))].option3);
			$(".option4 span").html(ResponseData[($(this).data('id'))].option4);
			$(".choiceListParent").show();
            $(".submit").attr("disabled","disabled")
		} else{

$(".submit").removeAttr("disabled")
			$(".choiceListParent").hide();
			$(".enteredAnswerParent").css("display","block");

		}

		$(".questionParent").each(function(k, div){
			$(div).removeClass('active');
		})
		$('.question'+$(this).data('id')).parent().addClass('active');

		$(".choiceListParent input[type='radio']").prop('checked',false);
	    
	})
  

	$(".submit").on("click", function(){
		var test_id = $(".active button").data("val"),
			click_id = $(".active button").data("id"),
			correct_option = $(".active input[name='correct_option']").data("val"),
			entered_option = $(".choiceListParent input:checked").val(),
			correct_answer = $(".active input[name='correct_answer']").data("val"),
			entered_answer = $(".enteredAnswer").val();
			entered_option = (entered_option == undefined) ? 'Null' : entered_option;
		$.ajax({
			url : "../apis/GenricData.php",
		method : "POST",
		data : {"layout" : 1009 ,"userName":userName, "cat_id" : cat_id , "div_id" : div_id , "test_id" : test_id , "correct_option" : correct_option, "entered_option" : entered_option, "correct_answer" : correct_answer, "entered_answer" : entered_answer},
		success : function(data){
				console.log(data);
			},
	
		error : function(){
			console.log("error");
		}

		})
		$(".question"+click_id).prop("disabled", "true").parent().addClass("submitted");
		$('.question'+(click_id+1)).click();
		$(".la1 span").html((parseInt($(".la1 span").html())+1));
          $(".la2 span").html((parseInt($(".la2 span").html())-1));
        if(parseInt($(".la1 span").html()) == ResponseData.length){
			$('#successModal_id').show();
			$(".modal-body .row").html( " Thank You For Attending The Test <br />Successfully Completed Your Test");
			
			$(".btn-danger").css( "visibility", "hidden");
			
		}

	})

	$(".review").on("click", function(){
		$(".active").addClass("review");
		$(".question"+($(".active button").data("id") +1)).click();
		$(".la3 span").html((parseInt($(".la3 span").html())+1));
		$(".la2 span").html((parseInt($(".la2 span").html())-1));
	})

	   var $radio = $("input:radio");
       $radio.change(function () {
         if ($radio.filter(':checked').length > 0) {
        $(".submit").removeAttr("disabled");
          } 
          else 
          {
        $(".submit").attr("disabled", "disabled");
       }
      });
       
       $(".save").on("click",function(){
			$("#successModal_id").show();
			
			$(".modal-body .row").html( " Thank You For Attending The Test <br />Are you sure you want to exit");
			$(".modal-body .row").css( "color","#0DA8EA");
			$(".btn-danger").css( "visibility", "visible");
		})

       

       	 	

 $(".exit").on("click",function(){
 $("#successModal_id").hide();
})
	 
	 

	
})