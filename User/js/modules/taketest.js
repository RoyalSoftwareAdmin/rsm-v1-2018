$(document).ready( function(){
	var questionList = '';

	$(".username").html(JSON.parse(localStorage.getItem("session")).fname);
	var cat_id = localStorage.getItem("section");
	var div_id = localStorage.getItem("div");
	$.ajax({
	url : "../apis/GenricData.php",
	method : "POST",
	data : {"layout" : 1007 ,"cat_id" : cat_id , "div_id" : div_id},
	success : function(data){
		questionList = JSON.parse(data);
		var template = '' , template1 = '';
		for (var i = 0 ; i< (questionList.length/2) ; i++){
			template += '<div class="qtnleft"><button type="button" class="btn questionBtn"  data-val='+i+'>Question '+i+' </button><span><i class="fa fa-times"></i></span></div>'; 
		}
		for (var i = (questionList.length/2) ; i < questionList.length ; i++){
			template1 += '<div class="qtnright"><button type="button" class="btn questionBtn"  data-val='+i+'>Question '+i+'</button> <span><i class="fa fa-times"></i></span></div>'; 
		}

		$('#questionParentLeft').html(template);
		$('#questionParentRight').html(template1);
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
		  		$("#demo").css("color","#FF0000"); 
		} 
		if ( minutes == 0 ) { 
			$("#demo").addClass("blink_me");
		} 
		document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s "; 
		if (left < 0) { 
			 clearInterval(x); document.getElementById("demo").innerHTML = "You are Done!!"; 
		} 

	}, 1000); 

	$(document).on("click", '.questionBtn', function(){
		$(".question").html(questionList[$(this).data('val')].question);
	})
})
