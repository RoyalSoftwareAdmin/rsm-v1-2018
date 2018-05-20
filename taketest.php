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
	<script src="../js/modernizr.custom.js"></script>	
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts--> 

	<!-- chart -->
	<script src="../js/Chart.js"></script>
	<!-- //chart -->

	<!-- Metis Menu -->
	<link rel="stylesheet" href="../css/export.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/modules/taketest.css">
	<script type="text/javascript" src="js/common/common.js"></script>
	<script src="../js/pie-chart.js" type="text/javascript"></script>
	<script src="../js/owl.carousel.js"></script>
	<script src="../js/amcharts.js"></script>
	<script src="../js/serial.js"></script>
	<script src="../js/export.min.js"></script>
	<script src="../js/light.js"></script>
	<script src="../js/jquery.dataTables.js"></script>
	<script src="../js/dataTables.bootstrap.js"></script>
	<style>
</style>
</head>
<body>
	<div class="container" id="takeTest">
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<label class="userName">Name: <span></span> </label>
	        		<label class="cat_id">Category : <span></span> </label>
					<label class="division">Division : <span></span></label>
					<label class="left">Time Left : <span id='time'></span></label>
					<div class="saveExit"><button type="button" class="btn btn-primary">Save & Exit</button></div>
                </div>
             </div>
			</div>
		</div>
	
    <div class="container">
   <div class="row">
   
   	<div class="col-md-2 ">
      <div id="questionParentLeft"> </div>
   	</div>
   	<div class="col-md-8">
   		<div class="midle question"> </div>
   		 <div class="options col-md-12 choiceList">
   		 	<div class="col-md-6">
   				<label class=" op1 option1"> Choice 1 : <span></span> </label>
   			</div>
   			<div class="col-md-6 ">
   				<label class="op2 option2">  Choice 2 : <span></span></label>
   			</div>
          </div>
          <div class="options col-md-12 choiceList">
   		 	<div class="col-md-6">
   				<label class=" op1 option3"> Choice 3 : <span></span> </label>
   			</div>
   			<div class="col-md-6">
   				<label class="op2 option4">  Choice 4 : <span></span></label>
   			</div>
          </div>
     
            <div class="correctOption col-md-12">
            	<div class="col-md-3"><label>Choice 1</label><input type="radio" data-attr="option1" name="correctOption" checked></div>
	         	<div class="col-md-3"><label>Choice 2</label><input type="radio" data-attr="option2" name="correctOption"></div>
	         	<div class="col-md-3"><label>Choice 3</label><input type="radio" data-attr="option3" name="correctOption"></div>
	         	<div class="col-md-3"><label>Choice 4</label><input type="radio" data-attr="option4" name="correctOption"></div>
           </div>
   	
   	<div class="actionButtons col-md-12">
   		<button type="button" class="btn btn-success">Submit</button>
   		<button type="button" class="btn btn-primary">Review</button>
   	</div>
   </div>
   	<div class="col-md-2">
       <div id="questionParentRight">
   		 </div>
   	</div>





	</div>
	
</body>





<script type="text/javascript" src="js/common/lists.js"></script>
<script src ="js/modules/taketest.js"> </script>

   