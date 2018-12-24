<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta charset="utf-8">
	<title>Admin</title>
	<meta content="Latest updates and statistic charts" name="description">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"><!--begin::Web font -->
    <base href="<?php echo base_url(); ?>public/"></base>
	<script src="assets/webfont.js">
	</script>
	<script>
    PATH = "<?php echo base_url(); ?>/";
	         WebFont.load({
	           google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
	           active: function() {
	               sessionStorage.fonts = true;
	           }
	         });
	</script><!--end::Web font -->
	<!--begin::Base Styles -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
	
</head><!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(images/bg-3.jpg);">
			<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#"><img src="images/logo-1.png"></a>
					</div>
					<div class="m-login__signin">
						<div class="m-login__head">
							<h3 class="m-login__title">Sign In To Admin</h3>
						</div>
						<form action="#" class="m-login__form m-form">
							<div class="form-group m-form__group">
								<input class="form-control m-input" name="email1" value="admin" placeholder="Email" type="text">
							</div>
							<div class="form-group m-form__group">
								<input class="form-control m-input m-login__form-input--last" name="password" value='Eplus.vn123' placeholder="Password" type="password">
							</div>
							<div class="row m-login__form-sub">
								<div class="col m--align-left m-login__form-left">
									<label class="m-checkbox m-checkbox--focus"><input name="remember" type="checkbox"> Remember me <span></span></label>
								</div>
								<div class="col m--align-right m-login__form-right">
									<a class="m-link" href="javascript:;" id="m_login_forget_password">Forget Password ?</a>
								</div>
							</div>
							<div class="m-login__form-action">
								<button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" id="m_login_signin_submit">Sign In</button>
							</div>
						</form>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<script src="assets/user/login.js" type="text/javascript">
	</script><!-- end::Body -->
</body>
</html>


