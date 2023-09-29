<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
	<div class="page-title d-flex flex-column me-3">
		<h1 class="d-flex text-dark fw-bolder my-1 fs-3"><?=$init_lang->pick_lang('MY_UNIT_TEXT')?></h1>
		<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
			<li class="breadcrumb-item text-gray-600">
				<a href="?go=home" class="text-gray-600 text-hover-primary"><?=$init_lang->pick_lang('HOME_TITLE')?></a>
			</li>
			<li class="breadcrumb-item text-gray-600"><?=$init_lang->pick_lang('MY_UNIT_TEXT')?></li>
		</ul>
	</div>
</div>

<div class="content flex-column-fluid" id="kt_content">
	<div class="card mb-20 mb-xl-10">
		<div class="card-header cursor-pointer">
			<div class="card-title m-0">
				<h3 class="fw-bolder m-0"><?php $init_lang->pick_lang('MY_UNIT_TEXT'); ?></h3>
			</div>
            <a href="?go=add_unit" class="btn btn-primary align-self-center"><?php $init_lang->pick_lang('ADD_UNIT'); ?></a>
		</div>
		<div class="card-body row">		
			<table class="table align-center table-row-bordered table-striped fs-6 gy-5" id="units_table">
				<thead>
					<tr class="fw-bold text-gray-800 bg-light" style="text-align: center;">
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_TITLE'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('ADDED_ON'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_COUNTRY'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_CITY'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_HOST_COUNT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_ROOM_COUNT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_PATHS_COUNT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('UNIT_ONE_NIGHT_COST'); ?></th>
						<th style="font-weight: bold;text-align:center;"><?php $init_lang->pick_lang('EDIT_UNIT'); ?></th>
					</tr>
				</thead>
				<tbody class="fw-bold fs-5">
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'modals.php'; ?>

<input type="hidden" class="UPDATE_SUCCESS" value="<?php $init_lang->pick_lang('UPDATE_SUCCESS'); ?>">
<input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
<input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
<input type="hidden" class="DATA_WRONG" value="<?php $init_lang->pick_lang('DATA_WRONG'); ?>">
<input type="hidden" class="REQUIRED_TEXT" value="<?php $init_lang->pick_lang('REQUIRED_TEXT'); ?>">
<input type="hidden" class="UPLOAD_SUCCESS_TEXT" value="<?php $init_lang->pick_lang('UPLOAD_SUCCESS_TEXT'); ?>">
<input type="hidden" class="CONFIRM_DEL_IMG" value="<?php $init_lang->pick_lang('CONFIRM_DEL_IMG'); ?>">
<input type="hidden" class="CONFIRM_UPDATE_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_UPDATE_UNIT'); ?>">
<input type="hidden" class="CONFIRM_DEL_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_DEL_UNIT'); ?>">
<input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
<input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">