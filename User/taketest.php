<?php 
session_start();
 /* if( !isset($_SESSION["user"]) ){
        exit(header("Location: userDetails.php"));
    } 
    echo "taketest";  */  
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>taketest</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


	
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	<!-- Bootstrap Core CSS -->
	<link href="../css/Bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/dataTables.bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons CSS -->
	<link href="../css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->

     
	 <!-- js-->
	<script src="../js/jquery-1.11.1.min.js"></script>
	<!--<script src="../js/modernizr.custom.js"></script>	
	webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts--> 

	<!-- chart -->
	<!--<script src="../js/Chart.js"></script>
	 //chart -->

	<!-- Metis Menu -->
	<link rel="stylesheet" href="../css/export.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/modules/taketest.css">
	</style>
</head>
<body>
	<div class="container col-md-12" id="takeTest">
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<label class="userName">Name: <span></span> </label>
	        		<label class="cat_id">Category : <span></span> </label>
					<label class="division">Division : <span></span></label>
					<label class="left">Time Left : <span id='time'></span></label>
    				 
    				 <!--<div class="saveExit"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#successModal_id" data-whatever="@mdo" >Save & Exit</button></div>-->
    				  <div class="saveExit"><button type="button" class="btn btn-primary save" >Save & Exit</button></div>
    				
                </div>
             </div>
			</div>
		</div>
	
    <div class="container col-md-12">
		<div class="row">
		   
		   	<div class="col-md-4">
		   

		      <div class="QuestionButtonsParent">
			  <div id="questionParentLeft">
			  <div class="qtnleft questionParent"></div>
			  </div> 
			  <div class="lab1 la1">Total Answered :<span></span></div>
			  <div class="lab1 la2">Total UnAnswered :<span></span></div>
			  <div class="lab1 la3">Total Review Pending :<span></span></div>
			  </div>
		      
		   	</div>
		   	
		   	 <div class="col-md-8">
		   		<div class="question col-md-12"> </div>
		   		<div class="choiceListParent col-md-12">
		   			<div class="options choiceList">
		   		 	    <div class="col-md-6">
				        	<input type="radio" data-attr="option1" value="option1" name="correctOption" class="radio"> <label class=" op1 option1"> <span></span> </label>
				        </div>
				        <div class="col-md-6 ">
				   			<input type="radio" data-attr="option2" value="option2" name="correctOption" class="radio"><label class="op2 option2"> <span></span></label>
				   			</div>
				    </div>
			   			
		       
			        <div class="options choiceList">
			   		 	<div class="col-md-6">
			   				<input type="radio" data-attr="option3" value="option3" name="correctOption" class="radio"><label class="op1 option3">  <span></span> </label>
			   			</div>
			   			<div class="col-md-6">
			   				<input type="radio" data-attr="option4" value="option4" name="correctOption" class="radio"><label class="op2 option4">   <span></span></label>
			   			</div>
			   		</div>
			    </div>
			  
			   	 <div class="col-md-12 enteredAnswerParent" style="display: none">
			   	 	<div class="textareaDiv">
			   	 	  
					    <textarea class="enteredAnswer"></textarea>
					</div>
				</div>
		     
		   	<div class="actionButtons col-md-12">
		   		<button type="button" class="btn btn-success submit" disabled="disabled">Submit</button>
				<button type="button" class="btn btn-primary review">Review</button>
				   	
		  	</div>
   </div>

</div>



<div class="modal fade in" id="successModal_id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					
					<div class="modal-body">
						<div class="row">
							</div>
					<div class="modal-footer">
						<a href="index.php"><button type="button" class="btn btn-success">OK</button></a>
						 
						<button type="button" class=" btn btn-danger exit" data-dismiss="modal">Close</button>
                             </div>
					</div>
				
			</div>
		</div>
      </div>

     
</body>
<script>
window.onload=function()
{
setInterval(function(){ 

$("#closemodal").click();
}, 3000);

}
</script> 



<script type="text/javascript" src="js/common/lists.js"></script>
<script src ="js/modules/taketest.js"> </script>