
		            <div class="row">
	<div class="col-xl-3 col-lg-4">
		<div class="m-portlet m-portlet--full-height  ">
			<div class="m-portlet__body">
				<div class="m-card-profile">
					<div class="m-card-profile__title m--hide">
						Your Profile
					</div>

					<div class="m-card-profile__pic">
						<div class="m-card-profile__pic-wrapper">	
							<img src="<?=$my_profile[0]['Avatar']?>" alt="<?=$my_profile[0]['DisplayName']?>">
						</div>
					</div>
					<div class="m-card-profile__details">
						<span class="m-card-profile__name"><?=$my_profile[0]['DisplayName']?></span>
						<!-- <a href="" class="m-card-profile__email m-link">mark.andre@gmail.com</a> -->
					</div>
				</div>	


				<div class="m-portlet__body-separator"></div>
<div class="m-widget1 m-widget1--paddingless">
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Credits</h3>
								<span class="m-widget1__desc">Credits</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-brand"><?php if (!empty($my_profile[0]['Credits'])) 
									echo $my_profile[0]['Credits']; else echo '0';
								?></span>
							</div>
						</div>
					</div>
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Coins</h3>
								<span class="m-widget1__desc">Coins</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-danger"><?php if (!empty($my_profile[0]['Coins'])) 
									echo $my_profile[0]['Coins']; else echo '0';
								?></span>
							</div>
						</div>
					</div>
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Like</h3>
								<span class="m-widget1__desc">Like</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-success"><?php if (!empty($my_profile[0]['likes'])) 
									echo $my_profile[0]['likes']; else echo '0';
								?></span>
							</div>
						</div>
					</div>
					<!-- <div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Price</h3>
								<span class="m-widget1__desc">Price</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-success"><?=number_format($my_profile[0]['Price'],'0',',','.').''?></span>
							</div>
						</div>
					</div> -->
					<!-- <div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">TypePrice</h3>
								<span class="m-widget1__desc">TypePrice</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-success"><?php if (!empty($my_profile[0]['typePrice'])) 
									echo $my_profile[0]['typePrice']; else echo 'Null';
								?><?=$my_profile[0]['typePrice']?></span>
							</div>
						</div>
					</div> -->
				</div>

			</div>			
		</div>	
	</div>
	<div class="col-xl-9 col-lg-8">
		<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1">
					<form class="m-form m-form--fit m-form--label-align-right">
						<div class="m-portlet__body">
							

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Full Name</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="<?=$my_profile[0]['DisplayName']?>">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Type:</label>
								<div class="col-7">
									  <div class="dropdown bootstrap-select form-control m-bootstrap-select">     
                                              
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="groundid" tabindex="-98">
                        			<option value="" >All</option>  
                        			<?php foreach ($my_city as $key => $value) { ?>
                        				<option value="<?=$value['AID']?>" <?php if ($value['AName']==$my_profile[0]['City']){
                        				echo 'selected';
                        				} ?> > <?=$value['AName']?></option>  
                        			<?php } ?>                      
                 
                                    </select>
                                   </div>
								</div>
								<div class="d-md-none m--margin-bottom-10"></div>
							</div>
							
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Infomation</label>
								<div class="col-7">
								<textarea class="form-control m-textarea" rows="10" name=""><?=$my_profile[0]['Intro']?></textarea>									
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Phone No.</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="<?=$my_profile[0]['Phone']?>">
								</div>
							</div>


						</div>
					<!-- 	<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<div class="row">
									<div class="col-2">
									</div>
									<div class="col-7">
										<button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
										<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
									</div>
								</div>
							</div>
						</div> -->
					</form>
				</div>
				<div class="tab-pane " id="m_user_profile_tab_2">
					
				</div>
				<div class="tab-pane " id="m_user_profile_tab_3">
					
				</div>
			</div>
		</div>
	</div>
</div>		    