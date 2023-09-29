<?php
include 'system/config/init.php';
$login = 0;
if(!empty($_SESSION['UserLoginState'])){
	$SessionLogin = isset($_SESSION['UserLoginState']) ? $_SESSION['UserLoginState'] : "";
}
if(!isset($SessionLogin)){
	// header('Location:login/');
}
elseif(isset($SessionLogin)) {
	$checkResult = $init_users->CheckLogVal();
	if($checkResult != 1){
		$login = 0;
		// header('Location:login/');
	}
	else {
		$login = 1;
		$init_users->logged_userinfo();
	}
}
if(!empty($init_users->u_avatar)){
	$u_avatar = 'system/requests/users/avatar/' . $init_users->u_avatar;
}
else {
	$u_avatar = CPTMPL . 'assets/media/avatars/blank.png';
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php $init_lang->pick_lang('HOME_TITLE'); ?> | Home</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />

		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="logo.svg" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<link href="<?php echo CPTMPL; ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo CPTMPL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo CPTMPL; ?>assets/css/style.css?v=<?php echo fileatime(CPTMPL . "assets/css/style.css"); ?>" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->
	
	<!--begin::Body-->
	<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed">

		<?php include CPTMPL . 'partials/_loader.php'; ?>


		<?php include CPTMPL . 'layout/master.php'; ?>


		<?php include CPTMPL . 'partials/engage/_main.php'; ?>


		<?php include CPTMPL . 'partials/_scrolltop.php'; ?>

		
		<input type="hidden" class="CONFIRM_LOGOUT" value="<?php $init_lang->pick_lang('CONFIRM_LOGOUT'); ?>">
		<input type="hidden" class="LOGOUT_TEXT" value="<?php $init_lang->pick_lang('LOGOUT_TEXT'); ?>">
		<input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
		<input type="hidden" class="SUCCESS_LOGOUT" value="<?php $init_lang->pick_lang('SUCCESS_LOGOUT'); ?>">
		<input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">

		<script src="<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo CPTMPL; ?>assets/js/scripts.bundle.js"></script>
		<script src="<?php echo CPTMPL; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>		
		<script src="<?php echo CPTMPL; ?>assets/js/custom/widgets.js"></script>
		<script type="module" src="<?php echo DIRLIBS; ?>js/js-cookie/dist/js.cookie.js"></script>
		
		<script src="<?php echo DIRLIBS; ?>js/jwt.js"></script>
		<script src="<?php echo PUBJS?>?v=<?php echo fileatime(PUBJS);?>"></script>

		<?php
			if($go == ''){	echo '
				<script src="dir/home/js/op.js?v='.filemtime("dir/home/js/op.js").'"></script>
			';	}
			elseif($go == 'home'){	echo '
				<script src="dir/home/js/op.js?v='.filemtime("dir/home/js/op.js").'"></script>
			';	}

			elseif($go == 'profile'){	echo '
				<script src="dir/users/profile/js/op.js?v='.filemtime("dir/users/profile/js/op.js").'"></script>
			';	}
			elseif($go == 'add_unit'){	echo '
				<script src="dir/units/add_unit/js/op.js?v='.filemtime("dir/units/add_unit/js/op.js").'"></script>
			';	}
			elseif($go == 'my_units'){	echo '
				<script src="dir/units/my_units/js/op.js?v='.filemtime("dir/units/my_units/js/op.js").'"></script>
			';	}
			elseif($go == 'view_unit'){	echo '
				<script src="dir/units/view_unit/js/op.js?v='.filemtime("dir/units/view_unit/js/op.js").'"></script>
			';	}
			elseif($go == 'my_reserve'){	echo '
				<script src="dir/reserves/my_reserve/js/op.js?v='.filemtime("dir/reserves/my_reserve/js/op.js").'"></script>
			';	}
			elseif($go == 'my_favourite'){	echo '
				<script src="dir/units/my_favourite/js/op.js?v='.filemtime("dir/units/my_favourite/js/op.js").'"></script>
			';	}

		?>

	</body>
</html>
