$(document).ready(function(){
var minimumOption = "", maximumOption ="", districtOption ="", cityOption ="", ugOption ="", pgOption ="", fromOption ="", toOption ="", fromOption1 = "", toOption1 ="";
  
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
  
   toList.forEach(function(k,r){
   toOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#toList").html(toOption);
  
  pgList.forEach(function(k,r){
   pgOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#pgList").html(pgOption);
  
  fromList1.forEach(function(k,r){
   fromOption1 += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#fromList1").html(fromOption1);
  
   toList1.forEach(function(k,r){
   toOption1 += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#toList1").html(toOption1);
    
	$.ajax({
        url: '../apis/AgentData.php',
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
                url: '../apis/AgentData.php',
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
            url: '../apis/AgentData.php',
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
})

