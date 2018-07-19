<?php 
	include_once("header.php");  
?>
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!-- Main details  -->
 	 <div id="page-wrapper">
        <div class="main-page">
			<div class="row">
				<div class="col_3">
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		               <i class="pull-left fa fa-dollar icon-rounded"></i>
		                <div class="stats">
		                  <!--<h5><strong>200 Rs</strong></h5>-->
		                  <span>Total Revenue</span>
		                </div>
		            </div>
		        </div>

		       <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
		              <div class="stats">
		                	<div data-val="All in One"> <a href="?file=aio"> <!--<h5><strong>Ready</strong></h5>-->
		                 <span>Online Revenue</span></a></div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-money user2 icon-rounded"></i>
		                <div class="stats">
		                <a href="?file=payment"> <!--<h5><strong>Recharge</strong></h5>-->
		                  <span>Expenses</span></a>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 widget widget1">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
		                <div class="stats">
		                  <a href="?file=reports"> <!--<h5><strong>Report</strong></h5>-->
		                  <span>Expenditure</span></a>
		                </div>
		            </div>
		         </div>
		        <div class="col-md-3 widget">
		            <div class="r3_counter_box">
		                <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
		                <div class="stats">
		                    <a href="?file=remarks"><!--<h5><strong>Remark</strong></h5>-->
		                  <span>Total Users</span></a>
		                </div>
		            </div>
		         </div>
			</div>
			
		        <div class="clearfix"> </div>
		    </div>
			
		</div>
		
	 <!--<div class="main-pain2">
		
		</div>-->
		
   
    <?php
        if(isset($_GET['file'])){                           
            include('include/'.$_GET['file'].'.php');
        }else{ ?>
		
             <div class="row-one widgettable">
                <div class="col-md-12 content-top-2 card">
                    <div class="agileinfo-cdr">
                        
						<!--div class="card-header">                            
                           <div  class="table" id="users"></div>      
			            </div>-->
						<div class="row">
						<div class="col-md-6">
							
				             <div class="graphbox1">
				             </div>
				         </fieldset>
                        </div>
 
                              
				           <div class="col-md-6">
				            <div class="tabbox2">
				            </div>
			               </div>
			              </div>
			              <div class="row">
			              	<div class="col-md-4">
			              		<div class="gbox3">
			              		</div>
			                    </div>
                            <div class="col-md-4">
			              		<div class="gbox3">
			              		</div>
			                    </div>
                            <div class="col-md-4">
			              		<div class="gbox3">
			              		</div>
			                    </div>
			                </div>
			  	
			 		   </div>
		   </div>
        </div> 

     		
     <div class="clearfix"> </div>
   </div>  
   
   	
            <script type="text/javascript" src="js/modules/index.js"></script>
      <?php  } ?>    
               
    
    <script  src="../js/index1.js"></script>   
        <div class="charts">        
            
        </div>
        </div>
        </div>
   
 <?php include_once("footer.php"); ?>
   <!--//footer-->
   </div>
       
   <!-- new added graphs chart js-->
   
   <script src="../js/Chart.bundle.js"></script>
    <script src="../js/utils.js"></script>
        <script src="../js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;
                
            showLeftPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeftPush' );
            };
            

            function disableOther( button ) {
                if( button !== 'showLeftPush' ) {
                    classie.toggle( showLeftPush, 'disabled' );
                }
            }
        </script>
    <script src="../js/jquery.nicescroll.js"></script>
    <script src="../js/scripts.js"></script>
    <script src='../js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
      //$('.sidebar-menu').SidebarNav()
    </script>
    <script src="../js/SimpleChart.js"></script>    
    <script src="../js/plugin/Plugin_Table.js"></script>
    <script type="text/javascript">       
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });

    </script>
</body>
</html>