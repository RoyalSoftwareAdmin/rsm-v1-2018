<!--
Author: Madhusudhana R K
Author URL: http://www.royalsoftwaresolution.com
License: Licence owned by Royal Softwares
License URL: http://www.royalsoftwaresolution.com/docs/licence.pdf
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Royal Skills Master  | SignUp Page </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Royal Skills Master Responsive web application, Know your skills, More skills test, know where you deserve in IT industry, Best experienced remarks" />
		<meta name="description" content="Royal Skills master  is the first and best platform to analyze your technical, analytical, logical, verbal, CA, GK , and so on skills. This is AI platform which read data from your input and present your skills output in data visusalization form. This helps Job aspirantas in IT industry , Govt sector , Non-Technical jobs and improve your skills set." />  
		<meta property="og:url"           content="https://www.royalsoftwaresolution.com" />
		  <meta property="og:type"          content="website" />
		  <meta property="og:title"         content="Royal Softwares" />
		  <meta property="og:description"   content="Royal Softwares is the  best software company in mysore." />
		  <meta property="og:image"         content="http://www.royalsoftwaresolution.com/wp-content/uploads/2018/01/mysexpo-12.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<script type="text/javascript" src="js/common/common.js"></script>
		<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/modules/signup.css">


	</head> 

	
	<body class="cbp-spmenu-push">
		
		<div class="main-content">
			
			<div class="logo1">
			<img src= "images/logo.png" />
		</div>
			<div id="page-wrapper">
				
				<div class="main-page signup-page">
					<h2 class="title1">SignUp Here</h2>
					<div class="sign-up-row widget-shadow">
						<h5>Personal Information :</h5>
						<div class="sign-u">
									<input type="text" name="firstname" id="name" placeholder="First Name" >
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
									<input type="text" id="lname" placeholder="Last Name" >
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
									<input type="email" id="email" placeholder="Email Address" >
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Gender* :</h4>
							</div>
							<div class="sign-up2">
								<label>
									<input type="radio" value="Male" checked="checked" name="Gender" >
									Male
								</label>
								<label>
									<input type="radio" value="Female" name="Gender" >
									Female
								</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<h6>Password Information <i class="fa fa-question" title="Minimum 8 characters with atleast one uppercase, lowercase , number and special character"></i></h6>
						<div class="sign-u">
							<input type="password" id="password" placeholder="Password"> <label></label>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
									<input type="password" id="repassword" placeholder="Confirm Password" >
						</div>
						<div class="sign-u error"></div>
							<div class="clearfix"> </div>
						<div class="sub_home">
								<input type="button" id="submit" value="Submit">
							
                          
							<div class="clearfix"> </div>
						</div>

						<div class="registration">
							Already Registered.
							<a class="" href="login.php">
								Login
							</a>
						</div>
						


					</div>
				</div>
			</div>
			
			

			<div class="modal fade in" id="errModal" tabindex="-1"  aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"> Data Saved Successfully !</h5>       
			        </button>
			      </div>
			      <div class="modal-body">
			        	Please check your mail for account confirmation link.
			      </div>				  
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary closeModal" data-dismiss="modal">Close</button>      
			      </div>
			    </div>
			  </div>
			</div>
		</div>


		<div class="footer">
		   <?php include("footer.php"); ?>
		</div>



		<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="gridSystemModalLabel">Registered Successfully</h4>
					</div>
					<div class="modal-body">
						<div class="row"> 
							Dear User, Your regstration is completed, Pease check your mail for varification code. 
						</div> 
					<div class="modal-footer">
						<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
						<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
</div>

<div class="lds-css ng-scope">
<div class="lds-spinner" style="100%;height:100%"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                          
		
		<script src="js/bootstrap.js"> </script>
		<script type="text/javascript" src="js/modules/signup.js"></script>	

	</body>
</html>