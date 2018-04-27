var price = 0;
$(document).ready(function(){
	$.ajax({
		url : "../apis/GenricData.php",
		data : {"layout" : "1005"},
		method: "POST",
		success: function(result){
		result = JSON.parse(result);
			$("#usefullinks").Plugin_Table({
	            resultData: result,
	            datatablerequired: true,
	            ClickColumns: "5"
			})
			$(".btn.btn-success.btn-xs.pull-right").html(result.tableData["0"].Category.length)
			 
		},
		error : function(result){
			console.log(result);
		}
	})
	$("#copies").on("keyup", function(){ 
		var num = $("#copies").val(), 
			amount = num * price; 
		$(".total").html(amount +" Rs ");
		localStorage.setItem("Amount", amount); 
	});	
})
function redirecttopage(jsonValue) { 
	localStorage.setItem("Amount", 0);
    var SelectedData = jsonValue.File_Name;
	price = jsonValue.Price; 
	$(".fileName").html(jsonValue.File_Name);
		$(".total").html(price+" Rs "); 
	$("#download").modal("show");			
}
