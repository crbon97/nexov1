
<div class="m-portlet m-portlet--mobile">
     <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                Users <small>List Users</small>
                            </h3>

                        </div>
                              <!--                       <a style="position: absolute;right: 20px;top: 12px;" href="javascript:void(0)" onclick="add_new_attribute();" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                            <i class="  flaticon-user-add"></i>
                            <span>New User</span>
                        </span>
                    </a>  -->   
                    </div>
                </div>
<div class="m-portlet__body">
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="form-group m-form__group row align-items-center">
                  
                    </div>
                </div>
              <div class="col-xl-4 order-1 order-xl-2 m--align-right">

                </div> 
            </div>
        </div>
    <div class="m_datatable m-datatable m-datatable--default " id="m_datatable"></div>
</div>
</div>

<script>
$(document).ready(function() {
  ajaxload();  
});
        function ajaxload() {
        $("#m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {read: {url: PATH + "admin/users/getlist"}},
                pageSize: 10,
                saveState: {cookie: false, webstorage: false},
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            rows: {
                afterTemplate: function (row, data, index) {
            
                ; 
                }
            },            
            layout: {theme: "default", class: "", scroll: !1, height: 'auto', footer: !1},
            sortable: !0,
            filterable: !1,
            pagination: !0,
         
            columns: [

                {
                    field: "ID", title: "ID", width: 50,
                    template: function (t) {
                        console.log(t)
                       return ' <span style="width: 200px;">' +t.ID+'</span>'                        
                    }
                },
                {
                    field: "Email", title: "Email", width: 150,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.Email + "</span>"
                    }
                },            
                {
                    field: "Phone", title: "Phone", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.Phone + "</span>"
                    }
                },
                                
                {
                    field: "createDate", title: "createDate", width: 100,
                    template: function (t) {
                        console.log(t);
                        return '<span style="width:150px;">' + moment(t.Date_create*1000).format("DD/MM/YYYY")  + "</span>"
                    }
                }                                
            ]
        })
  }        
</script>
<!-- popup user new !-->
<?php// include "js_changeuser.php" ?>
<!-- end popup user new !-->



