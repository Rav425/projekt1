<div class="d-flex align-items-center flex-shrink-0">
	<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
		<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
				<span class="text-muted fs-8 fw-bold lh-1 mb-1"></span>
				<span class="text-white fs-8 fw-bolder lh-1"><?=$init_users->u_name?></span>
			</div>
			<div class="symbol symbol-30px symbol-md-40px">
				<img src="<?=$avatar?>" alt="image" />
			</div>
		</div>
		<?php include CPTMPL . 'partials/menus/_user-account-menu.php'; ?>
	</div>
</div>