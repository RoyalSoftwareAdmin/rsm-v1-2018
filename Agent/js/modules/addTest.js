$(document).ready(function(){
 
  var userName = JSON.parse(localStorage.getItem("session")).userName;
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

      var error = "";
    $(".submit").on("click", function(){
      $("#error").html("");
      title = $("#entertitle").val(),
     condition = $("#idcheck").val(),
      min_yoe = $("#minimumList").val(),
      max_yoe = $("#maximumList ").val(),
      start_date = $("#startdate").val(),
      end_date = $("#enddate").val(),
      skills_required = $("#skills").val(),
      flag = true;
  if((title === "" || title === undefined) || (title == " " )){
    error = "title cannot be blank";
    flag = false;
  }
  else if(min_yoe >= max_yoe ){
    error = " minimum year cannot be greater than maximum year";
    flag = false;
  }
  else if((skills_required === "" ||  skills_required === undefined) || (skills_required == " " )){
    error = "skills cannot be blank";
    flag = false;
  }
   else if(start_date >= end_date ){
    error = "start date cannot be greater than end date";
    flag = false;   
  }
   if(!flag){
    $("#error").html(error).css({"color":"#FF0000" , "font-weight":"bold" , "margin": "10px 0px"});
       }
   else{
      
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
   }
   
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


 
