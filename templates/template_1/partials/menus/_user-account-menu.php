<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
	<?php
	if($login == 0){?>
	<div class="menu-item px-5">
		<a href="login" class="menu-link px-5"><?php $init_lang->pick_lang('LOGIN_TEXT'); ?></a>
	</div>
	<div class="menu-item px-5">
		<a href="register" class="menu-link px-5"><?php $init_lang->pick_lang('REGISTER_TEXT'); ?></a>
	</div>
	<?php } elseif ($login== 1) {?>
	<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
			<div class="symbol symbol-50px me-5">
				<img alt="Logo" src="<?= CPTMPL ?>/assets/media/avatars/blank.png" />
			</div>
			<div class="d-flex flex-column">
				<div class="fw-bolder d-flex align-items-center fs-5">
					<?=$init_users->u_name?>
				</div>
				<a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?=$init_users->u_email?></a>
			</div>
		</div>
	</div>
	<div class="separator my-2"></div>
	<div class="menu-item px-5">
		<a href="?go=profile" class="menu-link px-5"><?php $init_lang->pick_lang('MY_PROFILE'); ?></a>
	</div>
	<?php if($init_users->u_type == 2){ ?>
	<div class="menu-item px-5">
		<a href="?go=add_unit" class="menu-link px-5"><?php $init_lang->pick_lang('ADD_UNIT'); ?></a>
	</div>
	<div class="menu-item px-5">
		<a href="?go=my_units" class="menu-link px-5">
			<span class="menu-text"><?php $init_lang->pick_lang('MY_UNIT_TEXT'); ?></span>
			<span class="menu-badge">
				<span class="badge badge-light-danger badge-circle fw-bolder fs-7"><?=$init_units->logged_units_count()?></span>
			</span>
		</a>
	</div>
	<?php } elseif($init_users->u_type == 1){ ?>
	<div class="menu-item px-5">
		<a href="?go=my_reserve" class="menu-link px-5">
			<span class="menu-text"><?php $init_lang->pick_lang('MY_RESERVE'); ?></span>
			<span class="menu-badge">
				<span class="badge badge-light-danger badge-circle fw-bolder fs-7"><?=$init_units->logged_reserves_count()?></span>
			</span>
		</a>
	</div>
	<div class="menu-item px-5">
		<a href="?go=my_favourite" class="menu-link px-5">
			<span class="menu-text"><?php $init_lang->pick_lang('FAV_UNIT_TEXT'); ?></span>
			<span class="menu-badge">
				<span class="badge badge-light-danger badge-circle fw-bolder fs-7"><?=$init_units->logged_likes_count()?></span>
			</span>
		</a>
	</div>
	<?php }} ?>
	<div class="separator my-2"></div>
	<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
		<?php if( $_COOKIE['LANG'] == 'EN' ) { ?>
		<a href="#" class="menu-link px-5">
			<span class="menu-title position-relative">
				<?=$init_lang->pick_lang('PREF_LANG')?>
				<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
					<?=$init_lang->pick_lang('ENGLISH_TEXT')?>
					<img class="w-15px h-15px rounded-1 ms-2" src="<?= CPTMPL ?>assets/media/flags/united-states.svg" alt="" />
				</span>
			</span>
		</a>
		<?php } elseif($_COOKIE['LANG'] == 'DE') { ?>
		<a href="#" class="menu-link px-5">
			<span class="menu-title position-relative">
				<?=$init_lang->pick_lang('PREF_LANG')?>
				<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
					<?=$init_lang->pick_lang('GERMAN_TEXT')?>
					<img class="w-15px h-15px rounded-1 ms-2" src="<?= CPTMPL ?>assets/media/flags/germany.svg" alt="" />
				</span>
			</span>
		</a>
		<?php } ?>
		<div class="menu-sub menu-sub-dropdown w-175px py-4">
			<div class="menu-item px-3">
				<a href="#" class="menu-link d-flex px-5 lang_to_en">
					<span class="symbol symbol-20px me-4">
						<img class="rounded-1" src="<?= CPTMPL ?>assets/media/flags/united-states.svg" alt="" />
					</span>
					<?=$init_lang->pick_lang('ENGLISH_TEXT')?>
				</a>
			</div>
			<div class="menu-item px-3">
				<a href="#" class="menu-link d-flex px-5 lang_to_de">
					<span class="symbol symbol-20px me-4">
						<img class="rounded-1" src="<?= CPTMPL ?>assets/media/flags/germany.svg" alt="" />
					</span>
					<?=$init_lang->pick_lang('GERMAN_TEXT')?>
				</a>
			</div>
		</div>
	</div>
	<?php if ($login== 1) {?>
	<div class="menu-item px-5">
		<a href="#" class="menu-link px-5 logout">
			<span class="text-danger"><?=$init_lang->pick_lang('LOGOUT_TEXT')?></span>
			<span class="svg-icon svg-icon-danger svg-icon-2x">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor"/>
				<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor"/>
				<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"/>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</a>
	</div>
	<?php } ?>
</div>