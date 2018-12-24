<!DOCTYPE html>
<?php if ($this->session->userdata('email')  && $this->session->userdata('role')==1){ ?>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta charset="utf-8">
	<title>Admin</title>
	<meta content="Latest updates and statistic charts" name="description">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"><!--begin::Web font -->
    <base href="<?php echo base_url(); ?>"></base>

	<script>
    PATH = "<?php echo base_url(); ?>/";
	</script>
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
	<link href="public/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">
	<link href="public/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
	<link href="public/assets/demo/default/base/datatables.bundle.css" rel="stylesheet" type="text/css">
	<link href="public/assets/format.css" rel="stylesheet" type="text/css">	
	<script src="public/assets/jquery.min.js" type="text/javascript"></script> 
<link rel="stylesheet" href="public/assets/bootstrap-clockpicker.css">

</head><!-- end::Head -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<?php $this->load->view('admin/modules/header'); ?>
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body" >
			<?php $this->load->view('admin/modules/asider-left'); ?>
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content" >
				<?php				
				if (isset($this->folder)) {
					$file = (!isset($this->file) || $this->file == '') ? 'default' : $this->file;
					$this->load->view('admin/compoments/' . $this->folder . '/' . $file);
				}
				?>
		</div>
		</div>
		</div>
		 <?php $this->load->view('admin/modules/footer'); ?>
	</div>
	<div class="m-scroll-top" id="m_scroll_top">
		<i class="la la-arrow-up"></i>
	</div><!-- end::Scroll Top --><!-- begin::Quick Nav -->
</body>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="public/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="public/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
     <script type="text/javascript">
     
  var BootstrapSelect={init:function(){$(".m_selectpicker").selectpicker()}};
  jQuery(document).ready(function(){BootstrapSelect.init()});
    var Bootstrapdatepicker={init:function(){$("#m_datepicker_1").datepicker()}};
  jQuery(document).ready(function(){Bootstrapdatepicker.init()});
</script>  
<script src="public/assets/main.js" type="text/javascript"></script> 
<script src="public/assets/bootstrap-clockpicker.js"></script>
<script src="public/assets/moment.js"></script>

<script type="text/javascript">

    window.onload=function () {
        $('.clockpicker').clockpicker();
      //  $('.clockpicker-button')html('Send');
    }	

</script>
<style type="text/css">

		
</style>
<script type="text/javascript">
var BootstrapSwitch={init:function(){$("[data-switch=true]").bootstrapSwitch()}};jQuery(document).ready(function(){BootstrapSwitch.init()});	
</script>
 <script>
    $("#loaicon").selectpicker()
    $("#m_datepicker").datepicker({
                todayHighlight: !0,
                templates: {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            })
</script> 
</body>
</html>
<?php } ?>