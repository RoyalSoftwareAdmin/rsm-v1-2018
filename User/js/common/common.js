


var isalpha = function (val){
	if(val != "" || val != undefined){
		var pattern = /^[a-zA-Z ]{2,30}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}

var isnum = function (val){
	if(val != "" || val != undefined){
		var pattern = /^[789]\d{9}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}


var regex = function (val){
	if(val != "" || val != undefined){
		var pattern =  /^[1-9]\d{5}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}
var isusn = function (val , pattern){
	if(val != "" || val != undefined){
		//var pattern =  /^[1-4][A-Z]{2}[0-9]{2}[A-Z]{3}[0-9]{2}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}
var ismail = function (val){
	if(val != "" || val != undefined){
		var pattern = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}

var ispass = function(val){
	if(val != "" || val != undefined){
		var pattern = /(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}


var uid = function(val){
	if(val != "" || val != undefined){
		var pattern = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{3,100}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}
var isaadhar = function (val){
	if(val != "" || val != undefined){
		var pattern = /^[0-9 ]{12}$/;
		var res = (val.match(pattern)) ?  true : false;
		return res;
	}
}





$(document).ready(function() {

	var height = window.outerHeight;

	var reheight = window.innerHeight;

	$(document)[0].oncontextmenu = function() { return false; }



    $(document).mousedown(function(e) {

        if( e.button == 2 ) {

            return false;

        } else {

            return true;

        }

    });

    $(document).keydown(function(e){

	    if(e.which === 123){

	       return false;

	    }

	});

	$( window ).resize(function() {

		var reheight = window.innerHeight;

		// if((height - reheight) > 100 ){
	 //  		$("body").html("<div class='thief'><div class='thiefMsg'> Your IP ("+ip+") is watching, Don't try to hack </div></div>");
		// 	setTimeout(function(){
		// 		window.location = "http://www.royalsoftwaresolution.com"
		// 	},1000);
	 //  	}

	});

	// if((height - reheight) > 100 ){
 //  		$("body").html("<div class='thief'><div class='thiefMsg'> Your IP ("+ip+") is watching, Don't try to hack </div></div>");
	// 	setTimeout(function(){
	// 		window.location = "http://www.royalsoftwaresolution.com"
	// 	},1000);

 //  	}
   	$(".logout").on("click", function(){
   		localStorage.clear()
   		$.ajax({
		 	url : "../apis/GenricData.php",
		 	data : {"layout" : "logout"},
		 	method: "POST"
		 })
   	})
}); 
var error = "";
var email = JSON.parse(localStorage.getItem("session")).email;
var amount = localStorage.getItem("Amount");
var userName = JSON.parse(localStorage.getItem("session")).userName;
var balance = localStorage.getItem("balance");

$(document).ready( function(){
	$(".loggeduser").html(JSON.parse(localStorage.getItem("session")).fname);

	if (JSON.parse(localStorage.getItem("session")).gender == "Male" ) 
	{ 
		$(".prfil-img").html('<img src="../images/male.png" alt="">'); 
	} 
		else 
		{ 
			$(".prfil-img").html('<img src="../images/female.png" alt="">'); 
	}

	$('.treeview-menu li').on('click',function(){
		localStorage.setItem('section', $(this).attr('data-val'))
	})
	$(".divParent button").on("click", function(){
		localStorage.setItem('div', $(this).attr('data-val'))
	})

	$('.item').on('click', function(){
		localStorage.setItem('section', $(this).attr('data-val'))
	})


$('.stats').on('click',function(){
		localStorage.setItem('section ', $(this).attr('data-val'));
		localStorage.setItem('div ', "29");
		window.location = "userinstructions.php";
	})



$.ajax({
		 	url : "../apis/GenricData.php",
		 	data : {"layout" : "1011" , "userName" : userName},
		 	method: "POST",
		 	success: function(result){
				result = JSON.parse(balance);
				$('.balance span').html(result);
				
		 		console.log(result);
		 	},
		 	error : function(result){
		 		console.log(result);
		 	}
	})
})












/*$(document).ready( function(){
	$.ajax({
		url : "../apis/GenricData.php",
	method : "POST",
	data : {"layout" : 1011 ,"userName" : userName },
	success: function(result){
		result = JSON.parse(result);
		$('.balance').val(result.balance);
		
	error : function(result)
	{
			console.log(result);
	}
	
	
	})
})*/

