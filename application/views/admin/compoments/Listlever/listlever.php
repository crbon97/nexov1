
<div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                List Product <small>List Product</small>
                            </h3>
                        </div>
                       <!--  <a style="position: absolute;right: 20px;top: 12px;" href="javascript:void(0)" onclick="new_product()" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                            <i class="la la-cart-plus"></i>
                            <span>New lever</span>
                        </span>
                    </a>   -->  
                    </div>
                </div>
   
    <div class="m-portlet__body">       
        <!--begin: Datatable -->   
        <div id="m_datatable" class="m_datatable ">
        </div>
        <!--end: Datatable -->
    </div>
</div> 
<script type="text/javascript">
$(document).ready(function() {
	loadajax();
});
        function loadajax() {

        $("#m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {read: {url: PATH + "admin/listlever/getlistlever"}},
                saveState: {cookie: false, webstorage: false},
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },       
            layout: {theme: "default", class: "", scroll: !1, height: 'auto', footer: !1},
            sortable: !0,
            filterable: !1,
            pagination: !0,         
            columns: [

                {
                    field: "LID", title: "LID", width: 150,
                    template: function (t) {
                        console.log(t)

                       return ' <span style="width:150px;">' + t.LID + '</span>'
                   }
                },
                {
                    field: "title", title: "Lever", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">Lever ' + t.level + "</span>"
                    }
                },            
                {
                    field: "price", title: "Price", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.price + "</span>"
                    }
                }                                                    
            ]
        })

  }      
</script>            
<?php// include "js_listproduct.php" ?>

