$(document).ready(function () {
    'use strict';
    jQuery(function ($) {
        
        var myDropzone = new Dropzone("#upload_thumb", {
            url: "../system/requests/categories/op.php",
            paramName : "req_upload_thumb",
            maxFiles: 1,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            success	: function(FileResp1, result){      console.log(result);
                $('#c_image').val(result);
            }
        });

        var myDropzone1 = new Dropzone("#upload_ethumb", {
            url: "../system/requests/categories/op.php",
            paramName : "req_upload_thumb",
            maxFiles: 1,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            success	: function(FileResp1, result){      //console.log(result);
                $('#ec_image').val(result);
            }
        });

        var table = $('#cats_table');
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

        $(document).on('click', '#new_category', function(e){
            e.preventDefault();
            var myModal = new bootstrap.Modal($('#add_category'));
            myModal.toggle();
        });

        const form = document.getElementById('categories_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'c_title': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
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
        const submitButton = document.getElementById('save_category');
        submitButton.addEventListener('click', function (e) {
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        if ($('#c_statue').is(':checked') == true) { $('#c_statue').val(1); } else { $('#c_statue').val(0); }
                        var c_image = $('#c_image').val(),
                            c_title = $('#c_title').val(),
                            c_statue = $('#c_statue').val();
                        Swal.fire({
                            title: "Confirm Create New Category?",
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
                                oPayload.c_image = c_image;
                                oPayload.c_title = c_title;
                                oPayload.c_statue = c_statue;
                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/categories/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_newcat: 1,
                                        cat_data: RegArrData
                                    },
                                    success: function (cplog_res) {    //console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "New Category Created Success..",
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
            var cat_id = $(this).attr('cid');
            if(cat_id >= 1){
                Swal.fire({
                    title: "Confirm Delete Categories?",
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
                        oPayload.cat_id = cat_id;
                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                        $.ajax({
                            url: '../system/requests/categories/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                req_delcat: 1,
                                cat_id: RegArrData
                            },
                            success: function (cplog_res) {    //console.log(cplog_res);
                                if(cplog_res == 1){
                                    swal.fire({
                                        text: "Category Deleted Success..",
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
                });
            }
        });

        $(document).on('click', '.editthis', function(e){
            e.preventDefault();
            var cat_id = $(this).attr('cid');
            $('#cat_id').val(cat_id);
            var oHeader = { alg: 'HS256' };
            var sHeader = JSON.stringify(oHeader);
            var oPayload = {};
            oPayload.cat_id = cat_id;
            var sPayload = JSON.stringify(oPayload);
            var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
            $.ajax({
                url: '../system/requests/categories/op.php',
                method: "POST",
                dataType: "text",
                data: {
                    req_oldcat: 1,
                    cat_id: RegArrData
                },
                success: function (cplog_res) {    //console.log(cplog_res);
                    var res = $.parseJSON(cplog_res),
                        c_title = res.c_title,
                        c_image = res.c_image,
                        c_statue = res.c_statue;

                    if (c_statue == 1) {$('#ec_statue').attr('checked', true);}
                    else if (c_statue != 1) {$('#ec_statue').removeAttr('chkecked');}
                    if (c_statue != 1 && $('#ec_statue').is(':checked') == true) {$('#ec_statue').click();}
                    if (c_statue == 1 && $('#ec_statue').is(':checked') == false) {$('#ec_statue').click();}

                    $('#ec_title').val(c_title);
                    $('#cat_thumb_old').attr('src', '../system/requests/categories/thumbs/' + c_image);
                    $('#ec_image').val(c_image);
                    
                    var myModal = new bootstrap.Modal($('#edit_category'));
                    myModal.toggle();
                }
            });
        });

        const form1 = document.getElementById('update_form');
        var validator1 = FormValidation.formValidation(
            form1,
            {
                fields: {
                    'ec_title': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
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
        const submitButton1 = document.getElementById('update_category');
        submitButton1.addEventListener('click', function (e) {
            if (validator1) {
                validator1.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton1.setAttribute('data-kt-indicator', 'on');
                        submitButton1.disabled = true;
                        if ($('#ec_statue').is(':checked') == true) { $('#ec_statue').val(1); } else { $('#ec_statue').val(0); }
                        var cat_id = $('#cat_id').val(),
                            c_image = $('#ec_image').val(),
                            c_title = $('#ec_title').val(),
                            c_statue = $('#ec_statue').val();
                        Swal.fire({
                            title: "Confirm Update Category?",
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
                                oPayload.cat_id = cat_id;
                                oPayload.c_image = c_image;
                                oPayload.c_title = c_title;
                                oPayload.c_statue = c_statue;
                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/categories/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_updatecat: 1,
                                        cat_data: RegArrData
                                    },
                                    success: function (cplog_res) {    //console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "Category Updated Success..",
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