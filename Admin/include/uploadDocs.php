


<link rel="stylesheet" href="css/modules/uploadDocs.css">

 <div class="row-one widgettable">
    <div class="col-md-12 content-top-2 card">
        <div class="agileinfo-cdr">
            <div class="card-header">            			            				
				<form enctype="multipart/form-data" method="post" id="fileUpload">


			<div class="container">
					  	<div class="row">
					  		<div class="col-md-4">
					<div class="sign-u">
						<label>Slect Category</label>
						<select id="selectCategory" name="category"> </select>	
                       </div>
						</div>
					
							    
					<input type="hidden" name="email" id="email">
					<input type="hidden" name="name" id="name">
					
					
					
					   
					 <div class="col-md-4">
            		<div class="sign-u">
            			
							<input type="file" multiple="multiple"  id="files" name="file[]">
							<pre id="filelist" style="display:none;"></pre>
						<div class="clearfix"> </div>
						</div>
				
					 </div>

					 <div class="col-md-4">
					      		<div class="sign-u">
					      			
				    <input type="button" class="btn btn-info" id="upload" value="Upload File"/>
				        </div>
				    </div>

				    <!--start-->

				    <div class="row">
				    	<div class="col-md-12">
				    		<p >Amount</p>
			      	<input id="amount" type="text" name="amount">
				    		</div>
				    </div>
				    <!--end-->

 </div>

					      
					      	
           
                </form>
           </div>




</div>
        </div>
        </div>
    </div>      
    <div class="clearfix"> </div>
</div>
<!--<script type="text/javascript">
$(document).ready(function(){
	  
function testInput(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp(/[0-9]/i);
   return pattern.test(value);
}
$('#amount').bind('keypress', testInput);


  })
</script>-->

	
<script src="js/modules/uploadDocs.js"></script>  
