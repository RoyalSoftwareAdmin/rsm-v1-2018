<?php 
session_start();
	if( !isset($_SESSION["user"]) ){
        exit(header("Location: ../login.php"));
    }     
?>
<!--
Author: Madhusudhana R K
Author URL: http://www.royalsoftwaresolution.com

License: Licence owned by Royal Softwares

License URL: http://www.royalsoftwaresolution.com/docs/licence.pdf

-->

<!DOCTYPE HTML>
<html>
<head>
	<title>Royal Skills Master  | Home </title>
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

	
	<link href="../css/Bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/dataTables.bootstrap.css" rel='stylesheet' type='text/css' />

	
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	
	
	<link href="../css/font-awesome.css" rel="stylesheet"> 
	

	<link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	
	 
	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/modernizr.custom.js"></script>	
	
	<!--<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">-->
	

	<!-- chart -->
	<script src="../js/Chart.js"></script>
	<!-- //chart -->

	<!-- Metis Menu -->
	<script src="../js/metisMenu.min.js"></script>
	<script src="../js/custom.js"></script>
	<link href="../css/custom.css" rel="stylesheet">
	<link href="../css/owl.carousel.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../css/export.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/common/common.js"></script>
	<script src="../js/pie-chart.js" type="text/javascript"></script>
	<script src="../js/owl.carousel.js"></script>
	<script src="../js/amcharts.js"></script>
	<script src="../js/serial.js"></script>
	<script src="../js/export.min.js"></script>
	<script src="../js/light.js"></script>
	<script src="../js/jquery.dataTables.js"></script>
	<script src="../js/dataTables.bootstrap.js"></script>
	
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-cogs"></span> Royal <span class="dashboard_text">Skills Master</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>	

              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Skills Test</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
			        <li data-val="1"><a href="?file=technical"><i class="fa fa-angle-right"></i> Technical</a></li>
			 	    <li data-val="2"><a href="?file=analytical"><i class="fa fa-angle-right"></i> Analytical</a></li>
		        	<li data-val="3"><a href="?file=logical"><i class="fa fa-angle-right"></i> Logical</a></li>
		          	<li data-val="4"><a href="?file=aptitude"><i class="fa fa-angle-right"></i> Aptitude </a></li>
		          	<li data-val="5"><a href="?file=ca"><i class="fa fa-angle-right"></i> Current Affairs</a></li>
		          	<li data-val=" Company Specific"><a href="?file=cs"><i class="fa fa-angle-right"></i> Company Specific</a></li>
		          	<li data-val="6"><a href="?file=aio"><i class="fa fa-angle-right"></i> All in One</a></li>
            	</ul>
              </li>	
              <li class="treeview">

              	
                <a href="?file=reports">
                <i class="fa fa-pie-chart"></i>
                <span>Reports</span> 
               <button type="button" class="btn btn-danger btn-xs pull-right">new</button>
               
	              
                 </a>
               </li>	
              <li class="treeview">
                <a href="#">
                
                <i class="fa fa-user"></i>
                <span>My Account</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>

                
                <ul class="treeview-menu">
                  <li><a href="?file=general"><i class="fa fa-angle-right"></i> General</a></li>
                  <li><a href="?file=payment"><i class="fa fa-angle-right"></i> Payment</a></li>
                  <li><a href="?file=previous"><i class="fa fa-angle-right"></i> Previous Test</a></li>
                  <li><a href="?file=remarks"><i class="fa fa-angle-right"></i> Remarks</a></li>
                 
                </ul>
              </li>	
               <li class="treeview">
                <a href="?file=usefullinks">
                <i class="fa fa-link"></i>
                <span>Useful Links</span>
                <button type="button" class="btn btn-success btn-xs pull-right">08</button>
                </a>
               </li>	
               <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i>
                <span>Others</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a target="_blank" href="http://www.saleinmysore.com/"><i class="fa fa-angle-right"></i> Sale in Mysore</a></li>
                  <li><a target="_blank" href="http://www.mysoreshoppy.com/"><i class="fa fa-angle-right"></i> Mysore shoppy</a></li>
                   </ul>
              </li>	

            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->					
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"> </span>

									<div class="user-name">
										<p>User</p>
										<span class="loggeduser"></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="?file=settings"><i class="fa fa-cog"></i> Settings</a> </li> 
							<!-- 	<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>  -->
								<li> <a href="?file=profile"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="../logout.php" class="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
 	<!-- Main details  -->
 	 <div id="page-wrapper">
        <div class="main-page">
        	<div class="col_3">
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		               <i class="pull-left fa fa-dollar icon-rounded"></i>
		                <div class="stats">
		                  <div class="balance"><h5><strong class="curBal"></strong></h5></div>
		                  <span>Current Balance</span>
		                </div>
		            </div>
		        </div>

		       <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
		              <div class="stats" data-val="6">
		                	 <h5><strong>Ready</strong></h5>
		                  <span>Take Test</span>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-money user2 icon-rounded"></i>
		                <div class="stats">
		                <a href="?file=payment"> <h5><strong>Recharge</strong></h5>
		                  <span>Account</span></a>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
		                <div class="stats">
		                  <a href="?file=reports"> <h5><strong>Report</strong></h5>
		                  <span>Test Result</span></a>
		                </div>
		            </div>
		         </div>
		        <div class="col-md-3 widget">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
		                <div class="stats">
		                    <a href="?file=remarks"><h5><strong>Remark</strong></h5>
		                  <span>Your Skills</span></a>
		                </div>
		            </div>
		         </div>
		        <div class="clearfix"> </div>
		    </div>
		   
</script>