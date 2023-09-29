$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        $("#p_from, #p_to").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 2023,
            locale: {
                format: 'Y-MM-DD'
            },
            autoApply: true
        });

        Inputmask({
            "mask" : "99/99"
        }).mask("#p_expdate");

        Inputmask({
            "mask" : "999"
        }).mask("#p_ccvno");

        var unit_id = $('#get_unit').val();
        if(unit_id >= 1){
            $.ajax({
                url: 'system/requests/units/op.php',
                method: "POST",
                dataType: "text",
                data: {
                    req_oldunit: 1,
                    unit_id: unit_id,
                    u_admin: 0
                },
                success: function (cplog_res) {    //console.log(cplog_res);
                    var res = $.parseJSON(cplog_res),
                        u_title = res.u_title,
                        u_catname = res.u_catname != null ? res.u_catname : 'New',
                        u_address = res.u_address,
                        u_country = res.u_country,
                        u_images_row = res.u_images_row,
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
                        u_first_image = res.u_first_image;

                    $('#confirming_image').attr('style', "background-image: url('system/requests/units/thumbs/" + u_first_image + "')");

                    $('.unit_title').html(u_title.charAt(0).toUpperCase() + u_title.slice(1));
                    $('.cat_name').html(u_catname);
                    $('.u_address').html(u_address + ' , ' + u_country);
                    $('.u_images').html(u_images_row);
                    $('.u_counters').html(u_host_count + ' ' + $('.GUSTS_TEXT').val() + ', ' + u_room_count + ' ' + $('.BEDROOM_TEXT').val() + ', ' + u_path_count + ' ' + $('.BATHS_TEXT').val());
                    $('.u_desc').html(u_description);
                    if(u_wifi != 1){$('.u_wifi').hide()} else {$('.u_wifi').show()}
                    if(u_garden != 1){$('.u_garden').hide()} else {$('.u_garden').show()}
                    if(u_kitchen != 1){$('.u_kitchen').hide()} else {$('.u_kitchen').show()}
                    if(u_tv != 1){$('.u_tv').hide()} else {$('.u_tv').show()}
                    if(u_workspace != 1){$('.u_workspace').hide()} else {$('.u_workspace').show()}
                    if(u_parking != 1){$('.u_parking').hide()} else {$('.u_parking').show()}
                    if(u_pool != 1){$('.u_pool').hide()} else {$('.u_pool').show()}
                    if(u_washer != 1){$('.u_washer').hide()} else {$('.u_washer').show()}
                    if(u_air_conditioning != 1){$('.u_air_conditioning').hide()} else {$('.u_air_conditioning').show()}
                    if(u_fans != 1){$('.u_fans').hide()} else {$('.u_fans').show()}
                    if(u_refrigerator != 1){$('.u_refrigerator').hide()} else {$('.u_refrigerator').show()}
                    $('.u_one_night_cost').append(u_one_night_cost);
                    $('.u_added_cost').append(u_added_cost);

                    var sub_cost = Number(u_one_night_cost) * 2;
                    $('.sub_cost').append(sub_cost);
                    $('#sub_cost').val(sub_cost);

                    var final_cost = sub_cost + u_added_cost;
                    $('.final_cost').append(final_cost);
                    $('#final_cost').val(final_cost);

                    var p_from = $('#p_from').val(),
                        p_to = $('#p_to').val();
                    $('.date_from').html(p_from);
                    $('.date_to').html(p_to);

                    $(document).on('change', '#p_from', function(e){
                        var p_from = $('#p_from').val(),
                            p_to = $('#p_to').val();

                        if(p_from.trim().length == 10 && p_to.trim().length == 10){
                            var from = new Date(p_from),
                                to = new Date(p_to);
                            var diff = to.getDate() - from.getDate();
                            if(diff >= 1){
                                var sub_cost = Number(u_one_night_cost) * diff;
                                $('.sub_cost').html('$ ' + sub_cost);
                                $('#sub_cost').val(sub_cost);

                                var final_cost = sub_cost + u_added_cost;
                                $('.final_cost').html('$ ' + final_cost);
                                $('#final_cost').val(final_cost);
                            }
                            $('.date_from').html(p_from);
                            $('.date_to').html(p_to);
                            $('#nights_count').val(diff);
                        }
                    });

                    $(document).on('change', '#p_to', function(e){
                        var p_from = $('#p_from').val(),
                            p_to = $('#p_to').val();

                        if(p_from.trim().length == 10 && p_to.trim().length == 10){
                            var from = new Date(p_from),
                                to = new Date(p_to);
                            var diff = to.getDate() - from.getDate();
                            if(diff >= 1){
                                var sub_cost = Number(u_one_night_cost) * diff;
                                $('.sub_cost').html('$ ' + sub_cost);

                                var final_cost = sub_cost + u_added_cost;
                                $('.final_cost').html('$ ' + final_cost);
                            }
                            $('.date_from').html(p_from);
                            $('.date_to').html(p_to);
                            $('#nights_count').val(diff);
                        }
                    });

                    var is_logged = $('#is_logged').val();
                    if(is_logged == 1){
                        $('#login_logout_div').hide();
                        $('#submit_reserve').removeAttr('disabled');
                    }
                    else {
                        $('#login_logout_div').show();
                        $('#submit_reserve').attr('disabled', 'disabled');
                    }
                }
            });
        }
        else {
            location.replace("?go=home");
        }

        $(document).on('click', '#login_button', function(e){
            e.preventDefault();
            $('#register_div').fadeOut(150);
            $('#login_div').fadeIn(300);
        });

        $(document).on('click', '#register_button', function(e){
            e.preventDefault();
            $('#login_div').fadeOut(150);
            $('#register_div').fadeIn(300);
        });
        
        const form = document.getElementById('login_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'user_email': {
                        validators: {
                            notEmpty: {
                                message: $('.EMAIL_REQUIRE').val()
                            },
                            stringLength: {
                                message: $('.EMAIL_WRONG').val(),
                                min: 3,                        
                            },
                            emailAddress: {
                                message: $('.EMAIL_CHKERR').val()
                            }
                        }
                    },
                    'user_password': {
                        validators: {
                            notEmpty: {
                                message: $('.PASSWORD_REQUIRE').val()
                            },
                            stringLength: {
                                message: $('.PASSWORD_WRONG').val(),
                                min: 6,                        
                            }
                        },
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );
        const submitButton = document.getElementById('submit_login');
        submitButton.addEventListener('click', function (e) {
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;

						var u_email = $('#user_email').val(),
							u_password = $('#user_password').val();
							
						var oHeader = { alg: 'HS256' };
						var sHeader = JSON.stringify(oHeader);
						var oPayload = {};

						oPayload.u_email = u_email;
						oPayload.u_password = u_password;

						var sPayload = JSON.stringify(oPayload);
						var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

						$.ajax({
							url: 'system/requests/users/op.php',
							method: "POST",
							dataType: "text",
							data: {
								req_login: 1,
								login_data: RegArrData
							},
							success: function (call_res) {    //console.log(call_res);
								if(call_res == 1){
									swal.fire({
										text: $('.SUCCESS_LOGIN_TEXT').val(),
										icon: "success",
										buttonsStyling: false,
										confirmButtonText: $('.CONTINUE_BTN').val(),
										customClass: {
											confirmButton: "btn btn-success"
										},
										allowOutsideClick: false
									}).then(function () {
                                        $('#login_logout_div').hide();
                                        $('#login_div').hide();
                                        $('#is_logged').val(1);
                                        $('#submit_reserve').removeAttr('disabled');
										submitButton.setAttribute('data-kt-indicator', 'off');
										submitButton.disabled = false;
									});
								}
								else if(call_res == 2) {
									swal.fire({
										text: $('.NOTEXSIST_ERR_TEXT').val(),
										icon: "error",
										buttonsStyling: false,
										confirmButtonText: $('.TRYAGAIN_TEXT').val(),
										customClass: {
											confirmButton: "btn btn-danger"
										},
										allowOutsideClick: false
									}).then(function () {
										submitButton.setAttribute('data-kt-indicator', 'off');
										submitButton.disabled = false;
									});
								}
								else if(call_res == 4) {
									swal.fire({
										text: $('.PASSWORD_WRONG_TEXT').val(),
										icon: "error",
										buttonsStyling: false,
										confirmButtonText: $('.TRYAGAIN_TEXT').val(),
										customClass: {
											confirmButton: "btn btn-danger"
										},
										allowOutsideClick: false
									}).then(function () {
										submitButton.setAttribute('data-kt-indicator', 'off');
										submitButton.disabled = false;
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
										submitButton.setAttribute('data-kt-indicator', 'off');
										submitButton.disabled = false;
									});
								}
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
        
        const form3 = document.getElementById('register_form');
        var validator3 = FormValidation.formValidation(
            form3,
            {
                fields: {
                    'c_email': {
                        validators: {
                            notEmpty: {
                                message: $('.EMAIL_REQUIRE').val()
                            },
                            stringLength: {
                                message: $('.EMAIL_WRONG').val(),
                                min: 3,                        
                            },
                            emailAddress: {
                                message: $('.EMAIL_CHKERR').val()
                            }
                        }
                    },
                    'c_country': {
                        validators: {
                            notEmpty: {
                                message: $('.COUNTRY_REQUIRE').val()
                            },
                        },
                    },
                    'c_city': {
                        validators: {
                            notEmpty: {
                                message: $('.CITY_REQUIRE').val()
                            },
                        },
                    },
                    'c_password': {
                        validators: {
                            notEmpty: {
                                message: $('.PASSWORD_REQUIRE').val()
                            },
                            stringLength: {
                                message: $('.PASSWORD_LENGTH_CHKERR').val(),
                                min: 6,                        
                            }
                        },
                    },
                    'c_repassword': {
                        validators: {
                            notEmpty: {
                                message: $('.PASSWORD_REQUIRE').val()
                            },
                            identical: {
                                compare: function () {
                                    return $('#c_password').val();
                                },
                                message: $('.REPASSWORD_DIF_CHKERR').val(),
                            },
                        },
                    },
                    'c_utype': {
                        validators: {
                            notEmpty: {
                                message: $('.TYPE_REQUIRE').val()
                            },
                        },
                    },
                    'c_terms': {
                        validators: {
                            notEmpty: {
                                message: $('.TERMS_REQUIRE').val()
                            },
                        },
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );
        const submitButton3 = document.getElementById('submit_register');
        submitButton3.addEventListener('click', function (e) {
            if (validator3) {
                validator3.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton3.setAttribute('data-kt-indicator', 'on');
                        submitButton3.disabled = true;
						
                        if ($('#c_terms').is(':checked') == true) { $('#c_terms').val(1); } else { $('#c_terms').val(0); }

						var c_fullname = $('#c_fullname').val(),
							c_email = $('#c_email').val(),
							c_country = $('#c_country').val(),
							c_city = $('#c_city').val(),
							c_password = $('#c_password').val(),
                            c_mobile = $('#c_mobile').val(),
                            c_utype = $('#c_utype').val();
                            
                        Swal.fire({
                            title: $('.CONFIRMREG_TEXT').val(),
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

                                oPayload.c_fullname = c_fullname;
                                oPayload.c_email = c_email;
                                oPayload.c_country = c_country;
                                oPayload.c_city = c_city;
                                oPayload.c_password = c_password;
                                oPayload.c_mobile = c_mobile;
                                oPayload.c_utype = c_utype;

                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

                                $.ajax({
                                    url: 'system/requests/users/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_register: 1,
                                        register_data: RegArrData
                                    },
                                    success: function (call_res) {    //console.log(call_res);
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
                                                $('#login_logout_div').hide();
                                                $('#login_div').hide();
                                                $('#register_div').hide();
                                                $('#is_logged').val(1);
                                                $('#submit_reserve').removeAttr('disabled');
                                                submitButton.setAttribute('data-kt-indicator', 'off');
                                                submitButton.disabled = false;
                                            });
                                        }
                                        else if(call_res == 2) {
                                            swal.fire({
                                                text: $('.EXSIST_ERR_TEXT').val(),
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: $('.TRYAGAIN_TEXT').val(),
                                                customClass: {
                                                    confirmButton: "btn btn-danger"
                                                },
                                                allowOutsideClick: false
                                            }).then(function () {
                                                submitButton3.setAttribute('data-kt-indicator', 'off');
                                                submitButton3.disabled = false;
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
                                                submitButton3.setAttribute('data-kt-indicator', 'off');
                                                submitButton3.disabled = false;
                                            });
                                        }
                                    }
                                });
                            }
                        });
                    }
                });
            }
        });

        var myModal = new bootstrap.Modal($('#res_modal'));
        $(document).on('click', '#complete_reserve', function(e){
            e.preventDefault();
            myModal.toggle();
        
            const form1 = document.getElementById('purchase_form');
            var validator1 = FormValidation.formValidation(
                form1,
                {
                    fields: {
                        'p_cardno': {
                            validators: {
                                notEmpty: {
                                    message: $('.REQUIRED_TEXT').val()
                                },
                                stringLength: {
                                    message: $('.REQUIRED_TEXT').val(),
                                    min: 10,                        
                                }
                            }
                        },
                        'p_expdate': {
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
                        'p_ccvno': {
                            validators: {
                                notEmpty: {
                                    message: $('.REQUIRED_TEXT').val()
                                },
                                stringLength: {
                                    message: $('.REQUIRED_TEXT').val(),
                                    min: 3,
                                }
                            }
                        },
                        'p_address': {
                            validators: {
                                notEmpty: {
                                    message: $('.REQUIRED_TEXT').val()
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row'
                        })
                    }
                }
            );
            const submitButton1 = document.getElementById('submit_reserve');
            submitButton1.addEventListener('click', function (e) {
                if (validator1) {
                    validator1.validate().then(function (status) {
                        if (status == 'Valid') {

                            submitButton1.setAttribute('data-kt-indicator', 'on');
                            submitButton1.disabled = true;

                            var unit_id = $('#get_unit').val(),
                                p_cardno = $('#p_cardno').val(),
                                p_expdate = $('#p_expdate').val(),
                                p_ccvno = $('#p_ccvno').val(),
                                p_address = $('#p_address').val(),
                                p_from = $('#p_from').val(),
                                p_to = $('#p_to').val(),
                                p_guests = $('#p_guests').val(),
                                sub_cost = $('#sub_cost').val(),
                                final_cost = $('#final_cost').val(),
                                nights_count = $('#nights_count').val();
                                
                            var oHeader = { alg: 'HS256' };
                            var sHeader = JSON.stringify(oHeader);
                            var oPayload = {};

                            oPayload.unit_id = unit_id;
                            oPayload.p_cardno = p_cardno;
                            oPayload.p_expdate = p_expdate;
                            oPayload.p_ccvno = p_ccvno;
                            oPayload.p_address = p_address;
                            oPayload.p_from = p_from;
                            oPayload.p_to = p_to;
                            oPayload.p_guests = p_guests;
                            oPayload.sub_cost = sub_cost;
                            oPayload.final_cost = final_cost;
                            oPayload.nights_count = nights_count;

                            var sPayload = JSON.stringify(oPayload);
                            var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

                            $.ajax({
                                url: 'system/requests/units/op.php',
                                method: "POST",
                                dataType: "text",
                                data: {
                                    reserve_unit: 1,
                                    reserve_data: RegArrData
                                },
                                success: function (call_res) {    console.log(call_res);
                                    if(call_res == 1){
                                        swal.fire({
                                            text: $('.RESERVE_ADDED').val(),
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: $('.CONTINUE_BTN').val(),
                                            customClass: {
                                                confirmButton: "btn btn-success"
                                            },
                                            allowOutsideClick: false
                                        }).then(function () {
                                            var url = '?go=home';
                                            location.replace(url);
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
        
        $(document).on('click', '#like_this', function(e){
            e.preventDefault();
            var unit_id = $('#get_unit').val();
            if(unit_id >= 1){
                var oHeader = { alg: 'HS256' };
                var sHeader = JSON.stringify(oHeader);
                var oPayload = {};
                oPayload.unit_id = unit_id;
                var sPayload = JSON.stringify(oPayload);
                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                $.ajax({
                    url: 'system/requests/units/op.php',
                    method: "POST",
                    dataType: "text",
                    data: {
                        like_unit: 1,
                        unit_data: RegArrData
                    },
                    success: function (call_res) {    console.log(call_res);
                        if(call_res == 1){
                            var likes_count = $('#likes_count').html();
                            $('#likes_count').html(Number(likes_count) + 1);
                            $('#like_this').addClass('btn-color-danger').removeClass('btn-color-muted btn-active-light-danger');
                        }
                        else if(call_res == 2){
                            var likes_count = $('#likes_count').html();
                            $('#likes_count').html(Number(likes_count) - 1);
                            $('#like_this').addClass('btn-color-muted btn-active-light-danger').removeClass('btn-color-danger');
                        }
                    }
                });
            }
        });


    });
});