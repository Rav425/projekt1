$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var table = $('#reserves_table');
		table.DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			"ordering": false,
			"deferRender": true,
			paging: true,
			ajax: {
				url: 'system/requests/units/reserves.php',
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

        $(document).on('click', '.cancelthis', function(e){
            e.preventDefault();
            var u_id = $(this).attr('uid');
            if(u_id >= 1){
                Swal.fire({
                    title: $('.CONFIRM_CANCEL_RESERVE').val(),
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: $('.CONFIRM_TEXT').val(),
                    cancelButtonText: $('.CANCEL_TEXT').val(),
                    reverseButtons: true,
                    customClass: {
                        confirmButton: "btn btn-danger",
                        cancelButton: "btn btn-light",
                    }
                }).then(function (result) {
                    if (result.value) {
                        var oHeader = { alg: 'HS256' };
                        var sHeader = JSON.stringify(oHeader);
                        var oPayload = {};
                        oPayload.u_id = u_id;
                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                        $.ajax({
                            url: 'system/requests/units/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                cancel_reserve: 1,
                                reserve_id: RegArrData
                            },
                            success: function (call_res) {    //console.log(call_res);
                                if(call_res == 1){
                                    swal.fire({
                                        text: $('.UPDATE_SUCCESS').val(),
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: $('.CONTINUE_BTN').val(),
                                        customClass: {
                                            confirmButton: "btn btn-success"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                                else {
                                    swal.fire({
                                        text: call_res,
                                        icon: "warning",
                                        buttonsStyling: false,
                                        confirmButtonText: $('.TRYAGAIN_TEXT').val(),
                                        customClass: {
                                            confirmButton: "btn btn-warning"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    }
                });
            }
        });

        $(document).on('click', '.deletethis', function(e){
            e.preventDefault();
            var u_id = $(this).attr('uid');
            if(u_id >= 1){
                Swal.fire({
                    title: $('.CONFIRM_DELETE_RESERVE').val(),
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: $('.CONFIRM_TEXT').val(),
                    cancelButtonText: $('.CANCEL_TEXT').val(),
                    reverseButtons: true,
                    customClass: {
                        confirmButton: "btn btn-danger",
                        cancelButton: "btn btn-light",
                    }
                }).then(function (result) {
                    if (result.value) {
                        var oHeader = { alg: 'HS256' };
                        var sHeader = JSON.stringify(oHeader);
                        var oPayload = {};
                        oPayload.u_id = u_id;
                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                        $.ajax({
                            url: 'system/requests/units/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                delete_reserve: 1,
                                reserve_id: RegArrData
                            },
                            success: function (call_res) {    //console.log(call_res);
                                if(call_res == 1){
                                    swal.fire({
                                        text: $('.UPDATE_SUCCESS').val(),
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: $('.CONTINUE_BTN').val(),
                                        customClass: {
                                            confirmButton: "btn btn-success"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                                else {
                                    swal.fire({
                                        text: call_res,
                                        icon: "warning",
                                        buttonsStyling: false,
                                        confirmButtonText: $('.TRYAGAIN_TEXT').val(),
                                        customClass: {
                                            confirmButton: "btn btn-warning"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    }
                });
            }
        });


    });
});