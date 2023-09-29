<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
	<div class="page-title d-flex flex-column me-3">
		<h1 class="d-flex text-dark fw-bolder my-1 fs-3"><?=$init_lang->pick_lang('MY_RESERVE')?></h1>
		<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
			<li class="breadcrumb-item text-gray-600">
				<a href="?go=home" class="text-gray-600 text-hover-primary"><?=$init_lang->pick_lang('HOME_TITLE')?></a>
			</li>
			<li class="breadcrumb-item text-gray-600"><?=$init_lang->pick_lang('MY_RESERVE')?></li>
		</ul>
	</div>
</div>

<div class="content flex-column-fluid" id="kt_content">
	<div class="card mb-20 mb-xl-10">
		<div class="card-header cursor-pointer">
			<div class="card-title m-0">
				<h3 class="fw-bolder m-0"><?php $init_lang->pick_lang('MY_RESERVE'); ?></h3>
			</div>
		</div>
		<div class="card-body row">		
			<table class="table align-center table-row-bordered fs-6 gy-5" id="reserves_table">
				<thead>
					<tr class="fw-bold text-gray-800 bg-light" style="text-align: center;">
						<th style="font-weight: bold;">ID</th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('ADDED_ON'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('CHECK_IN'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('CHECK_OUT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('GUSTS_TEXT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('NIGHT_COST'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('NIGHTS_TEXT'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('SUB_COST'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('FINAL_COST'); ?></th>
						<th style="font-weight: bold;"><?php $init_lang->pick_lang('STATUE_TEXT'); ?></th>
						<th style="font-weight: bold;text-align:center;"><?php $init_lang->pick_lang('MANAGE_PROFILE'); ?></th>
					</tr>
				</thead>
				<tbody class="fw-bold fs-5">
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'modals.php'; ?>

<input type="hidden" class="CONFIRM_CANCEL_RESERVE" value="<?php $init_lang->pick_lang('CONFIRM_CANCEL_RESERVE'); ?>">
<input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
<input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
<input type="hidden" class="UPDATE_SUCCESS" value="<?php $init_lang->pick_lang('UPDATE_SUCCESS'); ?>">
<input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
<input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
<input type="hidden" class="CONFIRM_DELETE_RESERVE" value="<?php $init_lang->pick_lang('CONFIRM_DELETE_RESERVE'); ?>">

<input type="hidden" class="DATA_WRONG" value="<?php $init_lang->pick_lang('DATA_WRONG'); ?>">
<input type="hidden" class="REQUIRED_TEXT" value="<?php $init_lang->pick_lang('REQUIRED_TEXT'); ?>">
<input type="hidden" class="UPLOAD_SUCCESS_TEXT" value="<?php $init_lang->pick_lang('UPLOAD_SUCCESS_TEXT'); ?>">
<input type="hidden" class="CONFIRM_DEL_IMG" value="<?php $init_lang->pick_lang('CONFIRM_DEL_IMG'); ?>">
<input type="hidden" class="CONFIRM_UPDATE_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_UPDATE_UNIT'); ?>">
<input type="hidden" class="CONFIRM_DEL_UNIT" value="<?php $init_lang->pick_lang('CONFIRM_DEL_UNIT'); ?>">