<script type="text/javascript">
$(document).ready(function() {
    ajaxload();
    
});
           var FormControls = {
    init: function() {
        $("#m_form_2").validate({
            rules: {
                txt_display_name: {
                    required: !0
                }                               
            },

            submitHandler: function(e) {
         save_add();
            }
        })
    }
};
jQuery(document).ready(function() {
    FormControls.init()
});    
</script>
<script type="text/javascript">
    function change_master_att(a) {
        //url : setting/changestatus
             swal({
            title: "Are you sure Active Master this row?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Active it!"
            }).then(function (e) {     
        $.ajax({
            url: PATH + 'admin/users/change_master',
            type: 'post', dataType: 'json',
            data: {master_id: a},
            success: function (data) {
                if (data.status == true) {
                    swal("Good job!","You clicked the button!","success")
                    console.log(data.msg)
                } else {
                    swal("Fail job!","You clicked the button!","error")
                    console.log(data.msg)
                }
            }
        })
            })
    }
</script>
<script type="text/javascript">
	function edit_user() {
    $('.clickc').off('click').on('click', function () { 

 		 $('#txt_id').val($(this).attr('data-user_id'));		 
		 $('#txt_display_name').val($(this).attr('data-display_name'));
		 // $('#txt_status').val($(this).attr('data-status'));
    	$('#txt_status').val($(this).attr('data-status')).trigger('change');  		 
		 $('#myModal_edit_attribute').modal('show');
  	}); 
	}
    function save_add() {
   data = new FormData();
    data.append( 'display_name', $('#txt_display_name').val() );              
    data.append( 'avatar', $( '#avatar')[0].files[0] );     
    data.append( 'password', $('#txt_password').val() );     
    data.append( 'gender', $('#txt_gender').val() );     
    data.append( 'status', $('#txt_status').val() );                     
    data.append( 'user_id', $('#txt_id').val() ); 
                 $.ajax({
                    url: PATH + 'admin/users/edit',
                    type: 'post', dataType: 'json',
                    data: data,
                    async:false,                    
                    processData: false,
                    contentType: false,
                    success: function (data) {  

                        if (data.status == true) {
                        swal("Good job!","You clicked the button!","success")
                        $('#myModal_edit_attribute').modal('hide');                         
                        $("#m_datatable").mDatatable().reload(); 
                        
                        } else {
                            swal("Fail job!","You clicked the button!","error")
                            console.log(data.msg)
                        }
                    }
                }) 
       

    }
    function add_new_attribute() {
        $('#myModal_edit_attribute').modal('show');
    }
    function show_user(id) {


  $.ajax({
            url: PATH + 'admin/users/getprofileuser',
            type: 'post', 
            dataType: 'json',
            async:false,
            data: {id:id},
            success: function (data) {  
    html="";
    html+=`<div class=" row">
<div class="col-lg-12">
<div class="m-portlet  m-portlet--full-height ">
<div class="m-portlet__body">
<div class="m-widget16">
<div class="row"><div class="col-md-6">

<div class="m-widget16__body">
<div class="m-widget16__item">
<span class="m-widget16__date">DisplayNameOwner:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.DisplayNameOwner+`</span>
</div>
<div class="m-widget16__item">
<span class="m-widget16__date">DisplayName:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.DisplayName+`</span>
</div>
<div class="m-widget16__item"><span class="m-widget16__date">City:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.City+`</span>
</div>
<div class="m-widget16__item">
<span class="m-widget16__date">Phone:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.Phone+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Gender:</span>
<span class="m-widget16__price m--align-left m--font-brand">`;
if (data.Gender==0) {
    gender="Girl";
} else if(data.Gender==1){
    gender="Boy";
} else{
    gender="Other";
}
html+=gender+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Height:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.Height+` m</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Weight:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.Weight+` KG</span></div>

<div class="m-widget16__item"><span class="m-widget16__date">
</span>
<span class="m-widget16__price m--align-left m--font-danger"></span></div></div></div>
<div class="col-md-6">

<div class="m-widget16__body">
<div class="m-widget16__item">
<span class="m-widget16__date">avgScore:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.avgScore+`</span>
</div>
<div class="m-widget16__item">
<span class="m-widget16__date">VIPLevel:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.VIPLevel+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Likes:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.likes+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">TypeWork:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.typeWork+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Price:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.Price+` VND/`+data.typePrice+`</span></div>
<div class="m-widget16__item">
<span class="m-widget16__date">Group Name:</span>
<span class="m-widget16__price m--align-left m--font-brand">`+data.GroupName+`</span></div>
<div class="m-widget16__item"><span class="m-widget16__date"></span>
<span class="m-widget16__price m--align-left m--font-danger"></span></div></div></div></div>
<div class="row">
<div class="col-md-12">
<div class="m-widget16__item">
<span class="m-widget16__date">Major: </span>
<span class="m-widget16__price m--align-left m--font-danger">`;
b="";
for (let k = 0; k < data.Category.length; k++) {
if (k%2==0) {
    b=`<button type="button" class="btn btn-brand">`+data.Category[k]['Name']+` ( `+data.Category[k]['Name_en']+` )</button>`;
} else {
    b=`<button type="button" class="btn btn-metal">`+data.Category[k]['Name']+` ( `+data.Category[k]['Name_en']+` )</button>`;
 } 
}
html+=b+`
</span>
</div>
</div>
</div><br>
<div class="row">
<div class="col-md-12">
<div class="m-widget16__item">
<span class="m-widget16__date">Intro: </span>
<span class="m-widget16__price m--align-left m--font-danger"> `+data.DisplayNameOwner+`</span>
</div>
</div>
</div><br>
<div class="row">
<div class="col-md-12">
<div class="m-widget16__item">
<span class="m-widget16__date">Description: </span>
<span class="m-widget16__price m--align-left m--font-danger"> `+data.DisplayNameOwner+`</span>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="m-widget16__item">
<span class="m-widget16__date">Gegree: </span>
<span class="m-widget16__price m--align-left m--font-danger"> 
<div class="col-md-12">
<div class="row">`;
for (var z = 0; z < data.Media.length; z++) {
html+=`    <div class="col-md-4">
        <img style="width: 100%;height: 200px;" src="`+data.Media[z]['MediaURL']+`">
    </div>`;
}
html+=`
</div>
</div><br>
<div class="col-md-12">
<div class="row">`;
html+=`<button type="button" onclick="change_master_att('+ t.UID +');" class="btn btn-danger">Active Master</button>`;
html+=`
</div>
</div>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>`;
              $('.add_pop').html(html);
               //  console.log(data)
            }
        })  
    $('#myModal_user').modal('show');
    }       
</script>

<!-- pop up show user detail -->
<style type="text/css" media="screen">
    textarea:disabled{
        background-color: #fff;
    }
</style>
<div class="modal fade " id="myModal_user" role="dialog" >

    <div class="modal-dialog modal-sm modal-sm1" role="document">
        <div class="modal-content">
           
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                   User detail
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body add_pop"> 


            </div>
           

        </div>
    </div>

</div>    
<!-- end user detail -->





    <!-- pop up-->
<div class="modal fade" id="myModal_edit_attribute" role="dialog">
<form name="frm" class="m-form" id="m_form_2" novalidate="novalidate" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Edit User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                </button>
            </div>
            <div class="modal-body">
              
<div class="row">
<<input type="hidden" id="txt_id" name="txt_id" value="">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Display name</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" id="txt_display_name" name="txt_display_name" class="form-control m-input" placeholder="Dislay name">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>

</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Password</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input type="password" id="txt_password" name="txt_password" class="form-control m-input" placeholder="Password">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="fa    fa-key"></i></span></span>
                        </div>
                    </div>  
  </div>

</div>
<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Gender</label>                       
                        <select name="txt_gender" id="txt_gender" class="form-control m_selectpicker">
                        <option value="0">Girl</option>
                        <option value="1">Boy</option>
                        <option value="2">Other</option>
                        </select>
                        
                    </div>  
  </div>
</div>
<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Status</label>                       
                        <select name="txt_status" id="txt_status" class="form-control m_selectpicker">
                        <option value="0">Available</option>
                        <option value="1">Busy</option>
                        <option value="2">Banned</option>
                        <option value="3">Delete</option>
                        <option value="4">Unavailable</option>                        
                        </select>                        
                    </div>  
  </div>
</div>
<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Avatar</label>                       
                        <div class="m-input-icon m-input-icon--left">
    <input type="file" name="avatar" id="avatar" value="" placeholder="">

                        </div>

                        
                    </div>  
  </div>
</div>                                           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit"  class="btn btn-primary">
                    Send
                </button>
            </div>
        </div>
    </div>
</form>
</div>    