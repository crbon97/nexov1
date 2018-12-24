 <script type="text/javascript">  
$(document).ready(function() {
   loadajax(); 
   
});

  function clickc() {
    $('.clickc').off('click').on('click', function () { 
    PImage=$(this).attr('data-PImage'); 
    PStatus=$(this).attr('data-PStatus'); 
    $('#txt_avatar_pop')[0].files[0] ;   
     $('#txt_name_pop').val($(this).attr('data-PName')) ;   
     $('#txt_description_pop').val($(this).attr('data-PDescription')) ;   
     $('#txt_coin_pop').val($(this).attr('data-PCoin')) ;     
   //  $('#txt_status').val(PStatus) ;  
     $('#txt_id_pop').val($(this).attr('data-PID')) ; 
     if (PStatus==1) {
    $('#txt_status').attr('checked','checked');       
    } 
    $('#myModal_edit_attribute').modal('show');
      if (PImage!="") {
     $('#hinh').css('display','block'); 
     $('#hinh').attr('src', PImage);
      } else{
            $('#hinh').css('display','none'); 
      }  ;
  }); 
  }
  function new_product() { 

     $('#txt_name_pop').val("") ;   
     $('#txt_description_pop').val("") ;   
     $('#txt_coin_pop').val("") ;     
     $('#txt_id_pop').val("") ; 
    $('#myModal_edit_attribute').modal('show');
     $('#hinh').css('display','none'); 
  }  
function add_product() {
    data = new FormData();
    data.append( 'name', $( '#txt_name_pop' ).val() );              
    data.append( 'avata', $( '#txt_avatar_pop' )[0].files[0] );   
    data.append( 'description', $( '#txt_description_pop' ).val() );   
    data.append( 'coin', $('#txt_coin_pop').val());
    if ($('#txt_status').is(':checked')==true) {
    status=1;
    } else{
    status=0;
    }  
    data.append( 'status', status );               
    data.append( 'product_id', $( '#txt_id_pop' ).val() );   
                 $.ajax({
                    url: PATH + 'admin/listproduct/add_product',
                    type: 'post', dataType: 'json',
                    data: data,
                    async:true,                    
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
 var FormControls = {
    init: function() {
        $("#m_form_2").validate({
            rules: {
                txt_name_pop: {
                    required: !0
                },                               
                txt_coin_pop: {
                    number: !0
                },
            },

            submitHandler: function(e) {
    add_product()


            }
        })
    }
};
jQuery(document).ready(function() {
    FormControls.init()
});

</script> 

<style type="text/css">
.form-control-feedback {
    color: #f4516c;
}
</style>


<!-- star pop -->
<div class="modal fade " id="myModal_edit_attribute" role="dialog" >
<form class="m-form" id="m_form_2" novalidate="novalidate" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                   Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                </button>
            </div>
            <div class="modal-body">

                
 
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">
                            Picture:
                        </label>
                        <input type="file" class="form-control" id="txt_avatar_pop" name="txt_avatar_pop">
                    </div> 
                    <div class="form-group">
                    <img id="hinh" style="width: 100px;height: 100px" src="" alt="asd">
                    </div>                                        
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Name:
                        </label>
                        <input type="text" class="form-control" id="txt_name_pop" name="txt_name_pop">
                     <span class="m-form__help">Please enter your Name.</span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Description:
                        </label>
                    <textarea class="form-control m-textarea" rows="5" name="txt_description_pop" id="txt_description_pop"></textarea> 
                     <span class="m-form__help">Please enter your Description .</span>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Coin:
                        </label>
                        <input type="text" class="form-control" id="txt_coin_pop" name="txt_coin_pop">
                     <span class="m-form__help">Please enter your Coin.</span>
                    </div>                    
                    <span class="m-switch m-switch--xs check">
                        <label><input type="checkbox" id="txt_status" value=""><span></span> </label>
                                                                    </span>

            </div>
            <input type="hidden" id="txt_id_pop" name="id" value="0">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit"  class="btn btn-primary save_edit">
                    Send
                </button>
            </div>
        </div>
    </div>
</form>
</div>    

