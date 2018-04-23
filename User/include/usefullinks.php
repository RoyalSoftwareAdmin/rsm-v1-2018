 <link rel="stylesheet" href="css/modules/usefullinks.css">
 <div class="row-one widgettable">
    <div class="col-md-12 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">                
                <div class="table" id="usefullinks"> </div>
            </div>
        </div>
    </div>  
    </div>     
   

<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="links">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="gridSystemModalLabel">Enter the Details</h4>
					</div>
					<div class="modal-body">
						<div class="row row1">					
							<label>File Name</label><input type="filename" class="filename" id="filename" name="filename" placeholder="" >
						</div> 
					
						
						<div class="row"> 
							<label> No Of Copies</label> <input type="text" class="inputnum" id="inputnum" name="inputnum" placeholder="No of Copies" >
						</div> 
						
						<div class="row"> 
							<label> Amount </label> <input type="text" class="inputamt" id="inputamt" name="inputamt" placeholder="" >
						</div> 
						
						
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						<a href="?file=payment"><button type="button" class="btn btn-primary submitDetails">Submit</button></a>
					</div>
				    
					</div><!-- /.modal-body-->
			    </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog-->
</div> <!-- /.modal -->
<div class="clearfix"> </div>
<script src="js/modules/usefullinks.js"></script>
<script src="../js/plugin/Plugin_Table.js"></script>