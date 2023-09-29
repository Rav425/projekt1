$(document).ready(function () {
    'use strict';
    jQuery(function ($) {
        
        const form = document.getElementById('login_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'login_email': {
                        validators: {
                            notEmpty: {
                                message: 'Required!!'
                            },
                            emailAddress: {
                                message: 'Invalid Email!!'
                            }
                        }
                    },
                    'login_password': {
                        validators: {
                            notEmpty: {
                                message: 'Required!!'
                            },
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
        
        const submitButton = document.getElementById('req_login');
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        
                        var login_email = $('#login_email').val(),
                            login_password = $('#login_password').val();
                            
                        var oHeader = { alg: 'HS256' };
                        var sHeader = JSON.stringify(oHeader);
                        var oPayload = {};

                        oPayload.login_email = login_email;
                        oPayload.login_password = md5(login_password).toLowerCase();

                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');

                        $.ajax({
                            url: "../../system/requests/users/op.php",
                            method: "POST",
                            async: false,
                            data: {
                                req_cp_login: 1,
                                login_data: RegArrData
                            },
                            success: function (log_res) {   console.log(log_res);
                                if(log_res == 1){
                                    swal.fire({
                                        text: "Login Success..",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Continue",
                                        customClass: {
                                            confirmButton: "btn btn-success"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        var url = "../";
                                        location.replace(url);
                                    });
                                }
                                else if(log_res == 3){
                                    swal.fire({
                                        text: 'Not Admin!!',
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Reload",
                                        customClass: {
                                            confirmButton: "btn btn-danger"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                                else if(log_res == 4){
                                    swal.fire({
                                        text: 'Incorrect Password!!',
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Reload",
                                        customClass: {
                                            confirmButton: "btn btn-danger"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                                else if(log_res == 2){
                                    swal.fire({
                                        text: 'Not Registered!!',
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Reload",
                                        customClass: {
                                            confirmButton: "btn btn-danger"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
                                        location.reload();
                                    });
                                }
                                else {
                                    swal.fire({
                                        text: log_res,
                                        icon: "warning",
                                        buttonsStyling: false,
                                        confirmButtonText: "Reload",
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