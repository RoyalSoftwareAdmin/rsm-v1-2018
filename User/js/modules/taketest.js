

var Question = ""; 
for ( var i = 1 ; i<= 15 ; i++) 
	{ 
		Question += '<div class="qtnleft"><a href=""><button type="button" class="btn btn-link" data-val=class'+i+'>Question '+i+'</button></a></div>'; 
	} 
	$("#questionParent").html(Question);

  	var Question = ""; 
for ( var i = 16 ; i<= 30 ; i++) 
	{ 
		Question += '<div class="qtnright"><a href=""><button type="button" class="btn btn-link" data-val=class'+i+'>Question '+i+'</button></a></div>'; 
	} 
	$("#questionParent1").html(Question);



	