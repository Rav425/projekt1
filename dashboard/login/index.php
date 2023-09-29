<?php
include '../../system/config/init.php';
if(isset($_SESSION['CpLoginState'])){
    $SessionLogin = $_SESSION['CpLoginState'];
    $checkResult = $init_users->CpCheckLogVal();
	if($checkResult == 1){
		header('Location:../');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
		<title><?php $init_lang->pick_lang('LOGIN_TITLE'); ?> | <?=APPNAMEEN;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />

		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="../../logo.svg" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        
		<link href="../../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../<?php echo CPTMPL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    	<link href="../<?php echo CPTMPL; ?>assets/css/style.css?v=<?php echo fileatime('../' . CPTMPL . 'assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        
	</head>
	<body id="kt_body" class="bg-dark">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(../<?php echo CPTMPL; ?>assets/media/illustrations/sketchy-1/14-dark.png">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<a href="#" class="mb-12">
						<img alt="Logo" src="../../logo.svg" class="h-75px" />
						<img alt="Logo" src="../../logo (2).svg" class="h-75px" />
					</a>
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <form class="form w-100" novalidate="novalidate" id="login_form">
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Sign In to <b class="text-primary"><?=APPNAMEEN;?></b></h1>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="login_email" id="login_email" autocomplete="off">
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
								</div>
								<input class="form-control form-control-lg form-control-solid" type="password" name="login_password" id="login_password" autocomplete="new-password">
							</div>
                            <div class="separator my-10"></div>
							<div class="text-center">
								<button type="submit" id="req_login" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="d-flex flex-center flex-column-auto p-10">
				</div>
			</div>
		</div>
		
		<script src="../../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../<?php echo CPTMPL; ?>assets/js/scripts.bundle.js"></script>
    
    	<script src="<?php echo '../../' . DIRLIBS; ?>js/jwt.js"></script>
    	<script src="js/op.js?v=<?php echo fileatime("js/op.js"); ?>"></script>
		
	</body>
</html>