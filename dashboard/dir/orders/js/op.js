$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var table = $('#orders_table');
		table.DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			"ordering": true,
			"deferRender": true,
			paging: true,
            "order": [[0, 'desc']],
            "pageLength": 25,
			ajax: {
				url: '../system/requests/units/cp_orders.php',
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

        $(document).on('click', '#reload_category', function(e){
            e.preventDefault();
            table.DataTable().clear().destroy();
            table.DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "ordering": true,
                "deferRender": true,
                paging: true,
                "order": [[0, 'desc']],
                "pageLength": 25,
                ajax: {
                    url: '../system/requests/categories/categories.php',
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
});