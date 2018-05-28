$(document).ready( function(){
	var ResponseData = '';
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
				template += '<div class="qtnleft questionParent"><input type="hidden" name="correct_option" data-val="'+ResponseData[i].correct_option+'"><input type="hidden" name="correct_answer" data-val="'+ResponseData[i].writtenanswer+'"><button type="button" class="btn questionBtn question'+(i+1)+'"  data-val='+ResponseData[i].test_id+'>Q '+(i+1)+' </button></div>';
				
			}
			for (var i = (ResponseData.length/2) ; i < ResponseData.length ; i++){
				template1 += '<div class="qtnleft questionParent"><input type="hidden" name="correct_option" data-val="'+ResponseData[i].correct_option+'"><input type="hidden" name="correct_answer" data-val="'+ResponseData[i].writtenanswer+'"><button type="button" class="btn questionBtn question'+(i+1)+'"  data-val='+ResponseData[i].test_id+'>Q '+(i+1)+'</button></div>'; 
			}
			$('#questionParentLeft').html(template);
			$('#questionParentRight').html(template1);	
			$(".question").html(ResponseData[0].question);
			$(".option1 span").html(ResponseData[0].option1);
			$(".option2 span").html(ResponseData[0].option2);
			$(".option3 span").html(ResponseData[0].option3);
			$(".option4 span").html(ResponseData[0].option4);
			$('.question1').parent().addClass('active');
		}


	})

	var countDownDate = new Date().getTime(); 
 	var x = setInterval(function(){ 
		var now = new Date(); now.setMinutes(now.getMinutes() - 30); 

		now = now.getTime(); 
		var left = countDownDate - now;
		 var minutes = Math.floor((left % (1000 *60 *60)) / (1000 * 60)); 
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
			
			
			} 
			

    }, 1000); 

   $(document).on("click", '.questionBtn',  function(){
		$(".question").html(ResponseData[($(this).data('val')-1)].question);
		if (ResponseData[($(this).data('val')-1)].correct_answer.length  == 0) {
			$(".enteredAnswerParent").hide();
			$(".option1 span").html(ResponseData[($(this).data('val')-1)].option1);
			$(".option2 span").html(ResponseData[($(this).data('val')-1)].option2);
			$(".option3 span").html(ResponseData[($(this).data('val')-1)].option3);
			$(".option4 span").html(ResponseData[($(this).data('val')-1)].option4);
		} else{
			$(".choiceListParent").hide();
			$(".enteredAnswerParent").css("display","block");
		}
		$(".questionParent").each(function(k, div){
			$(div).removeClass('active');
		})
		$('.question'+$(this).data('val')).parent().addClass('active');
	})

	$(".submit").on("click", function(){
		$(".active span i").removeClass("fa-times").addClass("fa-check").closest('.questionParent').find("button").prop("disabled", true);
			$(".active").css("background-color","green");
       
		var test_id = $(".active button").data("val"),
			correct_option = $(".active input[name='correct_option']").data("val"),
			entered_option = $(".correctOption input:checked").val(),
			correct_answer = $(".active input[name='correct_answer']").data("val"),
			entered_answer = $(".enteredAnswer").val();
			
		$('.question'+(test_id+1)).click();


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
	})

	$(".review").on("click", function(){
		$(".active").css("background-color","red");
	})

	/*$(".submit")on("click", function(){
		$(".active").css("color","green");
	})*/

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


})
