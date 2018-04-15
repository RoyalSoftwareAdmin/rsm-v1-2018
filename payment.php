<?php
session_start();
$MERCHANT_KEY = "xdd2aUfG";
$SALT = "BU7uUAVtr4";
$PAYU_BASE_URL = "https://secure.payu.in/_payment";
$action = '';
$posted = array();
if(!empty($_POST)) {
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  $txnid = "Madhu28071991";//substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
      <script>
        var hash = '<?php echo $hash ?>';
        function submitPayuForm() {
          if(hash == '') {
            return;
          }
          var payuForm = document.forms.payuForm;
          payuForm.submit();
        }
      </script> 

	<link href="css/modules/payment.css" rel="stylesheet" type="text/css">
    

	<div onload="submitPayuForm()" id="myAccordion" class="nl-accordion">
			<label class="nl-label" for="nl-radio-1">Pay Now</label>
				
				<div class="nl-content">
				
					<div class="agileits_roayls_tab1 agileits_roayls_tab">
						 <?php if($formError) { ?>
            			       <span style="color:red">Please fill all mandatory fields.</span>
		                 <?php } ?>	
					<!--<form action="#" method="post" class="creditly-card-form agileinfo_form">-->
					<div class="creditly-card-form agileinfo_form">
						<form action="<?php echo $action; ?>" method="post" name="payuForm">
							<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
		                    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
		                    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
		                    <textarea style="display: none;" name="productinfo">Jewel EMI</textarea>
		                    <input type="hidden" name="surl" value="http://www.Royalssoftwaresolution.com" size="64" />
		                    <input type="hidden" name="furl" value="http://www.Royalssoftwaresolution.com" size="64" />
		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                    <input type="hidden" name="curl" value="http://www.Royalssoftwaresolution.com/cancel.php" />
							<section class="creditly-wrapper wthree royals_agileits_wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">First Name:</label>
											<input class="billing-address-name form-control"  name="firstname" id="firstname" placeholder="Royal Software" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
										</div>
										<div class="controls">
											<label class="control-label">Last Name:</label>
	                                        <input class="billing-address-lname form-control" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" />
	                                   </div> 
									   
									   <div class="controls">
											<label class="control-label">Email:</label>
	                                       <input class="billing-address-email form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
	                                   </div> 
									   
									   <div class="controls">
											<label class="control-label">Phone:</label>
	                                       <input class="billing-address-phone form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
	                                   </div> 
									   
									   <div class="controls">
											<label class="control-label">Address 1:</label>
	                                       <input class="billing-address-add1 form-control" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" />
	                                   </div> 
									   
									    <div class="controls">
											<label class="control-label">Address 2:</label>
	                                       <input class="billing-address-add2 form-control" name="address1" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" />
	                                   </div> 

									   <div style="display:none;" class="controls">
	                                   <label class="control-label">City:</label>
	                                   <input class="billing-address-city form-control"  name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" />
	                                   </div> 
									   
									   <div style="display:none;" class="controls">
	                                     <label class="control-label">State:</label>
	                                     <input class="billing-address-state form-control" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" />
	                                    </div> 
									   
									   <div style="display:none;" class="controls">
	                                     <label class="control-label">Pincode:</label>
	                                      <input class="billing-address-pincode form-control"name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" />
	                                   </div> 
									   
									   <div class="controls">
	                                     <label class="control-label">Amount:</label>
	                                        <input class="billing-address-amount form-control"name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" />
	                                  </div> 
									 <?php if(!$hash) { ?>
							             <div class="form-group col-md-6">
							                <input name="Submit" type="submit" value="Submit" />
							            </div> 
							            <div class="form-group col-md-6">
							                <input name="Cancel" type="button" value="Cancel" />
							            </div> 
									<?php } ?>
								</div>
							</section>
						</form>
					<!--</form>-->
					</div>
				</div>	
			</div>
		</div>
