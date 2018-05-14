

	 	var countDownDate = new Date().getTime(); 
	 	var x = setInterval(function() 
	 		{ 
	 			var now = new Date(); now.setMinutes(now.getMinutes() - 30); 

	 			now = now.getTime(); 
	 			var left = countDownDate - now;
	 			 var minutes = Math.floor((left % (1000 *60 *60)) / (1000 * 60)); 
	 			 var seconds = Math.floor((left % (1000 * 60)) / 1000);
	 			  if ( minutes == 3 ) 
	 			  	{ 
	 			  		$("#demo").css("color","#FF0000"); 
	 			} 
	 			if ( minutes == 0 ) 
	 				{ 
	 					$("#demo").addClass("blink_me");
	 					 } 
	 					 document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s "; 
	 					 if (left < 0) 
	 					 	{ 
	 					 		clearInterval(x); document.getElementById("demo").innerHTML = "You are Done!!"; 
	 					} 

	 				}, 1000); 

				
var Question = ""; 
for ( var i = 1 ; i<= 15 ; i++) 
	{ 
	Question += '<div class="qtnleft"><a href=""><button type="button" class="btn btn-link"  data-val=class'+i+'>Question '+i+' <span><img src="../images/wrong.jpg" style="width:30px";></span></button></a></div>'; 
 }
	$("#questionParent").html(Question);

  	var Question = ""; 
for ( var i = 16 ; i<= 30 ; i++) 
	{ 
		Question += '<div class="qtnright"><a href=""><button type="button" class="btn btn-link"  data-val=class'+i+'>Question '+i+' <span><img src="../images/wrong.jpg" style="width:30px";></span></button></a></div>';
		
	} 
	$("#questionParent1").html(Question);


	$(document).ready( function(){
	$(".username").html(JSON.parse(localStorage.getItem("session")).fname);
	var cat_id = localStorage.getItem("section");
var div_id = localStorage.getItem("div");

$.ajax({
url : "../apis/GenricData.php",
method : "POST",
data : {"layout" : 1007 ,"cat_id" : cat_id , "div_id" : div_id},
success : function(data){

}

})
})


	





	/*$(document).ready(function(){
var cat_id = localStorage.getItem("section");
var div_id = localStorage.getItem("div");


/*$.ajax({
url : "../apis/GenricData.php",

data : {"layout" : 1008 ,"cat_id" : cat_id , "div_id" : div_id },
success : function(data){
 console.log(data);
}

})

})*/




	