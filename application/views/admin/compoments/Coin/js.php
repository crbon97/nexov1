<script type="text/javascript">
$(document).ready(function() {
    ajaxload();
    
});
   
</script>

<script type="text/javascript">
    function add_new_attribute() {
    $('#id').val(0); 
    $('#txt_name').val("");
    $('#txt_address').val("");   
    $('#txt_percent').val("");         
    $('#myModal_edit_attribute').modal('show');
    }
function show(e) {
    $('#id').val($(e).attr('data-id')); 
    $('#txt_name').val($(e).attr('data-name'));
    $('#txt_address').val($(e).attr('data-address'));   
    $('#txt_percent').val($(e).attr('data-pecent')); 
    $('#myModal_edit_attribute').modal('show');  
}
 
   var FormControls = {
    init: function() {
        $("#m_form_2").validate({
            rules: {
                txt_name: {
                    required: !0
                },                               
                txt_address: {
                    required: !0
                },
                txt_percent: {
                    required: !0
                }                   
            },

            submitHandler: function(e) {
            save_add_new();
            }
        })
    }
};
jQuery(document).ready(function() {
    FormControls.init()
});
    function save_add_new() {
        data = new FormData();
        data.append( 'id', $( '#id').val() );  
        data.append( 'name', $( '#txt_name').val() );       
        data.append( 'address', $('#txt_address').val());                      
        data.append( 'percent', $('#txt_percent').val());  
        data.append( 'media', $('#media')[0].files[0]);         
            $.ajax({
                url:  PATH + 'admin/coin/add',
                type: 'post', dataType: 'json',
                data: data,
                async:false,                    
                processData: false,
                contentType: false,
                success: function (data) {
                   swal("Good job!","You clicked the button!","success")
                location.reload();
                }
            })       
    } 
    function delete1(id) {        
            $.ajax({
                    url:  PATH + 'admin/coin/delete_coin',
                    type: "POST",
                    data: {id: id},
                success: function (data) {
                   swal("Good job!","You clicked the button!","success")
              $("#m_datatable").mDatatable().reload();
                }
            })       
    }            
</script>
<!-- pop up-->
<div class="modal fade" id="myModal_edit_attribute" role="dialog">
<form name="frm" class="m-form" id="m_form_2" novalidate="novalidate" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Coin
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                </button>
            </div>
            <div class="modal-body">
              
<div class="row">
<input type="hidden" id="txt_id" name="txt_id" value="">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Name</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" id="txt_name" name="txt_name" class="form-control m-input" placeholder="Name">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>

</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Address</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" id="txt_address" name="txt_address" class="form-control m-input" placeholder="Address">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="fa    fa-key"></i></span></span>
                        </div>
                    </div>  
</div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Percent</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" id="txt_percent" name="txt_percent" class="form-control m-input" placeholder="Percent">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="fa    fa-key"></i></span></span>
                        </div>
                    </div>  
  </div>

</div>

<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group m-form__group">
                        <label>Media</label>    
                       <img src="">          
                        <div class="m-input-icon m-input-icon--left">
    <input type="file" name="media" id="media" value="" placeholder="">

                        </div>

                        
                    </div>  
  </div>
</div>                                           
            </div>
            <<input type="hidden" name="id" id="id" value="0">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary edit_coin" data-dismiss="modal">
                    Close
                </button>
                <button type="submit"   class="btn btn-primary">
                    Send
                </button>
            </div>
        </div>
    </div>
</form>
</div>    