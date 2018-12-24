
<script type="text/javascript">
  $(document).ready(function() {
    loadajax();
    clickc();
 });
  function clickc() {
    $('.clickc').click(function(){
    name_vi=$(this).attr('data-name-vi');
    name_en=$(this).attr('data-name-en');    
    description=$(this).attr('data-description'); 
    description_en=$(this).attr('data-description_en'); 
    parent_id=$(this).attr('data-parentid'); 
    avatar=$(this).attr('data-avatar'); 
  //  alert(avatar);
    id=$(this).attr('data-id');              
    $( '#txt_avatar_pop' )[0].files[0] ;   
    $( '#txt_name_vn_pop' ).val(name_vi) ;   
    $( '#txt_name_en_pop' ).val(name_en) ;   
    $( '#txt_description_vn_pop' ).val(description) ;   
    $( '#txt_description_en_pop' ).val(description_en) ;      
    $( '#txt_id_pop' ).val(id) ;  
    $('#category_parent').val(parent_id).trigger('change');    
    $('#myModal_edit_attribute').modal('show');
     if (avatar!="") {
    $('#hinh').css('display','block'); 
    $('#hinh').attr('src', avatar);
     } else{
           $('#hinh').css('display','none'); 
     } 
        ;
  }); 
  }
   var FormControls = {
    init: function() {
        $("#m_form_2").validate({
            rules: {
                txt_name_vn_pop: {
                    required: !0
                },                               
                txt_name_en_pop: {
                    required: !0
                }  
            },

            submitHandler: function(e) {
            add_category();
            }
        })
    }
};
jQuery(document).ready(function() {
    FormControls.init()
});
function add_category() {
   data = new FormData();
    data.append( 'parent_id', $( '#category_parent' ).val() );              
    data.append( 'avatar', $( '#txt_avatar_pop' )[0].files[0] );   
    data.append( 'name_vi', $( '#txt_name_vn_pop' ).val() );   
    data.append( 'name_en', $( '#txt_name_en_pop' ).val() );   
    data.append( 'description_vi', $( '#txt_description_vn_pop' ).val() );   
    data.append( 'description_en', $( '#txt_description_en_pop' ).val() );               
    data.append( 'id', $( '#txt_id_pop' ).val() );   
                 $.ajax({
                    url: PATH + 'admin/category/add_category',
                    type: 'post', dataType: 'json',
                    data: data,
                    async:false,                    
                    processData: false,
                    contentType: false,
                    success: function (data) {  

                        if (data.status == true) {
                        swal("Good job!","You clicked the button!","success")
                        $('#myModal_edit_attribute').modal('hide');                         
                        loadajax(); 
                        
                        } else {
                            swal("Fail job!","You clicked the button!","error")
                            console.log(data.msg)
                        }
                    }
                }) 
}
  function new_category() {
    $( '#category_parent' ).val(0) ;              
    $( '#txt_avatar_pop' )[0].files[0] ;   
    $( '#txt_name_vn_pop' ).val("") ;   
    $( '#txt_name_en_pop' ).val("") ;   
    $( '#txt_description_vn_pop' ).val("") ;   
    $( '#txt_description_en_pop' ).val("") ;      
    $( '#txt_id_pop' ).val(0) ; 
    $('#myModal_edit_attribute').modal('show');
    $('#hinh').css('display','none');
  }

    function delete1(id) {
        //url : setting/changestatus
             swal({
            title: "Are you sure delete this row?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!"
            }).then(function (e) {     
        $.ajax({
            url: PATH + 'admin/category/delete1',
            type: 'post', dataType: 'json',
            data: {category_id: id},
            success: function (data) {  
                if (data.status == true) {
            e.value && swal("Deleted!", "Your file has been deleted.", "success")
            loadajax();
                  
                } else {
                    swal("Fail job!","You clicked the button!","error")
                    console.log(data.msg)
                }
            }
        })
            })
    }

    function loadajax() {
  $.ajax({
            url: PATH + 'admin/category/listcategory',
            type: 'post', 
            dataType: 'json',
            async:false,
            data: {},
            success: function (data) {  
                html="";
              if (data.data.length>0) {
              for (var i = 0; i < data.data.length; i++) {
                 html+='<tr data-row="" class="m-datatable__row" style="left: 0px;border-bottom:1px double #f7f6fa"><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 650px;"><i style="color: #926ce2" class="fa fa-circle" aria-hidden="true"></i> ---- ';
                html+=  data.data[i]['Name']+ ' ( '+data.data[i]['Name_en'] +' )';
              html+='</span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;"><a data-name-vi="'+data.data[i]['Name']+'" data-name-en="'+data.data[i]['Name_en']+'" data-Description="'+data.data[i]['Description']+'" data-Description_en="'+data.data[i]['Description_en']+'" data-parentID="'+data.data[i]['parentID']+'" data-Avatar="'+data.data[i]['Avatar']+'" data-Avatar="'+data.data[i]['Avatar']+'" data-id="'+data.data[i]['CID']+'"    class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill clickc" title="Edit details"><i class="la la-eye"></i></a><a data-name-vi="'+data.data[i]['Name']+'" data-name-en="'+data.data[i]['Name_en']+'" data-Description="'+data.data[i]['Description']+'" data-Description_en="'+data.data[i]['Description_en']+'" data-parentID="'+data.data[i]['parentID']+'" data-Avatar="'+data.data[i]['Avatar']+'" data-id="'+data.data[i]['CID']+'"    class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill clickc" title="Edit details"><i class="la la-edit"></i></a><a  class=" delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="delete1('+data.data[i]['CID'] +')"  title="Delete"><i class="la la-trash"></i></a></span></td></tr>';
                               for (var j = 0; j < data.data[i]['Child'].length; j++) {
                              html+=' <tr data-row="" class="m-datatable__row" style="left: 0px;border-bottom:1px double #f7f6fa"><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 650px;"> &nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="public/images/tree.gif" >&nbsp;&nbsp;';
                               html+=  data.data[i]['Child'][j]['Name']+ ' ( '+data.data[i]['Child'][j]['Name_en'] +' )';
                              html+='</span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;"><a  data-name-vi="'+data.data[i]['Child'][j]['Name']+'" data-name-en="'+data.data[i]['Child'][j]['Name_en']+'" data-Description="'+data.data[i]['Child'][j]['Description']+'" data-Description_en="'+data.data[i]['Child'][j]['Description_en']+'" data-parentID="'+data.data[i]['Child'][j]['parentID']+'" data-Avatar="" data-id="'+data.data[i]['Child'][j]['CID']+'"    class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill clickc" title="Edit details"><i class="la la-eye"></i></a><a data-name-vi="'+data.data[i]['Child'][j]['Name']+'" data-name-en="'+data.data[i]['Child'][j]['Name_en']+'" data-Description="'+data.data[i]['Child'][j]['Description']+'" data-Description_en="'+data.data[i]['Child'][j]['Description_en']+'" data-parentID="'+data.data[i]['Child'][j]['parentID']+'" data-Avatar="" data-id="'+data.data[i]['Child'][j]['CID']+'"   class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill clickc" title="Edit details"><i class="la la-edit"></i></a><a  class=" delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="delete1('+data.data[i]['Child'][j]['CID'] +')"  title="Delete"><i class="la la-trash"></i></a></span></td></tr> ';
                             }               
              }         
             } else {
              html+='<tr><td colspan="6">Not found!</td></tr>';
             } 
               $('.catagory').html(html);
                 console.log(data.data)
            }
        })  
    clickc();
    }
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
                   Category
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
                            Category Parent:
                        </label>
                        <select name="category_parent" id="category_parent" class="form-control m_selectpicker">
                         <option  value="0">Root</option>
                       
                        <?php foreach ($list['data'] as $key => $value) { ?>
                          <option value="<?=$value['CID']?>"> --- <?=$value['Name']?></option>   
                       <?php  } ?>                           
                       
                        </select>
                        <div class="d-md-none m--margin-bottom-10"></div> 
                    </div>
 
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
                           Name VN:
                        </label>
                        <input type="text" class="form-control" id="txt_name_vn_pop" name="txt_name_vn_pop">
                     <span class="m-form__help">Please enter your Name VN.</span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Name EN:
                        </label>
                        <input type="text" class="form-control" id="txt_name_en_pop" name="txt_name_en_pop">
                     <span class="m-form__help">Please enter your Name EN.</span>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Description VN:
                        </label>
                    <textarea class="form-control m-textarea" rows="5" name="txt_description_vn_pop" id="txt_description_vn_pop"></textarea> 
                     <span class="m-form__help">Please enter your Description VN.</span>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">
                           Description EN:
                        </label>
                    <textarea class="form-control m-textarea" rows="5" name="txt_description_en_pop" id="txt_description_en_pop"></textarea> 
                     <span class="m-form__help">Please enter your Description EN.</span>
                    </div>

            </div>
            <input type="hidden" id="txt_id_pop" name="id" value="0">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" onclick="" class="btn btn-primary save_edit">
                    Send
                </button>
            </div>
        </div>
    </div>
</form>
</div>    


