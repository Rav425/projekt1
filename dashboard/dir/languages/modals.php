<div class="modal fade" tabindex="-1" id="add_word">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Word</h5>
                <div class="btn btn-icon btn-sm btn-active-dark-primary ms-2" id="close_newpatient_modal" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body text-left">
                <form id="new_form" class="form">
                    <div class="card-body p-9">

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word Key</label>
                                <input type="text" id="l_key" name="l_key" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word in English</label>
                                <input type="text" id="en_value" name="en_value" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word in Title</label>
                                <input type="text" id="de_value" name="de_value" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>

                    </div>
                </form>
                <div class="modal-footer">
                    <button id="save_word" type="button" class="btn btn-primary">
                        <span class="indicator-label">
                            Save Data
                        </span>
                        <span class="indicator-progress">
                            Please Wait ..
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="edit_word">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <input type="hidden" id="word_id" value="">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Category Data</h5>
                <div class="btn btn-icon btn-sm btn-active-dark-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body text-left">
                <form id="update_form" class="form">
                    <div class="card-body p-9">

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word Key</label>
                                <input type="text" id="el_key" name="el_key" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word in English</label>
                                <input type="text" id="een_value" name="een_value" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Word in Title</label>
                                <input type="text" id="ede_value" name="ede_value" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>
                        
                    </div>
                </form>
                <div class="modal-footer">
                    <button id="update_word" type="button" class="btn btn-primary">
                        <span class="indicator-label">
                            Save Data
                        </span>
                        <span class="indicator-progress">
                            Please Wait ..
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>