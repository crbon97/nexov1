
<div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                List Product <small>List Product</small>
                            </h3>
                        </div>
                        <a style="position: absolute;right: 20px;top: 12px;" href="javascript:void(0)" onclick="new_product()" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                            <i class="la la-cart-plus"></i>
                            <span>New Product</span>
                        </span>
                    </a>    
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
        function loadajax() {

        $("#m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {read: {url: PATH + "admin/listproduct/getlistproduct"}},
                saveState: {cookie: false, webstorage: false},
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            rows: {
                afterTemplate: function (row, data, index) {
                clickc(); 
                }
            },         
            layout: {theme: "default", class: "", scroll: !1, height: 'auto', footer: !1},
            sortable: !0,
            filterable: !1,
            pagination: !0,         
            columns: [

                {
                    field: "PName", title: "Name", width: 150,
                    template: function (t) {
                        console.log(t)

                       return ' <span style="width:150px;">' + t.PName + '</span>'
                   }
                },
                {
                    field: "PDescription", title: "Description", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.PDescription + "</span>"
                    }
                },            
                {
                    field: "PCoin", title: "Coin", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.PCoin + "</span>"
                    }
                },
                {
                    field: "PImage", title: "Image", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:100px;"> <img style="width:70px;"  src="' + t.PImage + '"> </span>'
                    }
                },                                  
                {
                    field: "PStatus", title: "PStatus", width: 100,
                    template: function (t) {
                        console.log(t); 
                        html=""     ;
                        if (t.PStatus == 1) {html='checked';}else {html+='';} html+= ' name=""> <span></span></label></span></div></span>';

                        return '<span style="width: 100px;"><div class="col-12"><span class="m-switch m-switch--xs"><label><input disabled type="checkbox" '+html;

                        }
                    
                },                   
  
        {
        field: "Actions",
        width: 100,
        title: "Actions",
        sortable: !1,
        overflow: "visible",
        template: function(t, e, i) {
          return '<a data-PID="'+t.PID+'" data-PName="'+t.PName+'" data-PDescription="'+t.PDescription+'"  data-PCoin="'+t.PCoin+'" data-PImage="'+t.PImage+'" data-PStatus="'+t.PStatus+'" class="clickc m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-edit"></i></a>'
        }
      }               
                                
            ]
        })

  }      
</script>            
<?php include "js_listproduct.php" ?>

