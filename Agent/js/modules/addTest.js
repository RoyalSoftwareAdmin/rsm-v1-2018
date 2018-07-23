$(document).ready(function(){
 
  var userName = JSON.parse(localStorage.getItem("session")).userName;
  
   /*var  entertitle = $("#entertitle").val(),
       minimumList = $("#minimumList").val(),
        maximumList = $("#maximumList ").val(),
      skills = $("#skills").val(),
        startdate = $("#startdate").val(),
         enddate = $("#enddate").val(),*/
    // Creating dropdowns for the list items
  var minimumOption = "", maximumOption ="";
  minimumList.forEach(function(k,r){
    minimumOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#minimumList").html(minimumOption);

  maximumList.forEach(function(k,r){
    maximumOption += "<option value='"+k.value+"'>"+k.name+"</option>";
  })
  $("#maximumList").html(maximumOption);


    $(".submit").on("click", function(){
      title = $("#entertitle").val(),
     condition = $("#idcheck").val(),
      min_yoe = $("#minimumList").val(),
      max_yoe = $("#maximumList ").val(),
      start_date= $("#startdate").val(),
      end_date = $("#enddate").val(),
      skills_required = $("#skills").val(),
      
     $.ajax({
    url : "../apis/AgentData.php",
     method: "POST",
    data : {"layout" : "3001", "userName":userName ,"title":title , "condition":condition ,
    "min_yoe": min_yoe , "max_yoe": max_yoe ,"start_date" : start_date , "end_date" :end_date ,
    "skills_required" : skills_required },
     success : function(data){
    
        console.log(data);
     
},
    error : function(){
      console.log("error");
    }

       });
   
   
  });
    
    $('#idcheck').change(function(e){
        if(this.checked){
          $(".year").show();
          $(".skills").show();
        }
        else{
            $(".year").hide();
             $(".skills").hide();
            
        }
            
    });
})


 


