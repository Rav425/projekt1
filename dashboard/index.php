<?php
include '../system/config/init.php';
if(isset($_SESSION['CpLoginState'])){
	$SessionLogin = $_SESSION['CpLoginState'];
	$checkResult = $init_users->CpCheckLogVal();
	if($checkResult != 1){
		header("Location:login");
	}
	else {
		$init_users->logged_Cpuserinfo();
		if(empty($init_users->u_avatar)){$avatar=CPTMPL."assets/media/avatars/300-1.jpg";}else{$avatar='../system/requests/users/avatar/'.$init_users->u_avatar;}
	}
}
else {
	header("Location:login");
}
?>
<!DOCTYPE html>
<html lang="en">
		<title><?php $init_lang->pick_lang('HOME_TITLE'); ?> | <?=APPNAMEEN;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="../logo.svg" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="../<?php echo CPTMPL; ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.dark.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo CPTMPL; ?>assets/css/style.dark.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo CPTMPL; ?>assets/css/style.css?v=<?php echo fileatime(CPTMPL . "assets/css/style.css"); ?>" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed dark-mode">
		<?php include CPTMPL . 'partials/_loader.php'; ?>
		<?php include CPTMPL . 'layout/master.php'; ?>
		<?php include CPTMPL . 'partials/engage/_main.php'; ?>
		<?php include CPTMPL . 'partials/_scrolltop.php'; ?>
		<script src="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo CPTMPL; ?>assets/js/scripts.bundle.js"></script>
		<script src="../<?php echo CPTMPL; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="<?php echo CPTMPL; ?>assets/js/widgets.bundle.js"></script>
		<script src="../<?php echo CPTMPL; ?>assets/js/custom/widgets.js"></script>
		<script src="../<?php echo DIRLIBS; ?>js/jwt.js"></script>
		<script src="../<?php echo PUBJS?>?v=<?php echo fileatime('../' . PUBJS);?>"></script>
		<?php
			if($go == ''){	echo '
				<script src="dir/home/js/op.js?v='.filemtime("dir/home/js/op.js").'"></script>
			';	}
			elseif($go == 'categories'){	echo '
				<script src="dir/categories/js/op.js?v='.filemtime("dir/categories/js/op.js").'"></script>
			';	}
			elseif($go == 'units'){	echo '
				<script src="dir/units/js/op.js?v='.filemtime("dir/units/js/op.js").'"></script>
			';	}
			elseif($go == 'users'){	echo '
				<script src="dir/users/js/op.js?v='.filemtime("dir/users/js/op.js").'"></script>
			';	}
			elseif($go == 'languages'){	echo '
				<script src="dir/languages/js/op.js?v='.filemtime("dir/languages/js/op.js").'"></script>
			';	}
			elseif($go == 'orders'){	echo '
				<script src="dir/orders/js/op.js?v='.filemtime("dir/orders/js/op.js").'"></script>
			';	}
			
		?>		
	</body>
</html>
