<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
	<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
			<div class="symbol symbol-50px me-5">
			<?php ?>
				<img alt="Logo" src="<?=$avatar?>" />
			</div>
			<div class="d-flex flex-column">
				<div class="fw-bolder d-flex align-items-center fs-5"><?=$init_users->u_name; ?>
				<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
				<a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?=$init_users->u_email?></a>
			</div>
		</div>
	</div>
	<div class="separator my-2"></div>
	<div class="menu-item px-5">
		<a href="?page=account/overview" class="menu-link px-5">My Profile</a>
	</div>
	<div class="separator my-2"></div>
	<div class="menu-item px-5">
		<a href="#" class="menu-link px-5 logout_admin">Sign Out</a>
	</div>	
</div>