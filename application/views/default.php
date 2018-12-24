<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>
		Nexo.io
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<base href="<?= base_url(); ?>"></base>
	<script>
    PATH = "<?= base_url(); ?>";
	</script>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});

	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<!--begin::Page Vendors -->
	<link href="public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors -->
	<link href="public/assets/demo/default/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="public/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="https://platform.nexo.io/images/metaicons/favicon.ico" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<!-- end::Head -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">
	<div class="m-grid m-grid--hor m-grid--root m-page">


 <?php $this->load->view('templates/header.php');?>

<?php
if (isset($this->folder)) {
    $file = (!isset($this->file) || $this->file == '') ? 'default' : $this->file;
    $this->load->view($this->folder . '/' . $file);
}
?>

  </div>

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
<script src="public/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Page Snippets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="public/assets/css-custom/style.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="public/assets/js-custom/jquery_custom.js"></script>

<script>
	
$(document).ready(function() {
 	function callAjax(url, parameters, successCallback) {
 		$.ajax({
 			type: 'get',
 			url: url,
 			data: parameters,
 			dataType: 'json',
 			success: successCallback,
 			error: function(xhr, textStatus, errorThrown) {
 				console.log('error');
 			}
 		});
 	}
 	$(".main-menu a").click(function() {
 		$(".main-menu a.active").removeClass("active");
 		$(this).addClass("active");
 	});
 	$(".switcher a").click(function() {
 		$(".switcher a.current").removeClass("current");
 		$(this).addClass("current");
 	});
 	//checkclickcoin
	 $(".switcher a").click(function() {
                        $("#wp_repayment").css("display","block");
                         $('#bitcoinRepay').val(" ");
                          $('#usdRepay').val(" ");    
                            var vdata = $(this).attr("data-name"); 
                          var pars={
                                   nameCoin: vdata,  
                             };  
                          callAjax("./getCoin", pars, onSuccess);
                             function onSuccess(res) {
                             console.log(res);
                             var PriceoneCoin = res.priceCoin;
                              $('#bitcoinRepay').keyup(function() {
                               var valInputBTC= $(this).val();
                                  $('#usdRepay').val(round(valInputBTC*PriceoneCoin, 2));
                              });
                                  $('#usdRepay').keyup(function() {
                                    var valInputUSD= $(this).val();
                                    $('#bitcoinRepay').val(round(valInputUSD/PriceoneCoin, 8));
                                  });
                                //   $('.LoanLimitRepay').text(round(Loanprice,2));
                                //   $('#firstPriceRepay').text(round(historicalCost, 2)); 
                          }         
                      });
					  // end-bitcoinRepay

 
				// triggerdeposit
				$('.button-trigger').on('click', function(e) {
					$('#bitcoin').val(0);
					$('#ussd').val(0);
					$('#depositModel').modal();
					$(".button-trigger.active").removeClass("active");
					$(this).addClass("active");
					var vdata = $(this).attr("data-name");
					var pars = {
						nameCoin: vdata,
					};
					callAjax("./getCoin", pars, onSuccess);
					function onSuccess(res) {
						console.log(res);
						$('#wallet_coin').val(res.infoCoin[0].Address);
						var priceCoin = res.priceCoin;
						var percentCoinchoose = res.infoCoin[0].Percent;
						//inputhidden
						$('#priceUSD').val(priceCoin);
						$('#idCoin').val(res.infoCoin[0].ID);
						$('#percentC').val(res.infoCoin[0].Percent);
						$('#bitcoin').keyup(function() {
						var valInputBTC= $(this).val();	
						var percentCoin = (valInputBTC*percentCoinchoose)/100;

						$('#ussd').val(round(percentCoin*priceCoin, 2));
						
						$('#firstPrice').text(round(valInputBTC*priceCoin, 8));
						
							});
						// var PriceoneCoin = res.PriceoneCoin;
						// var Loanprice = res.Loanprice;
						// var historicalCost = res.historicalCost;
							
						// $('.LoanLimit').text(round(Loanprice, 2));
							
						$('#ussd').keyup(function() {
							var valInputUSD= $(this).val();	
							var percentCoin = (priceCoin*percentCoinchoose)/100;
							$('#bitcoin').val(round(valInputUSD/percentCoin,8));
							var valInputBTC= $("#bitcoin").val();	
							$('#firstPrice').text(round(valInputBTC*priceCoin, 2));
						});
					}

				});

			
				// end-triggerdeposit
			
					// var vpercent = $(".button-trigger.active").attr("percent-name");
					// var vdata = $(".button-trigger.active").attr("data-name");
					// //btc = 1
					// var pars = {
					// 	nameCoin: vdata,
					// 	vpercent: vpercent,
					// };
					// callAjax("./getCoin", pars, onSuccess);

					// function onSuccess(res) {
					// 	console.log(res);
					// 	var PriceoneCoin = res.PriceoneCoin;
					// 	var Loanprice = res.Loanprice;
					// 	var historicalCost = res.historicalCost;
					// 	var percentOneBTC = res.percentOneBTC;
					// 	var valueUSD = $('#ussd').val();
					// 	$('.LoanLimit').text(valueUSD);
					// 	$('#bitcoin').val(round(valueUSD / percentOneBTC, 8));
					// 	$('#firstPrice').text(round(historicalCost, 2));
						
					// }
			




 });

</script>



</html>





