
<div class="m-portlet m-portlet--mobile">
     <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                               LOAN <small>List loan</small>
                            </h3>
                        </div>
                    </div>
                </div>
<div class="m-portlet__body">
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-12 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
<div class="col-lg-2 m--margin-bottom-10-tablet-and-mobile">
                    <label>Status:</label>
                    <select class="form-control m-input" data-col-index="6" name="status" id="status">
                    <option value="0">ALL</option>
                    <option value="1">Pending</option>
                    <option value="2">Success</option>
                    <option value="3">Cancel</option>
                    </select>
</div>
<div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                    <label>Date to Date:</label>
                    <div class="input-daterange input-group" id="m_datepicker">
                        <input type="text" class="form-control m-input" id="start_s" name="start" placeholder="From" data-col-index="5">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="form-control m-input" id="end_s" name="end" placeholder="To" data-col-index="5">
                    </div>
</div>

                                </div>
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
              $('#types').change(function(event) {
                 start="", end="";
                if ($("#start_s").val()!="") {
                    start=$("#start_s").val();
                }
                if ($("#end_s").val()!="") {
                    end=$("#end_s").val();
                } 
               
                  options = {
                        type:$("#types").val(),                               
                        status: $("#status").val(), //'default/dropdown'     
                        date_from: start,   
                        date_to: end,
                      }
                      $("#m_datatable").mDatatable().search(
                          options , "list"                        
                     );
              });
              $('#status').change(function(event) {
                 start="", end="";
                if ($("#start_s").val()!="") {
                    start=$("#start_s").val();
                }
                if ($("#end_s").val()!="") {
                    end=$("#end_s").val();
                } 
               
                  options = {
                        type:$("#types").val(),                               
                        status: $("#status").val(), //'default/dropdown'     
                        date_from: start,   
                        date_to: end,
                      }
                      $("#m_datatable").mDatatable().search(
                          options , "list"                        
                     );
              });
              $('#start_s, #end_s').datepicker().on('changeDate', function () {
                 start="", end="",type="",status="";
                if ($("#start_s").val()!="") {
                    start=$("#start_s").val();
                }
                if ($("#end_s").val()!="") {
                    end=$("#end_s").val();
                }
                  options = {
                          type:  $("#types").val(), //'default/dropdown'    
                           date_from: start,   
                           date_to: end, 
                           type:$("#types").val(),
                           status:$("#status").val(),

                      }
                      $(".m_datatable").mDatatable().search(
                          options , "list"                        
                     );
              });               
        $("#m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {read: {url: PATH + "admin/loan/getlists"}},
                pageSize: 10,
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
                    field: "Email", title: "Email", width: 100,
                    template: function (t) {
                      

                       return `<span style="width:150px;">` + t.Email + `</span>`                     
                    }
                },
                {
                    field: "Name Coin", title: "Name Coin", width: 50,
                    template: function (t) {
                        
                        return `<span style="width:150px;">` + t.Name + `</span>` 
                    }
                },            
                {
                    field: "Content", title: "Content", width: 350,
                    template: function (t) {
                        
                        return `<span style="width:150px;">` + t.Content + `</span>` 
                    }
                },
                {
                    field: "Price_usd", title: "Price USD", width: 100,
                    template: function (t) {
                        
                        return  `<span style="width:150px;">` + t.Price_usd + `</span>` 
                    }
                },                                  
                {
                    field: "Total_coin", title: "Total_coin", width: 100,
                    template: function (t) {
                  
                        return  `<span style="width:150px;">` + t.Total_coin + `</span>` 
                    }
                }, 
                {
                    field: "Total_usd", title: "Total_usd", width: 100,
                    template: function (t) {
                 
                        return  `<span style="width:150px;">` + t.Total_usd + `</span>` 
                    }
                }, 
                {
                    field: "Term", title: "Term", width: 100,
                    template: function (t) {
                     
                        return  `<span style="width:150px;">` + t.Term + `</span>` 
                    }
                }, 
                {
                    field: "Status", title: "Status", width: 100,
                    template: function (t) {
                       str="";
                       if (t.Status==1) {
                        str+=`<span style="width: 133px;"><span class="m-badge m-badge--brand m-badge--wide">Pending</span></span>`
                       } else if (t.Status==2) {
                        str+=`<span style="width: 133px;"><span class="m-badge  m-badge--success m-badge--wide">Success</span></span>`
                       } else if(t.Status==3){
                        str+='<span style="width: 133px;"><span class="m-badge  m-badge--danger m-badge--wide">Cancel</span></span>'
                       }
                         return  str;
                    }
                }, 
                {
                    field: "Date_create", title: "Date create", width: 90,
                    template: function (t) {
                     
                        return `<span style="width:150px;">` + moment(t.Date_create*1000).format('D/M/YYYY')  + `</span>` 
                }
                }, 
                {
                    field: "Date_update", title: "Date update", width: 90,
                    template: function (t) {
                     
                        return `<span style="width:150px;">` + moment(t.Date_update*1000).format('D/M/YYYY')  + `</span>` 
                }
                },
                {
                    field: "Action", title: "Action", width: 100,
                    template: function (t) {
                     
                        return ` <span style="width: 110px;">
                    <a target="b_lank" onclick="show(`+t.ID+`)"  class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill " title="View"><i class="la la-eye"></i></a>
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



