	<!-- begin::body -->

		<div class="container-fluid">
			<div class="col-auto">
				<h3 class="py-3 m-5 clearfix"></h3>
			</div>
			<!-- //end-tutorial-title -->
			<div class="col-auto">
				<div class="tutorial-title">
					<h3 class="py-3 mt-3">How The Nexo Instant Crypto-backed Loans Work</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pr-0">

					<div class="box-part">

						<div class="icons">
							<img class="img-fluid" src="public/assets/images/coin-img.jpg" >

						</div>

						<div class="title">
							<h5>1. Deposit Crypto Assets to Your Secure Nexo Wallet</h5>
						</div>

						<div class="text">
							<span>Crypto assets are secured by renowned audited SEC-approved custodian BitGo.</span>
						</div>

					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 p-0">

					<div class="box-part">
						<div class="icons">
							<img class="img-fluid" src="public/assets/images/coin-img2.jpg" >

						</div>

						<div class="title">
							<h5>2. A Loan Becomes Instantly Available. No Credit Checks</h5>
						</div>

						<div class="text">
							<span>Receive an instant flexible credit line using our fully automated process.</span>
						</div>

					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 p-0">
					<div class="box-part">
						<div class="icons">
							<img class="img-fluid" src="public/assets/images/coin-img3.jpg" >
						</div>
						<div class="title">
							<h5>3. Spend Money Instantly by Card or Withdraw to Bank Account</h5>
						</div>

						<div class="text">
							<span>Spend from the credit line at any time. From 8% per year APR on what you use.</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pl-0">
					<div class="box-part">
						<div class="icons">
							<img class="img-fluid" src="public/assets/images/coin-img4.jpg" >

						</div>

						<div class="title">
							<h5>No Minimum Loan Repayments No Hidden Fees</h5>
						</div>

						<div class="text">
							<span>Interest is debited from your available limit. Make repayments at any time.</span>
						</div>

					</div>
				</div>
			</div>
			<section class="info-coin">
				<div class="container-fluid">

					<div class="menu pt-5">
						<a data-toggle="modal" data-target="#myModal1">
							<i class="fa fa-university"></i>
							<strong>Withdraw Loan</strong>
							<em>By Bank Transfer or Tether</em>
						</a>
						<a data-toggle="modal" data-target="#repayModel">
							<i class="fa fa-undo"></i>
							<strong>Repay Loan</strong>
							<em>By Bank Transfer or Crypto</em>
						</a>

					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-left">Wallet</th>
								<th>Balance</th>
								<th>Market Value</th>
								<th>Loan Limit</th>
                <th>Percent </th>
								<th class="alt-color">Increase Loan Limit</th>
								<th>Withdraw Assets</th>
							</tr>
						</thead>
						<tbody>
            <?php foreach ($dtcoin as $key => $values): ?>

							<tr>
								<td class="text-left">
									<img class="img-fluid" src="public/assets/images/bitcoin_icon.png" alt="">
									<strong><?=strtoupper($values["Name"])?></strong>
								</td>
								<td> 0</td>
								<td>$0.00</td>
								<td>$0.00</td>
                <td><?=$values['Percent'] ?></td>
								<td class="text-center alt-color">
									<button class="btn btn-info px-5 button-trigger"  percent-name="<?=$values["Percent"]?>" data-name="<?=$values["Name"]?>" >Deposit</button>
								</td>
								<td class="text-center">
									<button type="button" class="btn btn-outline-danger px-4" data-toggle="modal" data-target="#withdrawModel">Withdrawаl</button>
								</td>
							</tr>
              <?php endforeach?>
						</tbody>
								<tbody>

						</tbody>
					</table>
				</div>
				<div class="row my-5">
					<div class="col-12">
						<h2 class="text-center">Total Value of Assets: $0.00</h2>
					</div>
					<div class="col-12">
						<h5 class="text-center">If the total value of your assets reaches $0.00, partial loan repayments might be initiated automatically</h5>
					</div>
				</div>

			</section>
</div>
<!-- ALL MODEL -->
  <!-- The Modal1 -->

  <div class="modal" id="myModal1">
    <div class="modal-dialog modal-lg modal-sm">
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Flexible Loan Repayment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <nav class="switcher">
              <?php foreach ($dtcoin as $values): ?>

              <a percent-name="<?=$values["Percent"]?>" data-name="<?=$values["Name"]?>"><span><?=strtoupper($values["Name"])?></span></a>

              <?php endforeach?>

        </div>

        <!-- //endswitcher -->
        <section id="wp_repayment">
         <div class="method">
          <div class="deposit-limit">
           <label class="with-tooltip">Deposit Amount
            <input type="number" name="usdRepay" id="usdRepay" value="">
          </label>
          <img src="https://platform.nexo.io/images/elements/icon-convertable.svg" class="icon-convertable with-tooltip" alt="">
          <label class="with-tooltip">Loan Limit Increase Calculator
           <input type="number" name="bitcoinRepay" id="bitcoinRepay" value="">
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
    <div class=" modal-dialog modal-lg modal-sm">
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
           <label class="with-tooltip"><p>Deposit Amount</p>
           <span class="fas fa-search"></span>
            <input type="number" id="bitcoin" value="">

          </label>
          <img src="https://platform.nexo.io/images/elements/icon-convertable.svg" class="icon-convertable with-tooltip" alt="">
          <label class="with-tooltip"><p>Loan Limit Increase Calculator</p>
          <span class="fas fa-search"></span>
           <input type="number" id="ussd" value="">
         </label>
       </div>
     </div>

     <!-- //end-method -->
     <div class="table-responsive">
       <table class="table table-bordered modec">
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
           <th>After Deposit</th>
           <td id="firstPrice"></td>
           <td class="LoanLimit"></td>
           <td class="LoanLimit"></td>
         </tr>

       </tbody>

     </table>
     <div class="container ">
       <div class="row justify-content-center ">
       <div class="input-group  mt-4 w-50">
					    <input type="text" class="form-control" id="wallet_coin"  readonly aria-describedby="btnGroupAddon">
              <div class="input-group-prepend">
                <button type="button" class="m-btn btn btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" data-copy="john.doe@email.com" title="Copy to clipboard"><i class="fa fa-copy"></i></button></div>  
            </div>
       </div>
     
     <form id="formbooking">
          <input type="hidden" id="priceUSD" name="priceUSD">
          <input type="hidden" id="idCoin" name="idCoin">
          <input type="hidden" id="percentC" name="percentC">
          <!-- begim--row -->
          <div class="row">
          <div class="col-md-12">
          <div class="form-group">
          <label for="content">Note:</label>
          <textarea id="content" name="content" rows="5" cols="30" placeholder="Ex:Tôi chuyển từ  ví này 0x9e483bebbbc68321f4dc771d6b0b2eefa4b4b428 dến ví này 0x06c68ed6f0b5ca25b50d8e7560a4117e97b89804"></textarea>
          </div>
          </div>
     <!-- end/row -->

        </div>
        <div class="form-group">
        <label for="termDate">Term:</label>
        <input type="number" name="termDate" placeholder="Min 7 - 90 Day" min="7" max="90"  class="form-control" id="termDate">
      </div>
 
</div>
   </div>
 </div>

 <!-- Modal footer -->
 <div class="modal-footer">
 <button type="submit" class="btn btn-success">Submit</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </form>
</div>

</div>
</div>
</div>

<!-- End The depositModel -->
<!-- The Withdraw  -->
<div class="modal" id="withdrawModel">
  <div class="modal-dialog modal-lg ">
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
<!-- END ALL MODEL -->
		<!-- end::body -->
