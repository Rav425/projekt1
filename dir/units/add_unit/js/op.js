$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

		var update = '';
		var myDropzone = new Dropzone("#upload_images", {
            url: "system/requests/units/op.php",
			paramName : "req_upload_unit",
			maxFiles: 10,
			maxFilesize: 10, // MB
			addRemoveLinks: false,
			acceptedFiles: "image/*",
			addedfiles: function (e) {
				$('.custom_Loader').fadeIn(300);
			},
			success	: function(FileResp1, result){      //console.log(result);
				$('.custom_Loader').fadeIn(300);
				update += result + ',';
				$('#u_images').val(update);
				setTimeout(function () {
					$('.custom_Loader').fadeOut(300);
					toastr.success($('.UPLOAD_SUCCESS_TEXT').val());
				}, 500);
			}
		});
        
        const form1 = document.getElementById('unit_form');
        var validator1 = FormValidation.formValidation(
            form1,
            {
                fields: {
                    'u_title': {
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
                    'un_country': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                        },
                    },
                    'un_city': {
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
                    'u_address': {
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
                    'u_host_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'u_room_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'u_path_count': {
                        validators: {
                            notEmpty: {
                                message: $('.REQUIRED_TEXT').val()
                            },
                            digits: {
                                message: $('.REQUIRED_TEXT').val()
                            }
                        }
                    },
                    'u_description': {
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
                    'u_one_night_cost': {
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
        const submitButton1 = document.getElementById('submit_unit');
        submitButton1.addEventListener('click', function (e) {
            if (validator1) {
                validator1.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton1.setAttribute('data-kt-indicator', 'on');
                        submitButton1.disabled = true;

			            if ($('#u_wifi').is(':checked') == true) {$('#u_wifi').val(1);}else {$('#u_wifi').val(0);}
			            if ($('#u_kitchen').is(':checked') == true) {$('#u_kitchen').val(1);}else {$('#u_kitchen').val(0);}
			            if ($('#u_garden').is(':checked') == true) {$('#u_garden').val(1);}else {$('#u_garden').val(0);}
			            if ($('#u_workspace').is(':checked') == true) {$('#u_workspace').val(1);}else {$('#u_workspace').val(0);}
			            if ($('#u_tv').is(':checked') == true) {$('#u_tv').val(1);}else {$('#u_tv').val(0);}
			            if ($('#u_parking').is(':checked') == true) {$('#u_parking').val(1);}else {$('#u_parking').val(0);}
			            if ($('#u_pool').is(':checked') == true) {$('#u_pool').val(1);}else {$('#u_pool').val(0);}
			            if ($('#u_fans').is(':checked') == true) {$('#u_fans').val(1);}else {$('#u_fans').val(0);}
			            if ($('#u_washer').is(':checked') == true) {$('#u_washer').val(1);}else {$('#u_washer').val(0);}
			            if ($('#u_refrigerator').is(':checked') == true) {$('#u_refrigerator').val(1);}else {$('#u_refrigerator').val(0);}
			            if ($('#u_air_conditioning').is(':checked') == true) {$('#u_air_conditioning').val(1);}else {$('#u_air_conditioning').val(0);}

						var u_images = $('#u_images').val(),
							u_title = $('#u_title').val(),
							u_country = $('#un_country').val(),
							u_city = $('#un_city').val(),
                            u_address = $('#u_address').val(),
                            u_host_count = $('#u_host_count').val(),
                            u_room_count = $('#u_room_count').val(),
                            u_path_count = $('#u_path_count').val(),
                            u_description = $('#u_description').val(),
                            u_wifi = $('#u_wifi').val(),
                            u_kitchen = $('#u_kitchen').val(),
                            u_garden = $('#u_garden').val(),
                            u_workspace = $('#u_workspace').val(),
                            u_tv = $('#u_tv').val(),
                            u_parking = $('#u_parking').val(),
                            u_pool = $('#u_pool').val(),
                            u_fans = $('#u_fans').val(),
                            u_washer = $('#u_washer').val(),
                            u_refrigerator = $('#u_refrigerator').val(),
                            u_air_conditioning = $('#u_air_conditioning').val(),
                            u_one_night_cost = $('#u_one_night_cost').val(),
                            u_added_cost = $('#u_added_cost').val(),
                            u_cat = $('#u_cat').val();
                        
                        if(u_images.trim().length < 1){
                            $('#u_images_Err').fadeIn(300);
                            $('#chk_u_images').val(1);
                        }
                        else if(u_images.trim().length >= 1){
                            $('#u_images_Err').hide();
                            $('#chk_u_images').val(0);
                        }
                        var chk_u_images = $('#chk_u_images').val();
                        if(chk_u_images == 1){
                            swal.fire({
                                text: $('.DATA_WRONG').val(),
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: $('.TRYAGAIN_TEXT').val(),
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                },
                                allowOutsideClick: false
                            }).then(function () {
                                submitButton1.setAttribute('data-kt-indicator', 'off');
                                submitButton1.disabled = false;
                            });
                        }
                        else {
                            Swal.fire({
                                title: $('.CONFIRM_ADD_UNIT').val(),
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
                                            add_unit: 1,
                                            unit_data: RegArrData
                                        },
                                        success: function (call_res) {    console.log(call_res);
                                            if(call_res == 1){
                                                swal.fire({
                                                    text: $('.SUCCESS_ADD_TEXT').val(),
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

    });
});