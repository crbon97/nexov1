
<div class="m-portlet m-portlet--mobile">
     <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                Bookings <small>List Bookings</small>
                            </h3>

                        </div>
                         
                    </div>
                </div>
<div class="m-portlet__body">
<!-- <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="form-group m-form__group row align-items-center">
                      

    <div class="col-md-4">
                                                  
                                                   
                                                </div>

                   
                    </div>
                </div>
              <div class="col-xl-4 order-1 order-xl-2 m--align-right">

                </div> 
            </div>
        </div> -->
    <div class="m_datatable m-datatable m-datatable--default " id="m_datatable"></div>
</div>
</div>

<script>
 function submit_bookings() {
                  options = {
                          group_id: $("#groundid").val()                 
                      }
                      $("#m_datatable").mDatatable().search(
                          options , "group_category"                        
                     );
 }
$(document).ready(function() {
  ajaxload();
});
        function ajaxload() {
        $("#m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {read: {url: PATH + "admin/bookings/getlistgroupcat"}},
                pageSize: 10,
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
                    field: "#", title: "#", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.BookingID + "</span>"
                    }
                }, 
                {
                    field: "CusName", title: "CusName", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.CusName + "</span>"
                    }
                }, 
                {
                    field: "MasterName", title: "MasterName", width: 100,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' + t.MasterName + "</span>"
                    }
                },            
                {
                    field: "BookingFrom", title: "BookingFrom", width: 90,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' +moment(t.BookingFrom*1000).format("DD/MM/YYYY")  + "</span>"
                    }
                },
                {
                    field: "BookingTo", title: "BookingTo", width: 90,
                    template: function (t) {
                        console.log(t)
                        return '<span style="width:150px;">' +moment(t.BookingTo*1000).format("DD/MM/YYYY")  + "</span>"
                    }
                },                                  
                {
                    field: "createDate", title: "createDate", width: 90,
                    template: function (t) {
                        console.log(t);                        
                        return '<span style="width:150px;">' + moment(t.createDate*1000).format("DD/MM/YYYY")  + "</span>"
                    }
                },
                {
                    field: "BookingStatus", title: "BookingStatus", width: 90,
                    template: function (t) {
                        console.log(t)
                         if (t.BookingStatus==0) {
                             a='<span class="m-badge m-badge--brand m-badge--wide a-available">Booking</span>';
                         } else if (t.BookingStatus==1)  {
                            a='<span class="m-badge  m-badge--info m-badge--wide a-busy">Accept </span>';
                         }
                         else if (t.BookingStatus==2)  {
                            a='<span style="background:#dc9611" class="m-badge  m-badge--info m-badge--wide a-banned">Reject </span>';
                         }
                         else if (t.BookingStatus==3)  {
                             a='<span style="background:#cc1cbe" class="m-badge  m-badge--info m-badge--wide a-delete">Checking </span>';
                         }
                         else if (t.BookingStatus==4)  {
                             a='<span style="background:#f56d1e" class="m-badge  m-badge--info m-badge--wide a-unavailable">Working </span>';
                         }    
                         else if (t.BookingStatus==5)  {
                             a='<span style="background:#f7363f" class="m-badge  m-badge--info m-badge--wide a-unavailable">Cancel </span>';
                         }  
                         else if (t.BookingStatus==6)  {
                             a='<span style="background:#cca691" class="m-badge  m-badge--info m-badge--wide a-unavailable">Finish  </span>';
                         }                                                                        
                        return a
                    }
                },
        {
        field: "Actions",
        width: 150,
        title: "Actions",
        sortable: !1,
        overflow: "visible",
        template: function(t, e, i) {
          html="";
          html+='<div id="pop_'+t.BookingID+'"><div id="pop1_'+t.BookingID+'"  style="display:none" class=" row"><div class="col-lg-12"><div class="m-portlet  m-portlet--full-height "><div class="m-portlet__body"><div class="m-widget16"><div class="row"><div class="col-md-6"><div class="m-widget16__head"><div class="m-widget16__item"><span class="m-widget16__sceduled"></span><span class="m-widget16__amount m--align-left"><img style="width: 70px;height: 70px;border-radius: 100% " src="';
          html+=t.CusAvatar;
          html+='"></span></div></div><div class="m-widget16__body"><div class="m-widget16__item"><span class="m-widget16__date">CusName:</span><span class="m-widget16__price m--align-left m--font-brand">';
          html+=t.CusName;
          html+='</span></div><div class="m-widget16__item"><span class="m-widget16__date">BookingFrom:</span><span class="m-widget16__price m--align-left m--font-brand">';
          html+= moment(t.BookingFrom*1000).format("DD/MM/YYYY")  ;
          html+='</span></div><div class="m-widget16__item"><span class="m-widget16__date"></span><span class="m-widget16__price m--align-left m--font-danger"></span></div></div></div><div class="col-md-6"><div class="m-widget16__head"><div class="m-widget16__item"><span class="m-widget16__sceduled"></span><span class="m-widget16__amount m--align-left"><img style="width: 70px;height: 70px;border-radius: 100% " src="';
          html+=t.MasterAvatar;
          html+='"></span></div></div><div class="m-widget16__body"><div class="m-widget16__item"><span class="m-widget16__date">MasterName:</span><span class="m-widget16__price m--align-left m--font-brand">';
          html+=t.MasterName;
          html+='</span></div><div class="m-widget16__item"><span class="m-widget16__date">BookingTo:</span><span class="m-widget16__price m--align-left m--font-brand">';
          html+=moment(t.BookingTo*1000).format("DD/MM/YYYY");
          html+='</span></div><div class="m-widget16__item"><span class="m-widget16__date"></span><span class="m-widget16__price m--align-left m--font-danger"></span></div></div></div></div><div class="row"><div class="col-md-12"><div class="m-widget16__item"><span class="m-widget16__date">BookingNotes: </span><span class="m-widget16__price m--align-left m--font-danger"> ';
          html+=t.BookingNotes;
          html+='</span></div></div></div></div></div></div></div><div class="m-portlet__body"><div class="clearfix"></div><div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll" id="scrolling_vertical"><table class="m-datatable__table"><thead class="m-datatable__head">';
          html+='<tr class="m-datatable__row"><th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">DisplayName</span></th><th data-field="CompanyEmail" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 80px;">DateFrom</span></th><th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 80px;">DateTo</span></th><th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Notes</span></th><th data-field="CompanyEmail" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 80px;">AddTime</span></th><th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Action Type</span></th></tr></thead><tbody class="m-datatable__body ps ps--active-x ps--active-y" style="max-height: 499px;overflow: scroll;">';
          for ( k = 0; k < t.Detail.length; k++) {
            html+='<tr data-row="0" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 100px;"> <span style="width: 100px;"><div class="m-card-user m-card-user--sm"><div class="m-card-user__pic">';
            html+='<img src="';
            html+=t.Detail[k]['Avatar'];
            html+='" class="m--img-rounded m--marginless" alt="photo">';
            html+='</div><div class="m-card-user__details"><span class="m-card-user__name">';
            html+=t.Detail[k]['DisplayName'];
            html+='</span></div></div></span></span></td>';
            html+='<td  class="m-datatable__cell"><span style="width: 80px;">19/09/2018</span></td><td data-field="CompanyEmail" class="m-datatable__cell"><span style="width: 80px;">';
            html+= moment(t.Detail[k]['DateFrom']*1000).format("DD/MM/YYYY");
            html+='</span></td><td data-field="CompanyEmail" class="m-datatable__cell"><span style="width: 100px;">';
            html+=t.Detail[k]['Notes'];
            html+='</span></td><td data-field="CompanyEmail" class="m-datatable__cell"><span style="width: 80px;">';
            html+=moment(t.Detail[k]['DateTo']*1000).format("DD/MM/YYYY");;
            html+='</span></td><td data-field="CompanyEmail" class="m-datatable__cell"><span class="m-badge  m-badge--info m-badge--wide a-busy" style="width: 100px;color:#fff" >';
            html+=t.Detail[k]['actionType'];
            html+='</span></td></tr>';
          }
            html+='</tbody></table></div></div></div></div>';

          return html+'<a onclick="show_booking('+t.BookingID+')"  class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Show">  <i class="la la-eye"></i></a>'
        }
      }               
                                
            ]
        })

  }        



</script>
<script type="text/javascript">
  
</script>
<!-- popup user new !-->
<?php include "js_bookings.php" ?>
<!-- end popup user new !-->



