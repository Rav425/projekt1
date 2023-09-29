<!--begin::Topbar-->
<div class="d-flex align-items-center flex-shrink-0">
	
	<div class="d-flex align-items-center ms-1">
		<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-30px h-30px h-40px w-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<span class="svg-icon svg-icon-1">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
					<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
					<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
					<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
				</svg>
			</span>
		</div>
		<?php include CPTMPL . 'partials/menus/_quick-links-menu.php'; ?>
	</div>
	
	<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
		<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
				<span class="text-muted fs-8 fw-bold lh-1 mb-1"></span>
				<span class="text-white fs-8 fw-bolder lh-1">
					<?=$init_users->u_name?>
				</span>
			</div>
			<div class="symbol symbol-30px symbol-md-40px">
				<img src="<?=CPTMPL?>/assets/media/avatars/blank.png" alt="image" />
			</div>
		</div>
		<?php include CPTMPL . 'partials/menus/_user-account-menu.php'; ?>
	</div>
</div>