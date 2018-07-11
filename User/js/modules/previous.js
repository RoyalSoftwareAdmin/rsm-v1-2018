var data ;
$(document).ready(function(){
	$('.ng-scope').show();
      $.ajax({
		url : "../apis/GenricData.php",
		data : {"layout" : "1010" , "userName": userName},
		method: "POST",
		success: function(result){
			$('.ng-scope').hide();
			result = JSON.parse(result);
			//data = result;
			$("#report").Plugin_Table({
	            resultData: result,
	            datatablerequired: true,
				ClickColumns: "4",
	         });
		},
		error : function(result){
          console.log(result);
          $('.ng-scope').hide();
		}
	});
}) 
function redirecttopage(jsonValue){
  $("#View").modal("show");
	$.ajax({
		url : "../apis/GenricData.php",
		data : {"layout" : "1014" , "userName":userName , "test_date": jsonValue ["Test_Date"] },
		method: "POST",
		success: function(result){
			$('.ng-scope').hide();
			result = JSON.parse(result);
			$("#columnchart").ChartPlugin({
		        resultData : result,
		        multipleYaxis: true,
				ChartType: "column",
		        OutputType: 2,
		        Refreshtime: 200000
		    });
	}
  })
	  
}



