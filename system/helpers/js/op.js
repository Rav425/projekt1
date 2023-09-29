$(document).ready(function () {
    'use strict';
    jQuery(function ($) {
        
        $(document).on('click', '.lang_to_de', function(e){
            e.preventDefault();
            $.ajax({
                url: 'system/requests/users/op.php',
                method: "POST",
                async: false,
                data: {
                    req_langtoDe: 1
                },
                success: function (reg_res) {   console.log(reg_res);
                    Cookies.set('LANG', 'DE', { expires: 7, path: '/' });
                    location.reload();
                }
            });
        });
        
        $(document).on('click', '.lang_to_en', function(e){
            e.preventDefault();
            $.ajax({
                url: 'system/requests/users/op.php',
                method: "POST",
                async: false,
                data: {
                    req_langtoEn: 1
                },
                success: function (reg_res) {   console.log(reg_res);
                    Cookies.set('LANG', 'EN', { expires: 7, path: '/' });
                    location.reload();
                }
            });
        });
        
        $(document).on('click', '.logout', function(e){
            e.preventDefault();
            Swal.fire({
                title: $('.CONFIRM_LOGOUT').val(),
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: $('.LOGOUT_TEXT').val(),
                cancelButtonText: $('.CANCEL_TEXT').val(),
                reverseButtons: true,
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-light",
                }
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: 'system/requests/users/op.php',
                        method: "POST",
                        async: false,
                        data: {
                            req_logout: 1
                        },
                        success: function (reg_res) {   //console.log(reg_res);
                            if(reg_res == 1){
                                swal.fire({
                                    text: $('.SUCCESS_LOGOUT').val(),
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
                        }
                    });
                }
            });
        });
        
        $(document).on('click', '.logout_admin', function(e){
            e.preventDefault();
            Swal.fire({
                title: "Confirm Logout?",
                icon: "warning",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Logout",
                cancelButtonText: "Cancel",
                reverseButtons: true,
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-light",
                }
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: '../system/requests/users/op.php',
                        method: "POST",
                        async: false,
                        data: {
                            req_cp_logout: 1
                        },
                        success: function (reg_res) {   //console.log(reg_res);
                            if(reg_res == 1){
                                swal.fire({
                                    text: "Logged Out Success..",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Continue",
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
                                    text: reg_res,
                                    icon: "warning",
                                    buttonsStyling: false,
                                    confirmButtonText: "Continue",
                                    customClass: {
                                        confirmButton: "btn btn-success"
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
        });
        
    });
});
