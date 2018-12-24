
<script type="text/javascript">
    function show_booking(id) {
        $('#pop_'+id).html();
        $('.add_pop').html($('#pop_'+id).html());
        $('.add_pop > #pop1_'+id).css('display','block');
        $('#myModal_user').modal('show');
    }    
</script>
<!-- pop up show user detail -->

<div class="modal fade " id="myModal_user" role="dialog" >

    <div class="modal-dialog modal-sm modal-sm1" role="document">
        <div class="modal-content">
           
            <div style="" class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                   Booking detail
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