$(document).ready(function(){
	$.ajax({
		url : "../apis/GenricData.php",
		data : {"layout" : "1010" , "userName":userName },
		method: "POST",
		success: function(result){
		result = JSON.parse(result);
			$("#report").Plugin_Table({
	            resultData: result,
	            datatablerequired: true,
	            //ClickColumns: "5",
			})
			//$(".btn.btn-success.btn-xs.pull-right").html(result.tableData["0"].Category.length)
			 
		},
		error : function(result){
			console.log(result);
		}
	})
})

