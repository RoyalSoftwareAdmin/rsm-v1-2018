<link rel="stylesheet" href="css/modules/searchCandidate.css">
 <div class="row-one widgettable">
    <div class="col-md-12 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">
			 <h2 class="title1" style="text-align: center">Search Candidate</h2>
			</div>
			 <div class="main-page signup-page">
			 <div class="sign-up-row widget-shadow col-md-12 default-margin">
			  <div class="row">
						 <h5>Candidate's Information :</h5>
						<div class="col-md-12 searchcandidate default-margin">
						  
						   <div class="sign-u col-md-6 default-margin"> 
						    <label>Select Category</label>
						    <select id="SelectCategory"></select>
							<div class="clearfix"> </div>
						   </div>
						
						   <div class="sign-u col-md-6 default-margin"> 
						    <label>Select Division</label>
						     <select id="SelectDivision"></select>		
							<div class="clearfix"> </div>
						   </div>
				   
				   <div class="row">
				     <div class="default-margin ">
					  <div class="col-md-6 ">
						<label> Year of Experience :</label>
						
						<label class="label1"> Minimum </label>

						<select id="minimumList"></select>	
					  </div>
					  <div class="col-md-6">
						<label class="label1"> Maximum</label>
						<select id="maximumList"></select>	
					  </div>
					 </div>
				    </div>  
						   
			      </div>	   
					
				<h5>Candidate's Location :</h5>
						<div class="col-md-12 searchcandidate default-margin"></div>
						   
						
						 <div class="row">
				          <div class="default-margin ">
					         
							 <div class="col-md-3">
						       <div class="default-margin">
							   <input type="checkbox" id="idcheck" name="checkbox" >
						        <label class="cond"> College Location </label>
						      </div>
							</div>
					  
					         <div class="col-md-3">	
					          <div class="default-margin">
							     <input type="checkbox" id="idcheck" name="checkbox" >
						         <label class="cond"> Permanent Location</label>
						      </div>
							 </div>
							
							 <div class="col-md-3">	
					            <div class="default-margin">
							      <input type="checkbox" id="idcheck" name="checkbox" >
						          <label class="cond"> Current Location</label>
						        </div>
							 </div>
							
							 <div class="col-md-3">	
					            <div class="default-margin">
							     <input type="checkbox" id="idcheck" name="checkbox" >
						         <label class="cond"> Preferred Location</label>
						        </div>
							 </div>
					      
						  </div>
				         </div>  
						 
						 <div class="row">
						  
						  <div class="default-margin ">
					       <div class="col-md-6 ">
                               <label class="label1"> Select Location:</label>
						       <select id="districtList"></select>	
					       </div>
					     
						    <div class="col-md-6">
							   <label class="label1"> Select Cities:</label>
						       <select id="cityList"></select>	
					        </div>
					     </div>
						 
						 </div>
					 
				    

                        <h5>Education :</h5>
						<div class="col-md-12 searchcandidate default-margin"></div>	

                        
                         <div class="row">
						  
						  <div class="default-margin ">
					       <div class="col-md-9 ">
                               <label class="label1"> Select UG Qualification:</label>
						       <select id="ugList"></select>	
							   <select id="brList"></select>
							   <!--<div class="subbr"><select id="subrList"></select>	</div>-->
							   
					       </div>
					     
						    <div class="col-md-3">
							   <label class="label1"> Passing Year:</label>
						       <select id="fromList"></select>	
					        </div>
							
					     </div>
						</div>		


                        <div class="row">
						  
						  <div class="default-margin ">
					       <div class="col-md-6 ">
                               <label class="label1"> Select PG Qualification:</label>
						       <select id="pgList"></select>	
					       </div>
					     
						    <div class="col-md-3">
							   <label class="label1"> Passing Year:</label>
						       <select id="fromList1"></select>	
					        </div>
							
					     </div>
						</div>		

                     						
					 
					 <div class="sign-u error"></div>
							<div class="clearfix"> </div>
						<div class="sub_home">
								<input type="button" id="submit" value="Submit">
							<div class="clearfix"></div>
						</div>
				</div>
            </div>	
        </div>
		
	
        </div>
    </div>  
 </div>	
     
    <div class="clearfix"> </div>

<script type="text/javascript" src="js/common/lists.js"></script>
<script src="js/modules/searchCandidate.js"></script>  