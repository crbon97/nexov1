<!--begin::Portlet-->

<div class="m-portlet m-portlet--tabs">
	<div class="m-portlet__head">
		<div class="m-portlet__head-tools">
			<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_builder_page" role="tab" aria-selected="true">
						General Setting
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--begin::Form-->
<div class="m-form m-form--label-align-right m-form--fit">
		<div class="m-portlet__body">
			<div class="tab-content">
				<div class="tab-pane active show" id="m_builder_page">
<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-4 col-sm-12">Switch ON/OFF:</label>
				<div class="col-lg-8 col-md-8 col-sm-12">
					<input data-switch="true" type="checkbox" <?php if ($list->Switch==1) {
						echo 'checked="checked"';
					} ?>   id="m_switch_1"></div></div>

				</div>
			</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Rate USD/VND:</label>
						<div class="col-lg-8 col-xl-4">
<div class="input-group">
                                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la 	la-money"></i>
																			</span>
                                                        </div>
                                                        <input type="number" name="txt_rate_usd" id="txt_rate_usd" value="<?=$list->Rate_usd?>" class="form-control m-input" placeholder="22000" aria-describedby="txt_currency-error" aria-invalid="false">
                                                    <span class="m-form__help col-xl-12 col-lg-12">
																	EX: 1 USD = <?=$list->Rate_usd?> VND	
																	</span>
                                                    </div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Percent Loan / 1 month:</label>
						<div class="col-lg-8 col-xl-4">
<div class="input-group">
                                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-money"></i>
																			</span>
                                                        </div>
                                                        <input type="number" name="txt_percent" id="txt_percent" value="<?=$list->Percent?>" class="form-control m-input" placeholder="3%" aria-describedby="txt_currency-error" aria-invalid="false">
                                                    <span class="m-form__help col-xl-12 col-lg-12">
																		EX: Percent Loan 3%/ 1 month = 30 day
																	</span>
                                                    </div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Min Loan:</label>
						<div class="col-lg-8 col-xl-4">
<div class="input-group">
                                                        <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-money"></i>
																			</span>
                                                        </div>
                                                        <input type="number" name="txt_min" id="txt_min" value="<?=$list->Min?>" class="form-control m-input" placeholder="200" aria-describedby="txt_currency-error" aria-invalid="false">
                                                    <span class="m-form__help col-xl-12 col-lg-12">
																		EX: 200 million
																	</span>
                                                    </div>
						</div>
					</div>					
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Max Loan:</label>
						<div class="col-lg-8 col-xl-4">
<div class="input-group">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
														<i class="la la-money"></i>
														</span>
                                                        </div>
                                                        <input type="number" name="txt_max" id="txt_max" value="<?=$list->Max?>" class="form-control m-input" placeholder="1000" aria-describedby="txt_currency-error" aria-invalid="false">
                                                    <span class="m-form__help col-xl-12 col-lg-12">
																		EX: Max 10 billions
													</span>
                                                    </div>
						</div>
					</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-8 ">
                <button type="button" onclick="save_general()"  class="btn btn-primary">
                    Send
                </button>

                <button type="button" class="btn btn-secondary edit_coin" data-dismiss="modal">
                    Close
                </button>
					</div>
				</div>
			</div>
		</div>	
			
				</div>
			</div>
		</div>

</div>
	<!--end::Form-->
</div>
<!--end::Portlet-->
<?php include "js_general.php" ?>

		      