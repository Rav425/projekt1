$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var table = $('#units_table');
		table.DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			"ordering": false,
			"deferRender": true,
			paging: true,
			ajax: {
				url: 'system/requests/units/fav_units.php',
				type: 'POST'
			},
            "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
		});

    });
});
