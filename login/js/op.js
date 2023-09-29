
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
        
        const form = document.getElementById('login_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'u_email': {
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
                    'u_password': {
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

						var u_email = $('#u_email').val(),
							u_password = $('#u_password').val();
							
						var oHeader = { alg: 'HS256' };
						var sHeader = JSON.stringify(oHeader);
						var oPayload = {};

						oPayload.u_email = u_email;
						oPayload.u_password = u_password;

						var sPayload = JSON.stringify(oPayload);
						var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

						$.ajax({
							url: '../system/requests/users/op.php',
							method: "POST",
							dataType: "text",
							data: {
								req_login: 1,
								login_data: RegArrData
							},
							success: function (call_res) {    console.log(call_res);
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
										var url = '../';
										location.replace(url);
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
										var url = '../';
										location.replace(url);
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
