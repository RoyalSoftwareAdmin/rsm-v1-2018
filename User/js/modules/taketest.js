$(document).ready( function(){
	var ResponseData = '';
	$(".userName span").html(JSON.parse(localStorage.getItem("session")).fname);
	var cat_id = localStorage.getItem("section");
	var div_id = localStorage.getItem("div");
	
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
			for (var i = 0 ; i< (ResponseData.length/2) ; i++){
				template += '<div class="qtnleft questionParent"><button type="button" class="btn questionBtn question'+(i+1)+'"  data-val='+i+'>Question '+(i+1)+' </button><span><i class="fa fa-times"></i></span></div>';
				
			}
			for (var i = (ResponseData.length/2) ; i < ResponseData.length ; i++){
				template1 += '<div class="qtnright questionParent"><button type="button" class="btn questionBtn question'+(i+1)+'"  data-val='+i+'>Question '+(i+1)+'</button> <span><i class="fa fa-times"></i></span></div>'; 
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
			 clearInterval(x); document.getElementById("time").innerHTML = "You are Done!!"; 
		} 

	}, 1000); 

	$(document).on("click", '.questionBtn',  function(){
		$(".question").html(ResponseData[$(this).data('val')].question);
		$(".option1 span").html(ResponseData[$(this).data('val')].option1);
		$(".option2 span").html(ResponseData[$(this).data('val')].option2);
		$(".option3 span").html(ResponseData[$(this).data('val')].option3);
		$(".option4 span").html(ResponseData[$(this).data('val')].option4);
		$(".questionParent").each(function(k, div){
			$(div).removeClass('active');
		})
		$('.question'+($(this).data('val')+1)).parent().addClass('active');
	})
})
