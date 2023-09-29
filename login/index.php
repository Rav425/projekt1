<?php
ini_set('display_errors', 1);  
include '../system/config/init.php';

 if(isset($_SESSION['UserLoginState'])) {
 	$checkResult = $init_users->CheckLogVal();
 	if($checkResult == 1){
 		header('Location:../');
 	}
 }
?>
<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <title><?=$init_lang->pick_lang('LOGIN_TEXT')?> | <?=APPNAMEEN?></title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="../logo.svg" />
    <link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../<?php echo CPTMPL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../<?php echo CPTMPL; ?>assets/css/style.css?v=<?php echo fileatime('../' . CPTMPL . 'assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-body" style="font-family: Cairo !important;">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-xl-row flex-column-fluid">

            <div class="d-flex flex-column flex-center flex-lg-row-fluid">
                <div class="d-flex align-items-start flex-column p-5 p-lg-15">
                    <a href="#" class="mb-15 w-100 text-center">
                        <img alt="Logo" src="../logo.svg" class="w-100px" />
                        <img alt="Logo" src="../logo (2).svg" class="w-250px" />
                    </a>
                    <h1 class="text-dark fs-2x mb-3"><?php $init_lang->pick_lang('WELCOME_TEXT'); ?></h1>
                    <div class="fw-bold fs-4 text-gray-400 mb-10" style="max-width:500px;">
						<?php $init_lang->pick_lang('SITE_DESC'); ?>
                    </div>
                </div>
            </div>
            
            <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
                <div class="row p-5 shadow-sm bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3"><?php $init_lang->pick_lang('LOGINNOW_TEXT'); ?></h1>						
						<div class="text-gray-400 fw-bold fs-4 m-5">
							<?php $init_lang->pick_lang('NOT_REGISTERED_TEXT'); ?>
							<a href="../register/" class="link-primary fw-bolder">
								<?php $init_lang->pick_lang('REGISTER_HERE_TEXT'); ?>
							</a>
						</div>
                    </div>
                    
					<form class="form" id="login_form">
						<div class="fv-row mb-10">
							<label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_EMAIL'); ?></label>
							<input class="form-control form-control-solid" type="text" id="u_email" name="u_email" placeholder="">
						</div>
						<div class="fv-row mb-10">
							<label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_PASSWORD'); ?></label>
							<input class="form-control form-control-solid" type="password" name="u_password" id="u_password" placeholder="">
						</div>
						<div class="text-center pb-lg-0 pt-8 mb-10 ">
							<button type="button" id="submit_login" class="btn btn-lg btn-primary w-100 mb-5 try_submit">
								<span class="indicator-label">
									<?php $init_lang->pick_lang('LOGIN_TEXT'); ?>
								</span>
								<span class="indicator-progress">
									<?php $init_lang->pick_lang('PLEASE_WAIT_TEXT'); ?>
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>						
					</form>

					<div class="text-end pb-lg-0 pb-8">

						<button type="button" class="btn btn-flex align-items-cenrer justify-content-center justify-content-md-between align-items-lg-cenrer flex-md-content-between text-muted text-hover-primary px-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
							<span class="d-md-inline">
								<?php $init_lang->pick_lang('CHANGE_LANGUAGE'); ?>
							</span>
							<span class="svg-icon svg-icon-4 ms-md-4 me-0">
								<svg xmlns="http:www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.5657 11.3657L16.75 15.55C17.1642 15.9643 17.8358 15.9643 18.25 15.55C18.6642 15.1358 18.6642 14.4643 18.25 14.05L12.7071 8.50716C12.3166 8.11663 11.6834 8.11663 11.2929 8.50715L5.75 14.05C5.33579 14.4643 5.33579 15.1358 5.75 15.55C6.16421 15.9643 6.83579 15.9643 7.25 15.55L11.4343 11.3657C11.7467 11.0533 12.2533 11.0533 12.5657 11.3657Z" fill="currentColor" />
								</svg>
							</span>
						</button>

						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg fw-bold w-200px pb-3" data-kt-menu="true">
							<div class="menu-item px-3">
								<div class="menu-content fs-7 text-dark fw-bolder px-3 py-4">
									<?php $init_lang->pick_lang('SELECT_LANGUAGE'); ?>
								</div>
							</div>
							<div class="separator mb-3 opacity-75"></div>
							<div class="menu-item px-3">
								<button href="#" class="btn btn-link btn-color-muted px-3 lang_to_de">
									<?php $init_lang->pick_lang('GERMAN_TEXT'); ?>
								</button>
							</div>
							<div class="menu-item px-3">
								<button href="#" class="btn btn-link btn-color-muted px-3 lang_to_en">
									<?php $init_lang->pick_lang('ENGLISH_TEXT'); ?>
								</button>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    
    <input type="hidden" class="EMAIL_REQUIRE" value="<?php $init_lang->pick_lang('EMAIL_REQUIRE'); ?>">
    <input type="hidden" class="EMAIL_WRONG" value="<?php $init_lang->pick_lang('EMAIL_WRONG'); ?>">
    <input type="hidden" class="PASSWORD_REQUIRE" value="<?php $init_lang->pick_lang('PASSWORD_REQUIRE'); ?>">
    <input type="hidden" class="PASSWORD_WRONG" value="<?php $init_lang->pick_lang('PASSWORD_WRONG'); ?>">
    <input type="hidden" class="EMAIL_CHKERR" value="<?php $init_lang->pick_lang('EMAIL_CHKERR'); ?>">
    <input type="hidden" class="CONFIRMREG_TEXT" value="<?php $init_lang->pick_lang('CONFIRMREG_TEXT'); ?>">
    <input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
    <input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
    <input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
    <input type="hidden" class="SUCCESS_LOGIN_TEXT" value="<?php $init_lang->pick_lang('SUCCESS_LOGIN_TEXT'); ?>">
    <input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
    <input type="hidden" class="NOTEXSIST_ERR_TEXT" value="<?php $init_lang->pick_lang('NOTEXSIST_ERR_TEXT'); ?>">
    <input type="hidden" class="SUSPEND_ERR_TEXT" value="<?php $init_lang->pick_lang('SUSPEND_ERR_TEXT'); ?>">
    <input type="hidden" class="PASSWORD_WRONG_TEXT" value="<?php $init_lang->pick_lang('PASSWORD_WRONG_TEXT'); ?>">
	
	<?php //print_r($_SESSION); ?>
    
    <script src="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="../<?php echo CPTMPL; ?>assets/js/scripts.bundle.js"></script>
    
    <script type="module" src="../<?php echo DIRLIBS; ?>js/js-cookie/dist/js.cookie.js"></script>
    
    <script src="<?php echo '../' . DIRLIBS; ?>js/jwt.js"></script>
    
    <script src="js/op.js?v=<?php echo fileatime("js/op.js"); ?>"></script>
    
</body>
</html>
