<link rel="stylesheet" href="css/modules/addtest.css">
 <div class="row-one widgettable">
    <div class="col-md-12 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">            
	            <div class="row">
					<div class="col-md-12 default-margin">
						<div class="textareaDiv">
		                  <label>Enter Title</label>
		                  <input type="text" class="title"/> 
						</div>
					</div>
					<div class="default-margin">
						 <label class="cond"> I have a Condition</label>
						<input type="checkbox" id="idcheck" name="checkbox" >
						</div>

					
				</div>
				<div class="row">
				<div class="default-margin ">
					<div class="col-md-6 ">
						<label> Year of Experience :</label>
						
						<label> Minimum </label>

						<select id="minimumList"></select>	
					</div>
					<div class="col-md-6">
						<label> Maximum</label>
						<select id="maximumList"></select>	
					</div>
					</div>
				</div>

				<div class="row">
				<div class="default-margin">
					<div class="col-md-6 ">
						<label> Creation Date :</label>
						
						<label> From Date </label>

					<input type="date" class="from"/>
					</div>
					<div class="col-md-6">
						<label> To Date </label>
						<input type="date" class="from"/>	
					</div>
					</div>
				</div>
					
				<div class="col-md-12 btnsParent">
					<p id="error"></p>
				 	<button class="btn btn-success btns" onclick ="Validate()">Submit</button>
				  	<button class="btn btn-danger btns">Clear</button>
				  	
				</div>
		    </div>			
		</div>	
	</div>
</div>
<div class="clearfix"> </div>
<script type="text/javascript" src="js/common/lists.js"></script>
<script src="js/modules/addTest.js"></script>  