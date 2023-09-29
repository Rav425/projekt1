<div class="tab-pane fade mb-20 pb-20" id="tab_4">
	<div class="card mb-20 mb-xl-10">
		<div class="card-header cursor-pointer">
			<div class="card-title m-0">
				<h3 class="fw-bolder m-0"><?php $init_lang->pick_lang('MY_UNIT_TEXT'); ?></h3>
			</div>
			<button id="" onclick="document.getElementById('add_unit').click()" class="btn btn-primary align-self-center"><?php $init_lang->pick_lang('ADD_UNIT'); ?></button>
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