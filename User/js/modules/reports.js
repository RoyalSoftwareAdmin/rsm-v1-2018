
var data ;
$(document).ready(function(){
	$('.ng-scope').show();
      $.ajax({
		url : "../apis/GenricData.php",
		data : {"layout" : "1010" , "userName":userName },
		method: "POST",
		success: function(result){
			$('.ng-scope').hide();
		result = JSON.parse(result);
		data = result;
			$("#report").Plugin_Table({
	            resultData: result,
	            datatablerequired: true,
	             })
		},
		error : function(result){
          console.log(result);
          $('.ng-scope').hide();
		}
	  });

	 $("#barchart").ChartPlugin({
		        resultData : data,
		        multipleYaxis: true,
		        OutputType: 2,
		        Refreshtime: 200000
		    });


})







