$(document).ready(function(){
var minimumOption = "", maximumOption ="", districtOption ="", cityOption ="", ugOption ="", pgOption ="", fromOption ="", fromOption1 = "", brOption = "";
  
  minimumList.forEach(function(k,r){
    minimumOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#minimumList").html(minimumOption);
  
    maximumList.forEach(function(k,r){
    maximumOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#maximumList").html(maximumOption);
  
   districtList.forEach(function(k,r){
   districtOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#districtList").html(districtOption);
  
   cityList.forEach(function(k,r){
   cityOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#cityList").html(cityOption);
  
   ugList.forEach(function(k,r){
   ugOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#ugList").html(ugOption);
  
  
  fromList.forEach(function(k,r){
   fromOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#fromList").html(fromOption);
  
  pgList.forEach(function(k,r){
   pgOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#pgList").html(pgOption);
  
  fromList1.forEach(function(k,r){
   fromOption1 += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#fromList1").html(fromOption1);
  
  brList.forEach(function(k,r){
    brOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#brList").html(brOption);
  
	$.ajax({
        url: '../apis/AdminData.php',
        type: 'POST',
        data : {"layout" : "1004"},
        success: function (data) {
           data = JSON.parse(data);
           var categoryoptions = '';
           data.forEach(function(k) {
                categoryoptions += '<option value='+k.cat_id+'>'+k.cat_name+'</option>';
           })
           $("#SelectCategory").html(categoryoptions);
           var cat_id = $("#SelectCategory :selected").val();
            $.ajax({
                url: '../apis/AdminData.php',
                type: 'POST',
                data : {"layout" : "1005", "cat_id" : cat_id},
                success: function (result) {
                    result = JSON.parse(result);
                   var divisionoptions = '';
                       result.forEach(function(k) {
                            divisionoptions += '<option value='+k.div_id+'>'+k.div_name+'</option>';
                       })
                       $("#SelectDivision").html(divisionoptions);
                },
                error : function(error){
                    console.log(error);
                }
            });
        },
        error : function(error){
            console.log(error);
        }
    });
    $("#SelectCategory").change(function(){
        var cat_id = $("#SelectCategory :selected").val();
        $.ajax({
            url: '../apis/AdminData.php',
            type: 'POST',
            data : {"layout" : "1005", "cat_id" : cat_id},
            success: function (result) {
                result = JSON.parse(result);
               var divisionoptions = '';
                   result.forEach(function(k) {
                        divisionoptions += '<option value='+k.div_id+'>'+k.div_name+'</option>';
                   })
                   $("#SelectDivision").html(divisionoptions);
            },
            error : function(error){
                console.log(error);
            }
        });
    })
	
	$("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
       var $box = $(this);
       if ($box.is(":checked")) {
         // the name of the box is retrieved using the .attr() method
         // as it is assumed and expected to be immutable
         var group = "input:checkbox[name='" + $box.attr("name") + "']";
          // the checked state of the group/box on the other hand will change
         // and the current value is retrieved using .prop() method
         $(group).prop("checked", false);
         $box.prop("checked", true);
      } 
	   else
		   {
            $box.prop("checked", false);
           }
    });
	
	 $('#districtList').change(function(){ 
			$('#cityList').val( $(this).val() ) 
		})
		
	$('value:"BE" ').change(function(){ 
			$('#brList').show();
		})	
	
})
