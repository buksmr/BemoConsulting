<!DOCTYPE html>
<html>
<head>
    <title>Freelancebit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <style type="text/css">
         .panel-title {
         display: inline;
         font-weight: bold;
         }
         .display-table {
         display: table;
         }
         .display-tr {
         display: table-row;
         }
         .display-td {
         display: table-cell;
         vertical-align: middle;
         width: 61%;
         }
         .radio-container {
         display: block;
         position: relative;
        
         margin-bottom: 12px;
         cursor: pointer;
         font-size: 15px;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         /* Hide the browser's default radio button */
         .radio-container input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         }
         /* Create a custom radio button */
         .checkmark {
         position: absolute;
         top: 0;
         left: 0;
         height: 25px;
         width: 25px;
         background-color: #eee;
         border-radius: 50%;
         }
         /* On mouse-over, add a grey background color */
         .radio-container:hover input ~ .checkmark {
         background-color: #ccc;
         }
         /* When the radio button is checked, add a blue background */
         .radio-container input:checked ~ .checkmark {
         background-color: #2196F3;
         }
         /* Create the indicator (the dot/circle - hidden when not checked) */
         .checkmark:after {
         content: "";
         position: absolute;
         display: none;
         }
         /* Show the indicator (dot/circle) when checked */
         .radio-container input:checked ~ .checkmark:after {
         display: block;
         }
         /* Style the indicator (dot/circle) */
         .radio-container .checkmark:after {
         top: 9px;
         left: 9px;
         width: 8px;
         height: 8px;
         border-radius: 50%;
         background: white;
         }
         img.core-paymentimages {
         width: 60px;
         margin-right: 8px;
		 margin-bottom: 15px;
         }
		 .form-row.row {
    text-align: left;
}
label.control-label {
    font-size: 14px;
}
p.card-subtxts {
    font-size: 17px;
    color: #FF0000;
}
      </style>
   </head>
<body>
     
<div class="container">

     <h3 class="text-center main-heading">Add payment details
    
     
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="<?php echo base_url(); ?>assets/img/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
				
					
                    <form role="form" action="<?php echo base_url();?>add_stripe_donation" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                                                    id="payment-form">
						
                        <input name="amount" value="<?php echo $amount;?>" type='hidden'>
                        <input name="comment" value="<?php echo $comment;?>" type='hidden'>
						
						<div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Card Name</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
     
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card No</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
      
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiry Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
							
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiry Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
      
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Corrector Error</div>
                            </div>
                        </div>
      
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay <?php echo $amount;?> €</button>
                            </div>
                        </div>
                             
                    </form>
                
                </div>
            </div>        
        </div>
    </div>
         
</div>
     
</body>  
     
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
     
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
    
  });
      
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>

<script type="text/javascript">
/* 
if(<?php echo $this->session->userdata('stripe_customer_id') != '' ?>){ 
	$("#carddetailsyes").hide();
	$("#carddetailsno").show();
}else{
      $("#carddetailsyes").show();
	  $("#carddetailsno").hide();
}
      
      $(document).ready(function() {
      $("input[name$='radio']").click(function() {
      	var test	 = $(this).val();
         
        if(test =='cardyes'){ 
      		
      		$("#carddetailsyes").show();
			$("#carddetailsno").hide();
      
      	}else if(test =='cardno'){
               
      		$("#carddetailsyes").hide();
			$("#carddetailsno").show();
      	}
      	
      	
      });
      }); */
   </script> 
</html>