$(document).ready(function(){
	companyListOption = '';
	companyList.forEach(function(k,r){
			companyListOption += "<option value='"+k.value+"'>"+k.name+"</option>";
		})
	$("#companyList").html(companyListOption);

	$("#submit").on("click", function(){
		console.log($("#companyList option:selected").val());
	})
})