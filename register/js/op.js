$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var getlang = Cookies.get('LANG');
        if(!getlang){
            Cookies.set('LANG', 'EN', { expires: 7, path: '/' });
            location.reload();
        }
        else if(getlang == 'EN') {
            Cookies.set('LANG', 'EN', { expires: 7, path: '/' });
        }
        else if(getlang == 'DE') {
            Cookies.set('LANG', 'DE', { expires: 7, path: '/' });
        }
        else {
            Cookies.set('LANG', 'DE', { expires: 7, path: '/' });
        }
        
        $(document).on('click', '.lang_to_de', function(e){
            e.preventDefault();
            
            Cookies.set('LANG', 'DE', { expires: 7, path: '/' });
            location.reload();
        });
        $(document).on('click', '.lang_to_en', function(e){
            e.preventDefault();
            
            Cookies.set('LANG', 'EN', { expires: 7, path: '/' });~
            location.reload();
        });
        
        const form = document.getElementById('users_form');
        var validator = FormValidation.formValidation(
            form,
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
                                message: $('.PASSWORD_CHKERR').val()
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
        const submitButton = document.getElementById('submit_register');
        submitButton.addEventListener('click', function (e) {
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
						
                        if ($('#c_terms').is(':checked') == true) {
                            $('#c_terms').val(1);
                        }
                        else {
                            $('#c_terms').val(0);
                        }

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
                                    url: '../system/requests/users/op.php',
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
                                                var url = '../login/';
                                                location.replace(url);
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
                            confirmButtonText: "اعادة المحاولة",
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