<script type="text/javascript">

	function save_general() {
		rate_usd= $('#txt_rate_usd').val();
		percent=$('#txt_percent').val();	
        min=$('#txt_min').val();
        max=$('#txt_min').val(); 
        if ($("#m_switch_1").is(':checked')==true) {
        Switch=1;
        } else {
        Switch=0;
        }                 
        $.ajax({
            url: PATH + 'admin/setting/edit_setting',
            type: 'post', dataType: 'json',
            data: {rate_usd: rate_usd,percent: percent, min:min,max:max,Switch:Switch },
            success: function (data) {  
                if (data.status == true) {
                    swal("Good job!","You clicked the button!","success")
                    console.log(data.msg)
                   // location.reload();
                } else {
                    swal("Fail job!","You clicked the button!","error")
                    console.log(data.msg)
                }
            }
        })
		

	}
	
</script>