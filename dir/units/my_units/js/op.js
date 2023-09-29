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
				url: 'system/requests/units/units.php',
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

		var update1 = '';
		var myDropzone = new Dropzone("#upload_more_images", {
            url: "system/requests/units/op.php",
			paramName : "req_upload_unit",
			maxFiles: 10,
			maxFilesize: 10, // MB
			addRemoveLinks: false,
			acceptedFiles: "image/*",
			addedfiles: function (e) {
				$('.custom_Loader').fadeIn(300);
			},
			success	: function(FileResp1, result1){      //console.log(result);
				$('.custom_Loader').fadeIn(300);
				update1 += result1 + ',';
				$('#eu_images').val(update1);
				setTimeout(function () {
					$('.custom_Loader').fadeOut(300);
					toastr.success($('.UPLOAD_SUCCESS_TEXT').val());
				}, 500);
			}
		});

        var myModal = new bootstrap.Modal($('#unit_modal'));
		$(document).on('click', '.editunit', function(e){
			e.preventDefault();
			var u_id = $(this).attr('uid');
            $('#oldid').val(u_id);
            if(u_id >= 1){
                $.ajax({
                    url: 'system/requests/units/op.php',
                    method: "POST",
                    dataType: "text",
                    data: {
                        req_oldunit: 1,
                        unit_id: u_id,
                        u_admin: 0
                    },
                    success: function (cplog_res) {    console.log(cplog_res);
                        var res = $.parseJSON(cplog_res),
                            images_table = res.images_table,
                            u_title = res.u_title,
                            u_country = res.u_country,
                            u_city = res.u_city,
                            u_address = res.u_address,
                            u_host_count = res.u_host_count,
                            u_room_count = res.u_room_count,
                            u_path_count = res.u_path_count,
                            u_description = res.u_description,
                            u_wifi = res.u_wifi,
                            u_garden = res.u_garden,
                            u_kitchen = res.u_kitchen,
                            u_tv = res.u_tv,
                            u_workspace = res.u_workspace,
                            u_parking = res.u_parking,
                            u_pool = res.u_pool,
                            u_washer = res.u_washer,
                            u_air_conditioning = res.u_air_conditioning,
                            u_fans = res.u_fans,
                            u_refrigerator = res.u_refrigerator,
                            u_one_night_cost = res.u_one_night_cost,
                            u_added_cost = res.u_added_cost,
                            u_category = res.u_category;
                       
                        if (u_wifi == 1) { $('#eu_wifi').attr('checked', true); } else if (u_wifi != 1) { $('#eu_wifi').removeAttr('chkecked'); }
                        if (u_wifi != 1 && $('#eu_wifi').is(':checked') == true) { $('#eu_wifi').click(); }
                        if (u_wifi == 1 && $('#eu_wifi').is(':checked') == false) { $('#eu_wifi').click(); }

                        if (u_garden == 1) { $('#eu_garden').attr('checked', true); } else if (u_garden != 1) { $('#eu_garden').removeAttr('chkecked'); }
                        if (u_garden != 1 && $('#eu_garden').is(':checked') == true) { $('#eu_garden').click(); }
                        if (u_garden == 1 && $('#eu_garden').is(':checked') == false) { $('#eu_garden').click(); }

                        if (u_kitchen == 1) { $('#eu_kitchen').attr('checked', true); } else if (u_kitchen != 1) { $('#eu_kitchen').removeAttr('chkecked'); }
                        if (u_kitchen != 1 && $('#eu_kitchen').is(':checked') == true) { $('#eu_kitchen').click(); }
                        if (u_kitchen == 1 && $('#eu_kitchen').is(':checked') == false) { $('#eu_kitchen').click(); }

                        if (u_tv == 1) { $('#eu_tv').attr('checked', true); } else if (u_tv != 1) { $('#eu_tv').removeAttr('chkecked'); }
                        if (u_tv != 1 && $('#eu_tv').is(':checked') == true) { $('#eu_tv').click(); }
                        if (u_tv == 1 && $('#eu_tv').is(':checked') == false) { $('#eu_tv').click(); }

                        if (u_workspace == 1) { $('#eu_workspace').attr('checked', true); } else if (u_workspace != 1) { $('#eu_workspace').removeAttr('chkecked'); }
                        if (u_workspace != 1 && $('#eu_workspace').is(':checked') == true) { $('#eu_workspace').click(); }
                        if (u_workspace == 1 && $('#eu_workspace').is(':checked') == false) { $('#eu_workspace').click(); }

                        if (u_parking == 1) { $('#eu_parking').attr('checked', true); } else if (u_parking != 1) { $('#eu_parking').removeAttr('chkecked'); }
                        if (u_parking != 1 && $('#eu_parking').is(':checked') == true) { $('#eu_parking').click(); }
                        if (u_parking == 1 && $('#eu_parking').is(':checked') == false) { $('#eu_parking').click(); }

                        if (u_pool == 1) { $('#eu_pool').attr('checked', true); } else if (u_pool != 1) { $('#eu_pool').removeAttr('chkecked'); }
                        if (u_pool != 1 && $('#eu_pool').is(':checked') == true) { $('#eu_pool').click(); }
                        if (u_pool == 1 && $('#eu_pool').is(':checked') == false) { $('#eu_pool').click(); }

                        if (u_washer == 1) { $('#eu_washer').attr('checked', true); } else if (u_washer != 1) { $('#eu_washer').removeAttr('chkecked'); }
                        if (u_washer != 1 && $('#eu_washer').is(':checked') == true) { $('#eu_washer').click(); }
                        if (u_washer == 1 && $('#eu_washer').is(':checked') == false) { $('#eu_washer').click(); }

                        if (u_air_conditioning == 1) { $('#eu_air_conditioning').attr('checked', true); } else if (u_air_conditioning != 1) { $('#eu_air_conditioning').removeAttr('chkecked'); }
                        if (u_air_conditioning != 1 && $('#eu_air_conditioning').is(':checked') == true) { $('#eu_air_conditioning').click(); }
                        if (u_air_conditioning == 1 && $('#eu_air_conditioning').is(':checked') == false) { $('#eu_air_conditioning').click(); }

                        if (u_fans == 1) { $('#eu_fans').attr('checked', true); } else if (u_fans != 1) { $('#eu_fans').removeAttr('chkecked'); }
                        if (u_fans != 1 && $('#eu_fans').is(':checked') == true) { $('#eu_fans').click(); }
                        if (u_fans == 1 && $('#eu_fans').is(':checked') == false) { $('#eu_fans').click(); }

                        if (u_refrigerator == 1) { $('#eu_refrigerator').attr('checked', true); } else if (u_refrigerator != 1) { $('#eu_refrigerator').removeAttr('chkecked'); }
                        if (u_refrigerator != 1 && $('#eu_refrigerator').is(':checked') == true) { $('#eu_refrigerator').click(); }
                        if (u_refrigerator == 1 && $('#eu_refrigerator').is(':checked') == false) { $('#eu_refrigerator').click(); }

                        $('#eu_added_cost').val(u_added_cost);
                        $('#eu_one_night_cost').val(u_one_night_cost);
                        $('#eu_description').val(u_description);
                        $('#eu_path_count').val(u_path_count);
                        $('#eu_room_count').val(u_room_count);
                        $('#eu_host_count').val(u_host_count);
                        $('#eu_address').val(u_address);
                        $('#eu_title').val(u_title);
                        $('#eun_city').val(u_city);
                        $('#eun_country').val(u_country).change();
                        $('#eu_cat').val(u_category).change();
                        $('#images_table_content').html(images_table);
                    }
                });
            }
            myModal.toggle();
        });

        $(document).on('click', '.deleteimg', function(e){
            e.preventDefault();
            var image_name = $(this).attr('iname'),
				unit_id = $('#oldid').val(),
                button = $(this);
			if(image_name.trim().length >= 5){
                Swal.fire({
                    title: $('.CONFIRM_DEL_IMG').val(),
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
                        oPayload.image_name = image_name;
                        oPayload.unit_id = unit_id;
                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                        $.ajax({
                            url: 'system/requests/units/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                delete_unit_image: 1,
                                unit_image: RegArrData
                            },
                            success: function (call_res) {    //console.log(call_res);
                                if(call_res == 1){
                                    button.parent('td').parent('tr').remove();
                                }
                            }
                        });
                    }
                });
            }
        });
        
        const form2 = document.getElementById('eunit_form');
        var validator2 = FormValidation.formValidation(
            form2,
            {
                fields: {
                    'eu_title': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            stringLength: {
                                message: $('.REQUIRED_TEXT').val(),
                                min: 4,                        
                            }
                        }
                    },
                    'eun_country': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                        },
                    },
                    'eun_city': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            stringLength: {
                                message: $('.REQUIRED_TEXT').val(),
                                min: 3,                        
                            }
                        },
                    },
                    'eu_address': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            stringLength: {
                                message: $('.REQUIRED_TEXT').val(),
                                min: 3,                        
                            }
                        },
                    },
                    'eu_host_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'eu_room_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'eu_path_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'eu_description': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            stringLength: {
                                message: $('.REQUIRED_TEXT').val(),
                                min: 4,                        
                            }
                        },
                    },
                    'eu_one_night_cost': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );
        const submitButton2 = document.getElementById('update_unit');
        submitButton2.addEventListener('click', function (e) {
            if (validator2) {
                validator2.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton2.setAttribute('data-kt-indicator', 'on');
                        submitButton2.disabled = true;

			            if ($('#eu_wifi').is(':checked') == true) {$('#eu_wifi').val(1);}else {$('#eu_wifi').val(0);}
			            if ($('#eu_kitchen').is(':checked') == true) {$('#eu_kitchen').val(1);}else {$('#eu_kitchen').val(0);}
			            if ($('#eu_garden').is(':checked') == true) {$('#eu_garden').val(1);}else {$('#eu_garden').val(0);}
			            if ($('#eu_workspace').is(':checked') == true) {$('#eu_workspace').val(1);}else {$('#eu_workspace').val(0);}
			            if ($('#eu_tv').is(':checked') == true) {$('#eu_tv').val(1);}else {$('#eu_tv').val(0);}
			            if ($('#eu_parking').is(':checked') == true) {$('#eu_parking').val(1);}else {$('#eu_parking').val(0);}
			            if ($('#eu_pool').is(':checked') == true) {$('#eu_pool').val(1);}else {$('#eu_pool').val(0);}
			            if ($('#eu_fans').is(':checked') == true) {$('#eu_fans').val(1);}else {$('#eu_fans').val(0);}
			            if ($('#eu_washer').is(':checked') == true) {$('#eu_washer').val(1);}else {$('#eu_washer').val(0);}
			            if ($('#eu_refrigerator').is(':checked') == true) {$('#eu_refrigerator').val(1);}else {$('#eu_refrigerator').val(0);}
			            if ($('#eu_air_conditioning').is(':checked') == true) {$('#eu_air_conditioning').val(1);}else {$('#eu_air_conditioning').val(0);}

						var u_id = $('#oldid').val(),
						    u_images = $('#eu_images').val(),
							u_title = $('#eu_title').val(),
							u_country = $('#eun_country').val(),
							u_city = $('#eun_city').val(),
                            u_address = $('#eu_address').val(),
                            u_host_count = $('#eu_host_count').val(),
                            u_room_count = $('#eu_room_count').val(),
                            u_path_count = $('#eu_path_count').val(),
                            u_description = $('#eu_description').val(),
                            u_wifi = $('#eu_wifi').val(),
                            u_kitchen = $('#eu_kitchen').val(),
                            u_garden = $('#eu_garden').val(),
                            u_workspace = $('#eu_workspace').val(),
                            u_tv = $('#eu_tv').val(),
                            u_parking = $('#eu_parking').val(),
                            u_pool = $('#eu_pool').val(),
                            u_fans = $('#eu_fans').val(),
                            u_washer = $('#eu_washer').val(),
                            u_refrigerator = $('#eu_refrigerator').val(),
                            u_air_conditioning = $('#eu_air_conditioning').val(),
                            u_one_night_cost = $('#eu_one_night_cost').val(),
                            u_added_cost = $('#eu_added_cost').val(),
                            u_cat = $('#eu_cat').val();
                            
                        Swal.fire({
                            title: $('.CONFIRM_UPDATE_UNIT').val(),
                            icon: "warning",
                            buttonsStyling: false,
                            showCancelButton: true,
                            confirmButtonText: $('.CONFIRM_TEXT').val(),
                            cancelButtonText: $('.CANCEL_TEXT').val(),
                            reverseButtons: true,
                            customClass: {
                                confirmButton: "btn btn-success",
                                cancelButton: "btn btn-light",
                            }
                        }).then(function (result) {
                            if (result.value) {
                                var oHeader = { alg: 'HS256' };
                                var sHeader = JSON.stringify(oHeader);
                                var oPayload = {};

                                oPayload.u_id = u_id;
                                oPayload.u_images = u_images;
                                oPayload.u_title = u_title;
                                oPayload.u_country = u_country;
                                oPayload.u_city = u_city;
                                oPayload.u_address = u_address;
                                oPayload.u_host_count = u_host_count;
                                oPayload.u_room_count = u_room_count;
                                oPayload.u_path_count = u_path_count;
                                oPayload.u_description = u_description;
                                oPayload.u_wifi = u_wifi;
                                oPayload.u_kitchen = u_kitchen;
                                oPayload.u_garden = u_garden;
                                oPayload.u_workspace = u_workspace;
                                oPayload.u_tv = u_tv;
                                oPayload.u_parking = u_parking;
                                oPayload.u_pool = u_pool;
                                oPayload.u_fans = u_fans;
                                oPayload.u_washer = u_washer;
                                oPayload.u_refrigerator = u_refrigerator;
                                oPayload.u_air_conditioning = u_air_conditioning;
                                oPayload.u_one_night_cost = u_one_night_cost;
                                oPayload.u_added_cost = u_added_cost;
                                oPayload.u_cat = u_cat;

                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

                                $.ajax({
                                    url: 'system/requests/units/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        update_unit: 1,
                                        unit_data: RegArrData
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
                    else {
                        swal.fire({
                            text: $('.DATA_WRONG').val(),
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: $('.TRYAGAIN_TEXT').val(),
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        });
                    }
                });
            }
        });

        $(document).on('click', '.deleteunit', function(e){
            e.preventDefault();
            var u_id = $(this).attr('uid');
            if(u_id >= 1){
                Swal.fire({
                    title: $('.CONFIRM_DEL_UNIT').val(),
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
                                delete_unit: 1,
                                unit_id: RegArrData
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