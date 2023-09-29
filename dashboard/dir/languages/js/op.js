$(document).ready(function () {
    'use strict';
    jQuery(function ($) {

        var table = $('#words_table');
		table.DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			"ordering": true,
            "order": [[0, 'desc']],
			"deferRender": true,
			paging: true,
            "pageLength": 25,
			ajax: {
				url: '../system/requests/users/languages.php',
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
            ">",
            "initComplete": function(settings, json) {
                $('#words_table').children('thead').children('tr').children('th:nth(0)').css('width', '5%');
                $('#words_table').children('thead').children('tr').children('th:nth(1)').css('width', '20%');
                $('#words_table').children('thead').children('tr').children('th:nth(2)').css('width', '10%');
                $('#words_table').children('thead').children('tr').children('th:nth(3)').css('width', '10%');
            }
		});

        $(document).on('click', '#reload_words', function(e){
            e.preventDefault();
            table.DataTable().clear().destroy();
            table.DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "ordering": true,
                "order": [[0, 'desc']],
                "deferRender": true,
                paging: true,
                "pageLength": 25,
                ajax: {
                    url: '../system/requests/users/languages.php',
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
                ">",
                "initComplete": function(settings, json) {
                    $('#words_table').children('thead').children('tr').children('th:nth(0)').css('width', '5%');
                    $('#words_table').children('thead').children('tr').children('th:nth(1)').css('width', '20%');
                    $('#words_table').children('thead').children('tr').children('th:nth(2)').css('width', '10%');
                    $('#words_table').children('thead').children('tr').children('th:nth(3)').css('width', '10%');
                }
            });
        });

        $(document).on('click', '#new_word', function(e){
            e.preventDefault();
            var myModal = new bootstrap.Modal($('#add_word'));
            myModal.toggle();
        });

        const form = document.getElementById('new_form');
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'l_key': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
                            }
                        }
                    },
                    'en_value': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
                            }
                        }
                    },
                    'de_value': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
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
        const submitButton = document.getElementById('save_word');
        submitButton.addEventListener('click', function (e) {
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;

                        var l_key = $('#l_key').val(),
                            en_value = $('#en_value').val(),
                            de_value = $('#de_value').val();

                        Swal.fire({
                            title: "Confirm Add New Word To Language?",
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
                                oPayload.l_key = l_key;
                                oPayload.en_value = en_value;
                                oPayload.de_value = de_value;
                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/users/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_newlang: 1,
                                        lang_data: RegArrData
                                    },
                                    success: function (cplog_res) {    //console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "New Word Added Success..",
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
                                        else if(cplog_res == 2) {
                                            swal.fire({
                                                text: "Already Exsist!!",
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
            var word_id = $(this).attr('cid');
            if(word_id >= 1){
                Swal.fire({
                    title: "Confirm Delete Word?",
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
                        oPayload.word_id = word_id;
                        var sPayload = JSON.stringify(oPayload);
                        var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                        $.ajax({
                            url: '../system/requests/users/op.php',
                            method: "POST",
                            dataType: "text",
                            data: {
                                req_delword: 1,
                                word_id: RegArrData
                            },
                            success: function (cplog_res) {    //console.log(cplog_res);
                                if(cplog_res == 1){
                                    swal.fire({
                                        text: "Word Deleted Success..",
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

        var edit_word = new bootstrap.Modal($('#edit_word'));
        $(document).on('click', '.editthis', function(e){
            e.preventDefault();
            var word_id = $(this).attr('cid');
            $('#word_id').val(word_id);
            var oHeader = { alg: 'HS256' };
            var sHeader = JSON.stringify(oHeader);
            var oPayload = {};
            oPayload.word_id = word_id;
            var sPayload = JSON.stringify(oPayload);
            var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
            $.ajax({
                url: '../system/requests/users/op.php',
                method: "POST",
                dataType: "text",
                data: {
                    req_oldword: 1,
                    word_id: RegArrData
                },
                success: function (cplog_res) {    //console.log(cplog_res);
                    var res = $.parseJSON(cplog_res),
                        l_key = res.l_key,
                        en_value = res.en_value,
                        de_value = res.de_value;
                    $('#el_key').val(l_key);
                    $('#een_value').val(en_value);
                    $('#ede_value').val(de_value);
                    edit_word.toggle();
                }
            });
        });

        const form1 = document.getElementById('update_form');
        var validator1 = FormValidation.formValidation(
            form1,
            {
                fields: {
                    'el_key': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
                            }
                        }
                    },
                    'een_value': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
                            }
                        }
                    },
                    'ede_value': {
                        validators: {
                            notEmpty: {
                                message: 'Required !!'
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
        const submitButton1 = document.getElementById('update_word');
        submitButton1.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator1) {
                validator1.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton1.setAttribute('data-kt-indicator', 'on');
                        submitButton1.disabled = true;

                        var word_id = $('#word_id').val(),
                            l_key = $('#el_key').val(),
                            en_value = $('#een_value').val(),
                            de_value = $('#ede_value').val();

                        Swal.fire({
                            title: "Confirm Update Word?",
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
                                oPayload.word_id = word_id;
                                oPayload.l_key = l_key;
                                oPayload.en_value = en_value;
                                oPayload.de_value = de_value;
                                var sPayload = JSON.stringify(oPayload);
                                var RegArrData = KJUR.jws.JWS.sign('', sHeader, sPayload, '');
                                $.ajax({
                                    url: '../system/requests/users/op.php',
                                    method: "POST",
                                    dataType: "text",
                                    data: {
                                        req_updatelang: 1,
                                        lang_data: RegArrData
                                    },
                                    success: function (cplog_res) {    console.log(cplog_res);
                                        if(cplog_res == 1){
                                            swal.fire({
                                                text: "Updated Success..",
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
                                        else if(cplog_res == 2) {
                                            swal.fire({
                                                text: "Already Exsist!!",
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