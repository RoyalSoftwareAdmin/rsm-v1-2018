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
  label  {
  
 margin:auto 0 ;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top">
				<label class="name">Name:</label>
        <label class="username"></label>
				<label class="cat">Category :</label>
            <label id="cat_id"></label>

				<label class="vision">Division :</label>
        <label class="div"></label>
				<label class="left">Time Left :</label>
				
				<p id="demo"></p> 
	
				<button type="button" class="btn btn-link btn1" >Save & Exit</button>
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
   		
   		          
             <div class="option">
   			<label class=" op1 option1"> Option 1 :<span></span> </label>
   			
   			<label class="op2 option2"> Option 2 : <span></span></label>
          </div>
          <div class="options">
   			<label class="op3 option3"> Option 3 : <span></span></label>
   			<label class="op4 option4"> Option 4 : <span></span></label>
          </div>
     
      
  
            
          <div class="rad">
          	<label class="r1"><input type="radio" name="optradio">Option 1</label>
          	<label class="r2"><input type="radio" name="optradio">Option 2</label>
          	<label class="r3"><input type="radio" name="optradio">Option 3</label>
          	<label class="r4"><input type="radio" name="optradio">Option 4</label>
          </div>
   	
   	<div class="buttons">
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

   