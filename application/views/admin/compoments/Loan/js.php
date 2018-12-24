<script type="text/javascript">
$(document).ready(function() {
    ajaxload();
    
});
</script>
<script type="text/javascript">
function show(id) {
        $.ajax({
            url:  PATH + 'admin/loan/getlist',
            type: "POST",
            data: {id: id},
            success: function (response) {
            var res = (typeof response === 'object') ? response : JSON.parse(response);
            console.log(res.Content);
        }
    })  
    $('#myModal_edit_attribute').modal('show');  
}
        
</script>
<!-- pop up-->
<div class="modal fade" id="myModal_edit_attribute" role="dialog">
<form name="frm" class="m-form" id="m_form_2" novalidate="novalidate" >
    <div class="modal-dialog modal-sm" role="document" style="max-width: 700px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Loan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
              
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Email</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_email" name="txt_email" class="form-control m-input" placeholder="Email">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Name coin</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_name_coin" name="txt_name_coin" class="form-control m-input" placeholder="Name coin">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
</div><br>
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Price usd</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_price_usd" name="txt_price_usd" class="form-control m-input" placeholder="Price usd">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Loan limit</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_loan_limit" name="txt_loan_limit" class="form-control m-input" placeholder="Loan limit">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Total coin</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_total_coin" name="txt_total_coin" class="form-control m-input" placeholder="Total coin">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Total usd</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_total_usd" name="txt_total_usd" class="form-control m-input" placeholder="Total usd">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Date Create</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_date_create" name="txt_date_create" class="form-control m-input" placeholder="Date Create">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Date Update</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_date_update" name="txt_date_update" class="form-control m-input" placeholder="Name coin">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Percent</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_percent" name="txt_percent" class="form-control m-input" placeholder="Date Create">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                        </div>
                    </div>   
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="form-group m-form__group">
                        <label>Term</label>
                        <div class="m-input-icon m-input-icon--left">
                            <input disabled type="text" id="txt_term" name="txt_term" class="form-control m-input" placeholder="Name coin">
                            <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
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




