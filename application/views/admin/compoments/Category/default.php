<?php include "js_category.php" ?>
<div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption" style="position: relative;">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                Category <small>LIST CATEGORY</small>
                            </h3>
                        </div>
                        <a style="position: absolute;right: 20px;top: 12px;" href="javascript:void(0)" onclick="new_category();" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                            <i class="la la-cart-plus"></i>
                            <span>New Category</span>
                        </span>
                    </a>    
                    </div>
                </div>
   
    <div class="m-portlet__body">       
        <!--begin: Datatable -->
     
        <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll" id="scrolling_vertical" >
        <table class="m-datatable__table" >
        <thead class="m-datatable__head">
        <tr class="m-datatable__row" >
        
        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 650px;">Name</span></th>

        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Actions</span>
        </th>
        </tr>
        </thead>
        <tbody class="m-datatable__body ps ps--active-x ps--active-y catagory" style="max-height: 800px;overflow: scroll;">       
</tbody>
</table>



</div>

        <!--end: Datatable -->
    </div>
</div>             

