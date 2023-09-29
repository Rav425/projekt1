$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var table = $('#users_table');
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
				url: '../system/requests/users/reg_users.php',
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

        $(document).on('click', '#reload_users', function(e){
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
                    url: '../system/requests/users/reg_users.php',
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

        $(document).on('click', '#new_user', function(e){
            e.preventDefault();
            var myModal = new bootstrap.Modal($('#add_user'));
            myModal.toggle();
        });

        const form = document.getElementById('add_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'u_name': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_email': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                            stringLength: {
                                message: "Required!!",
                                min: 3,                        
                            },
                            emailAddress: {
                                message: "Required!!"
                            }
                        }
                    },
                    'u_country': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_city': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_type': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
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
        const submitButton = document.getElementById('save_data');
        submitButton.addEventListener('click', function (e) {
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        if ($('#u_admin').is(':checked') == true) { $('#u_admin').val(1); } else { $('#u_admin').val(0); }

                        var u_name = $('#u_name').val(),
                            u_email = $('#u_email').val(),
                            u_mobile = $('#u_mobile').val(),
                            u_country = $('#u_country').val(),
                            u_city = $('#u_city').val(),
                            u_type = $('#u_type').val(),
                            u_admin = $('#u_admin').val();

                        Swal.fire({
                            title: "Confirm Add New User?",
                            icon: "warning",
                            buttonsStyling: false,
                            showCancelButton: true,
                            confirmButtonText: "Confirm",
                            cancelButtonText: "Cancel",
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

                                oPayload.u_name = u_name;
                                oPayload.u_email = u_email;
                                oPayload.u_mobile = u_mobile;
                                oPayload.u_country = u_country;
                                oPayload.u_city = u_city;
                                oPayload.u_type = u_type;
                                oPayload.u_admin = u_admin;

                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/users/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_newuser: 1,
                                        user_data: RegArrData
                                    },
                                    success: function (cplog_res) {    //console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "New User Created Success..",
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
                                                text: cplog_res,
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
                            else {
                                submitButton.setAttribute('data-kt-indicator', 'off');
                                submitButton.disabled = false;
                            }
                        });
                                
                    }
                });
            }
        });

        $(document).on('click', '.deletethis', function(e){
            e.preventDefault();
            var u_id = $(this).attr('cid');
            if(u_id >= 1){
                Swal.fire({
                    title: "Confirm Delete User?",
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "Confirm",
                    cancelButtonText: "Cancel",
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
                            url: '../system/requests/users/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                req_deluser: 1,
                                user_id: RegArrData
                            },
                            success: function (cplog_res) {    //console.log(cplog_res);
                                if(cplog_res == 1){
                                    swal.fire({
                                        text: "User Deleted Success..",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Continue",
                                        customClass: {
                                            confirmButton: "btn btn-success"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
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
                                                url: '../system/requests/users/reg_users.php',
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
                                }
                                else {
                                    swal.fire({
                                        text: cplog_res,
                                        icon: "warning",
                                        buttonsStyling: false,
                                        confirmButtonText: "Reload",
                                        customClass: {
                                            confirmButton: "btn btn-warning"
                                        },
                                        allowOutsideClick: false
                                    }).then(function () {
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
                                                url: '../system/requests/users/reg_users.php',
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
                                }
                            }
                        });
                    }
                });
            }
        });

        var myModal1 = new bootstrap.Modal($('#edit_user'));
        $(document).on('click', '.editthis', function(e){
            e.preventDefault();
            var user_id = $(this).attr('cid');
            $('#user_id').val(user_id);
            var oHeader = { alg: 'HS256' };
            var sHeader = JSON.stringify(oHeader);
            var oPayload = {};
            oPayload.user_id = user_id;
            var sPayload = JSON.stringify(oPayload);
            var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
            $.ajax({
                url: '../system/requests/users/op.php',
                method: "POST",
                dataType: "text",
                data: {
                    req_olduser: 1,
                    user_id: RegArrData
                },
                success: function (cplog_res) {    //console.log(cplog_res);
                    var res = $.parseJSON(cplog_res),
                        u_name = res.u_name,
                        u_email = res.u_email,
                        u_mobile = res.u_mobile,
                        u_country = res.u_country,
                        u_city = res.u_city,
                        u_type = res.u_type,
                        u_admin = res.u_admin,
                        u_statue = res.u_statue;

                    if (u_statue == 1) {$('#u_statue').attr('checked', true);}
                    else if (u_statue != 1) {$('#u_statue').removeAttr('chkecked');}
                    if (u_statue != 1 && $('#u_statue').is(':checked') == true) {$('#u_statue').click();}
                    if (u_statue == 1 && $('#u_statue').is(':checked') == false) {$('#u_statue').click();}

                    if (u_admin == 1) {$('#eu_admin').attr('checked', true);}
                    else if (u_admin != 1) {$('#eu_admin').removeAttr('chkecked');}
                    if (u_admin != 1 && $('#eu_admin').is(':checked') == true) {$('#eu_admin').click();}
                    if (u_admin == 1 && $('#eu_admin').is(':checked') == false) {$('#eu_admin').click();}

                    $('#eu_name').val(u_name);
                    $('#eu_email').val(u_email);
                    $('#eu_mobile').val(u_mobile);
                    $('#eu_country').val(u_country).change();
                    $('#eu_city').val(u_city);
                    $('#eu_type').val(u_type).change();
                    
                    myModal1.toggle();
                }
            });
        });

        const form1 = document.getElementById('update_form');
        var validator1 = FormValidation.formValidation(
            form1,
            {
                fields: {
                    'u_name': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_email': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                            stringLength: {
                                message: "Required!!",
                                min: 3,                        
                            },
                            emailAddress: {
                                message: "Required!!"
                            }
                        }
                    },
                    'u_country': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_city': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
                    },
                    'u_type': {
                        validators: {
                            notEmpty: {
                                message: "Required!!"
                            },
                        },
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
        const submitButton1 = document.getElementById('update_user');
        submitButton1.addEventListener('click', function (e) {
            if (validator1) {
                validator1.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton1.setAttribute('data-kt-indicator', 'on');
                        submitButton1.disabled = true;

                        if ($('#eu_admin').is(':checked') == true) { $('#eu_admin').val(1); } else { $('#eu_admin').val(0); }
                        if ($('#u_statue').is(':checked') == true) { $('#u_statue').val(1); } else { $('#u_statue').val(0); }

                        var user_id = $('#user_id').val(),
                            u_name = $('#eu_name').val(),
                            u_email = $('#eu_email').val(),
                            u_mobile = $('#eu_mobile').val(),
                            u_country = $('#eu_country').val(),
                            u_city = $('#eu_city').val(),
                            u_type = $('#eu_type').val(),
                            u_admin = $('#eu_admin').val(),
                            u_statue = $('#u_statue').val();
                        Swal.fire({
                            title: "Confirm Update User?",
                            icon: "warning",
                            buttonsStyling: false,
                            showCancelButton: true,
                            confirmButtonText: "Confirm",
                            cancelButtonText: "Cancel",
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

                                oPayload.user_id = user_id;
                                oPayload.u_name = u_name;
                                oPayload.u_email = u_email;
                                oPayload.u_mobile = u_mobile;
                                oPayload.u_country = u_country;
                                oPayload.u_city = u_city;
                                oPayload.u_type = u_type;
                                oPayload.u_admin = u_admin;
                                oPayload.u_statue = u_statue;

                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/users/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_updateuser: 1,
                                        user_data: RegArrData
                                    },
                                    success: function (cplog_res) {    //console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "User Updated Success..",
                                                icon: "success",
                                                buttonsStyling: false,
                                                confirmButtonText: "Continue",
                                                customClass: {
                                                    confirmButton: "btn btn-success"
                                                },
                                                allowOutsideClick: false
                                            }).then(function () {
                                                submitButton1.setAttribute('data-kt-indicator', 'off');
                                                submitButton1.disabled = false;
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
                                                        url: '../system/requests/users/reg_users.php',
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
                                                myModal1.toggle();
                                            });
                                        }
                                        else if(cplog_res == 2){
                                            swal.fire({
                                                text: "Email or Mobile Already in use!!",
                                                icon: "warning",
                                                buttonsStyling: false,
                                                confirmButtonText: "Continue",
                                                customClass: {
                                                    confirmButton: "btn btn-warning"
                                                },
                                                allowOutsideClick: false
                                            }).then(function () {
                                                submitButton1.setAttribute('data-kt-indicator', 'off');
                                                submitButton1.disabled = false;
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
                                                        url: '../system/requests/users/reg_users.php',
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
                                                myModal1.toggle();
                                            });
                                        }
                                        else {
                                            swal.fire({
                                                text: cplog_res,
                                                icon: "warning",
                                                buttonsStyling: false,
                                                confirmButtonText: "Reload",
                                                customClass: {
                                                    confirmButton: "btn btn-warning"
                                                },
                                                allowOutsideClick: false
                                            }).then(function () {
                                                submitButton1.setAttribute('data-kt-indicator', 'off');
                                                submitButton1.disabled = false;
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
                                                        url: '../system/requests/users/reg_users.php',
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
                                                myModal1.toggle();
                                            });
                                        }
                                    }
                                });
                            }
                            else {
                                submitButton1.setAttribute('data-kt-indicator', 'off');
                                submitButton1.disabled = false;
                            }
                        });
                                
                    }
                });
            }
        });


    });
});