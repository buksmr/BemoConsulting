
<?php include ("header3.php"); ?>

<section class="category-nav">
 <div class="container-fluid">	
	<div class="container">
	<nav class="navbar navbar-expand-sm">
  
  <ul class="navbar-nav category-Nav">
    <li class="nav-item">
      <a class="nav-link active"  href="#">Writing & Translation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Graphic & Design</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Business</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Digital Marketing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Video & Animation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Programming & Tech</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Music & Audio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Fun & Lifestyle</a>
    </li>
  </ul>
</nav>
</div>
</div><!-- container -->
</section><!-- category-nav -->


<section class="package-ordersummary">
	
  
  <div class="container-fluid">

  	<div class="container">
  	  <h1 class="custom-package">Order Details</h1>	
  	  <div class="row">
  	  	
         <div class="col-md-8">

           <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Payment options</h3>
                    </div>
                    <hr>
                    <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">

                        <div class="form-group text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                            </ul>
                        </div>


                       <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                     <label for="usr">First Name</label>
                                      <input type="text" class="form-control" id="">
                                </div>
                            </div>


                            <div class="col-6">
                                 <div class="form-group">
                                     <label for="usr">Last Name</label>
                                      <input type="text" class="form-control" id="">
                                </div>
                            </div>

                        </div> <!-- row -->
                        
                        
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                            <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="100.00">
                            <span class="invalid-feedback">Enter the payment amount</span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Name on card</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name" required autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="invalid-feedback">Enter the name as shown on credit card</span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Card number</label>
                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required="" pattern="[0-9]{16}">
                            <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                    <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                    <span class="invalid-feedback">Enter the expiration date</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Security code</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                    <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code" 
                                        data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                        data-trigger="hover"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="x_zip" class="control-label mb-1">Postal code</label>
                            <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                            <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                        </div>
                       <!-- <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Pay $100.00</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div> -->
                    </form>
                </div>
            </div>
                



         </div> <!-- md-8 -->

         <div class="col-md-4">
        	<div class="package-right-summary">

        	 	<h4 class="sumary-details">Summary</h4>
        	 	<ul class="list-group mb-3" style="margin-top: -10px;">

            
		             <li class="list-group-item d-flex justify-content-between">
		              <span><img src="http://freelancebit.ccube9.com/dev_freelancebit/uploads/pexels-photo-248528.jpeg" class="proimgcircle"></span>
		              <h4 class="kgc">
		              	Platinum PKG - Branding Monster<h4>

		              
		            </li>

		             <li class="list-group-item d-flex justify-content-between">
		              <span>Promo code</span>
		              <strong>$6.00</strong>

		              
		            </li>
		            <li class="list-group-item d-flex justify-content-between">
		              <span>Service Fee</span>
		              <strong>$6.25</strong>

		              
		            </li>

		            <hr>
		            <li class="list-group-item d-flex justify-content-between">
		              <strong>Total </strong>
		              <strong>$131.25</strong>

		              
		            </li>

		            <li class="list-group-item d-flex justify-content-between">
		              <span>Delivery Time</span>
		              <span>2 days</span>

		              
		            </li>
                 </ul> <!-- ul -->

                 <div class="cta-area">
                 	<button class="btn-lrg-standard submit js-open-popup-login" type="button">Confirm & pay</button>

                 </div>



        	 </div>






         </div> <!-- md-4 -->





  	  </div> <!-- row -->
  	</div> <!-- container -->
  </div> <!-- fluid -->



</section>




<?php include ("footer.php"); ?>














