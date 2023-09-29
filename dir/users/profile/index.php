<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
	<div class="page-title d-flex flex-column me-3">
		<h1 class="d-flex text-dark fw-bolder my-1 fs-3"><?=$init_lang->pick_lang('MY_PROFILE')?></h1>
		<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
			<li class="breadcrumb-item text-gray-600">
				<a href="?go=home" class="text-gray-600 text-hover-primary"><?=$init_lang->pick_lang('HOME_TITLE')?></a>
			</li>
			<li class="breadcrumb-item text-gray-600"><?=$init_lang->pick_lang('MY_PROFILE')?></li>
		</ul>
	</div>
</div>

<div class="content flex-column-fluid" id="kt_content">
	<div class="card mb-5 mb-xl-10">
		<div class="card-body pt-9 pb-0">
			<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
				<div class="me-7 mb-4">
					<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
						<img src="<?=$u_avatar;?>" alt="image" />
						<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
					</div>
				</div>
				<div class="flex-grow-1">
					<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
						<div class="d-flex flex-column">
							<div class="d-flex align-items-center mb-2">
								<span class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1" style="text-transform:uppercase">
                                    <?=$init_users->u_name?>
                                </span>
							</div>
							<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">

								<span class="d-flex align-items-center text-gray-400 text-hover-primary mb-2 me-5">
									<span class="svg-icon svg-icon-4 me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
											<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
										</svg>
									</span>
									<?=$init_users->u_email; ?>
								</span>

								<span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
									<span class="svg-icon svg-icon-4 me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
											<path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="currentColor"/>
											<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
										</svg>
									</span>
									<?=$init_users->u_mobile?>
								</span>
								<span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2" style="text-transform:uppercase">
									<span class="svg-icon svg-icon-4 me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
											<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
										</svg>
									</span>
									<?=$init_users->u_country?> - 
									<?=$init_users->u_city?>
								</span>
							</div>
						</div>

						<div class="d-flex my-4">
							<div class="me-0">
								<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
									<i class="bi bi-three-dots fs-3"></i>
								</button>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
									<div class="menu-item px-3">
										<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            <?=$init_lang->pick_lang('MY_PROFILE')?>
                                        </div>
									</div>
									<div class="menu-item px-3">
										<button type="button" class="btn menu-link px-3 w-100 disable_profile">
                                            <?=$init_lang->pick_lang('DISABLE_PROFILE')?>
                                        </button>
									</div>
									<div class="menu-item px-3">
										<button type="button" class="btn menu-link px-3 w-100 delete_profile">
                                            <?php $init_lang->pick_lang('DELETE_PROFILE')?>
                                        </button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="d-flex flex-wrap flex-stack">
						<div class="d-flex flex-column flex-grow-1 pe-8">
							<div class="d-flex flex-wrap">
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
									<div class="d-flex align-items-center">
										<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="350" data-kt-countup-prefix="">0</div>
									</div>
									<div class="fw-bold fs-6 text-gray-400">
                                        <?=$init_lang->pick_lang('PROFILE_VIEW')?>
                                    </div>
								</div>
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
									<div class="d-flex align-items-center">
										<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
									</div>
									<div class="fw-bold fs-6 text-gray-400">
                                        <?=$init_lang->pick_lang('MOBILE_VIEW')?>
                                    </div>
								</div>
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
									<div class="d-flex align-items-center">
										<div class="rating mb-2">
											<div class="rating-label checked">
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
													</svg>
												</span>
											</div>
											<div class="rating-label checked">
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
													</svg>
												</span>
											</div>
											<div class="rating-label checked">
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
													</svg>
												</span>
											</div>
											<div class="rating-label">
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
													</svg>
												</span>
											</div>
											<div class="rating-label">
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor"></path>
													</svg>
												</span>
											</div>
										</div>
									</div>
									<div class="fw-bolder fs-6 text-gray-400">
                                        <?=$init_lang->pick_lang('USER_RATE')?>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5 active" id="overview" data-bs-toggle="pill" href="#tab_1">
                        <?=$init_lang->pick_lang('PROFILE_OVERVIEW')?>
                    </a>
				</li>
                
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" id="edit_profile" data-bs-toggle="pill" href="#tab_2">
                        <?=$init_lang->pick_lang('MANAGE_PROFILE')?>
                    </a>
				</li>
                <?php
                    if($init_users->u_type == 2){
                ?>                
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" id="add_unit" data-bs-toggle="pill" href="#tab_3">
                        <?=$init_lang->pick_lang('ADD_UNIT'); ?>
                    </a>
				</li>
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" id="my_unit" data-bs-toggle="pill" href="#tab_4">
                        <?=$init_lang->pick_lang('MY_UNIT_TEXT'); ?>&nbsp;-&nbsp;<span class="text-primary">(<?=$init_units->my_unit_count()?>)</span>
                    </a>
				</li>
                <?php } elseif ($init_users->u_type == 1){ ?>
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" id="favourite_unit" data-bs-toggle="pill" href="#tab_5">
                        <?=$init_lang->pick_lang('FAV_UNIT_TEXT'); ?>
                    </a>
				</li>
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" id="recent_purchased" data-bs-toggle="pill" href="#tab_6">
                        <?=$init_lang->pick_lang('RECENT_PURCHASED'); ?>
                    </a>
				</li>
                <?php } ?>
			</ul>
		</div>
	</div>
	<div class="tab-content row">

		<?php include 'overview.php'; ?>

		<?php include 'manage.php'; ?>

		<?php include 'new_unit.php'; ?>
		
		<?php include 'my_units.php'; ?>

		<?php include 'modals.php'; ?>

	</div>

</div>

<input type="hidden" class="EMAIL_REQUIRE" value="<?php $init_lang->pick_lang('EMAIL_REQUIRE'); ?>">
<input type="hidden" class="EMAIL_WRONG" value="<?php $init_lang->pick_lang('EMAIL_WRONG'); ?>">
<input type="hidden" class="EMAIL_CHKERR" value="<?php $init_lang->pick_lang('EMAIL_CHKERR'); ?>">
<input type="hidden" class="PASSWORD_REQUIRE" value="<?php $init_lang->pick_lang('PASSWORD_REQUIRE'); ?>">
<input type="hidden" class="PASSWORD_LENGTH_CHKERR" value="<?php $init_lang->pick_lang('PASSWORD_LENGTH_CHKERR'); ?>">

<input type="hidden" class="UPDATE_SUCCESS" value="<?php $init_lang->pick_lang('UPDATE_SUCCESS'); ?>">
<input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
<input type="hidden" class="EXSIST_ERR_TEXT" value="<?php $init_lang->pick_lang('EXSIST_ERR_TEXT'); ?>">
<input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
<input type="hidden" class="PASSWORD_WRONG_TEXT" value="<?php $init_lang->pick_lang('PASSWORD_WRONG_TEXT'); ?>">
<input type="hidden" class="DATA_WRONG" value="<?php $init_lang->pick_lang('DATA_WRONG'); ?>">
<input type="hidden" class="REQUIRED_TEXT" value="<?php $init_lang->pick_lang('REQUIRED_TEXT'); ?>">
<input type="hidden" class="UPLOAD_SUCCESS_TEXT" value="<?php $init_lang->pick_lang('UPLOAD_SUCCESS_TEXT'); ?>">
<input type="hidden" class="SUCCESS_ADD_TEXT" value="<?php $init_lang->pick_lang('SUCCESS_ADD_TEXT'); ?>">
<input type="hidden" class="CONFIRM_DEL_IMG" value="<?php $init_lang->pick_lang('CONFIRM_DEL_IMG'); ?>">
<input type="hidden" class="CONFIRM_UPDATE_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_UPDATE_UNIT'); ?>">
<input type="hidden" class="CONFIRM_DEL_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_DEL_UNIT'); ?>">
<input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
<input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
<input type="hidden" class="CONFIRM_ADD_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_ADD_UNIT'); ?>">

<input type="hidden" class="USERNAME_REQUIRE" value="<?php $init_lang->pick_lang('USERNAME_REQUIRE'); ?>">
<input type="hidden" class="USERNAME_WRONG" value="<?php $init_lang->pick_lang('USERNAME_WRONG'); ?>">
<input type="hidden" class="EMAIL_CHKERR" value="<?php $init_lang->pick_lang('EMAIL_CHKERR'); ?>">
<input type="hidden" class="CONFIRMREG_TEXT" value="<?php $init_lang->pick_lang('CONFIRMREG_TEXT'); ?>">
