
  </div>
  <!-- The Modal1 -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Loan Withdrawal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="alert alert-warning">
            Please complete Basic Verification to continue
          </div>
          <div class="alert alert-info text-center">
           You can withdraw up to <a href="#" class="alert-link">$0.00</a>
           <a href="#" class="quick-info" data-toggle="tooltip" data-placement="top" title="Hooray!">
            <i class="fa fa-question-circle"></i></a>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- End The Modal1 -->

  <!-- The Modal2 -->
  <div class="modal" id="repayModel">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Flexible Loan Repayment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <nav class="switcher">
            <a class="current" data-name="BTC"><span>BTC</span></a>
            <a data-name="ETH"><span>ETH</span></a>
            <a data-name="NEXO"><span>NEXO</span></a>
            <a data-name="USD"><span>USD</span></a>
            <a data-name="EUR"><span>EUR</span></a>
            <a data-name="GBP"><span>GBP</span></a>
            <a data-name="AUD"><span>AUD</span></a>
            <a data-name="NZD"><span>NZD</span></a>
            <a data-name="XRP"><span>XRP</span></a>
            <a data-name="TUSD"><span>TUSD</span></a>
          </nav>

        </div>

        <!-- //endswitcher -->
        <section id="wp_repayment">
         <div class="method">
          <div class="deposit-limit">
           <label class="with-tooltip"><span class="pb-3">Deposit Amount</span>
            <input type="text" id="usdRepay" value="">
          </label>
          <img src="https://platform.nexo.io/images/elements/icon-convertable.svg" class="icon-convertable" alt="">
          <label class="with-tooltip"><span>Loan Limit Increase Calculator</span>
           <input type="text" id="bitcoinRepay" value="">
         </label>     
       </div>
     </div>
     <!-- //end-method -->
     <div class="table-responsive">
       <table class="table table-bordered">
        <thead>
          <tr>
            <th>Estimated</th>
            <th>Wallet Value</th>
            <th>Total Loan Limit</th>
            <th>Available Loan Limit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <th>Before</th>
           <td>$0.00</td>
           <td>$0.00</td>
           <td>$0.00</td>
         </tr>
         <tr>
           <th>After Deposit</th>
           <td id="firstPriceRepay"></td>
           <td class="LoanLimitRepay"></td>
           <td class="LoanLimitRepay"></td>
         </tr>

       </tbody>
     </table>
   </div>
   </section>
   <!-- endtable -->
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- End The Modal2 -->

  <!-- The depositModel -->
  <div class="modal" id="depositModel">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Flexible Loan Repayment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
         <div class="method">
          <div class="deposit-limit">
           <label class="with-tooltip"><span class="pb-3">Deposit Amount</span>
            <input type="text" id="bitcoin" value="">
          </label>
          <img src="https://platform.nexo.io/images/elements/icon-convertable.svg" class="icon-convertable" alt="">
          <label class="with-tooltip"><span>Loan Limit Increase Calculator</span>
           <input type="text" id="ussd" value="">
         </label>			
       </div>
     </div>

     <!-- //end-method -->
     <div class="table-responsive">
       <table class="table table-bordered">
        <thead>
          <tr>
            <th>Estimated</th>
            <th>Wallet Value</th>
            <th>Total Loan Limit</th>
            <th>Available Loan Limit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <th>Before</th>
           <td>$0.00</td>
           <td>$0.00</td>
           <td>$0.00</td>
         </tr>
         <tr>
           <th>After Deposit</th>
           <td id="firstPrice"></td>
           <td class="LoanLimit"></td>
           <td class="LoanLimit"></td>
         </tr>

       </tbody>
     </table>
   </div>
 </div>

 <!-- Modal footer -->
 <div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>

<!-- End The depositModel -->
<!-- The Withdraw  -->
<div class="modal" id="withdrawModel">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Flexible Loan Repayment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- End The Withdraw  -->
</body>
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->			<!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
	<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
		<a href="#" target="_blank">
			<i class="la la-cart-arrow-down"></i>
		</a>
	</li>
	<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
		<a href="#" target="_blank">
			<i class="la la-code-fork"></i>
		</a>
	</li>
	<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
		<a href="#" target="_blank">
			<i class="la la-life-ring"></i>
		</a>
	</li>
</ul>
<!-- begin::Quick Nav -->	
<!--begin::Base Scripts -->
<script src="public/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="public/assets/demo/demo2/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->   
<!--begin::Page Vendors -->
<script src="public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->  
<!--begin::Page Snippets -->

<script src="public/assets//app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Snippets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="public/assets/css-custom/style.css">

<script src="public/assets/js-custom/jquery_custom.js"></script>

<script>
  $('.DayPickerInput input').datepicker({
   format: 'yyyy/mm/dd',

 });

</script>

<!-- end::Body -->

</html>
