
<div class="m-portlet m-portlet--mobile">
     <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                               COINS <small>List Coins</small>
                            </h3>

                        </div>
                                                    <a style="position: absolute;right: 20px;top: 12px;" href="javascript:void(0)" onclick="add_new_attribute();" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                            <i class="  flaticon-user-add"></i>
                            <span>New Coin</span>
                        </span>
                    </a>  
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
                source: {read: {url: PATH + "admin/coin/get_coin"}},
                pageSize: 20,
                saveState: {cookie: false, webstorage: false},
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            rows: {
                afterTemplate: function (row, data, index) {

                }
            },            
            layout: {theme: "default", class: "", scroll: !1, height: 'auto', footer: !1},
            sortable: !0,
            filterable: !1,
            pagination: !0,
         
            columns: [

                {
                    field: "id", title: "id", width: 50,
                    template: function (t) {
                        console.log(t)

                       return `<span style="width:150px;">` + t.id + `</span>`                     
                    }
                },
                {
                    field: "name", title: "Name", width: 100,
                    template: function (t) {
                        console.log(t)
                        return `<span style="width:150px;">` + t.name + `</span>` 
                    }
                },            
                {
                    field: "address", title: "Address", width: 250,
                    template: function (t) {
                        console.log(t)
                        return `<span style="width:150px;">` + t.address + `</span>` 
                    }
                },
                {
                    field: "price", title: "Price", width: 100,
                    template: function (t) {
                        console.log(t)
                        return  `<span style="width:150px;">` + t.val + `</span>` 
                    }
                },                                  
                {
                    field: "Percent", title: "Percent", width: 100,
                    template: function (t) {
                        console.log(t)
                        return  `<span style="width:150px;">` + t.Percent + `</span>` 
                    }
                }, 
                {
                    field: "Date_create", title: "Date", width: 90,
                    template: function (t) {
                        console.log(t);
                        return `<span style="width:150px;">` + moment(t.Date_create*1000).format('D/M/YYYY')  + `</span>` 
                }
                }, 
                {
                    field: "Action", title: "Action", width: 110,
                    template: function (t) {
                        console.log(t)
                        return ` <span style="width: 110px;">
                    <a data-id="`+t.id+`" data-name="`+t.name+`" data-address="`+t.address+`" data-pecent="`+t.Percent+`" onclick="show(this)" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill edit" title="Edit"><i class="la la-edit"></i></a>
                    <a onclick="if (!confirm('Xác nhận xóa')) return false;
                        else
                            delete1(`+t.id+`);"   class=" delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill"  title="Delete"><i class="la la-trash"></i></a>
                    </span>`;
                    }
                }              
                                
            ]
        })

  }        



</script>
<!-- popup user new !-->
<?php include "js.php" ?>
<!-- end popup user new !-->



