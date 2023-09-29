<div class="modal fade" tabindex="-1" id="add_category">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Category</h5>
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
                <form id="categories_form" class="form">
                    <div class="card-body p-9">
                    
                        <div class="row mb-10 fv-row">
                            <label class="col-lg-4 col-form-label fw-bolder fs-5">Category Thumbnail</label>

                            <div class="dropzone col-lg-8 fv-row" id="upload_thumb">
                                <div class="dz-message needsclick">
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Add New Thumbnail</h3>
                                        <span class="fs-7 fw-bold text-gray-400">Allowed Ext. (jpg, jpeg)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="c_image" value="">

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Category Title</label>
                                <input type="text" id="c_title" name="c_title" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>
                        
                        <div class="row g-9 mb-10">
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">Category Statue</label>
                                <div class="col-md-12">
                                    <div class="form-check form-check-solid form-switch fv-row">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="c_statue" name="c_statue" checked>
                                        <label class="form-check-label" for="c_statue"></label>
                                        <span class="pt-1" style="display: inline-block;">Enable </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="modal-footer">
                    <button id="save_category" type="button" class="btn btn-primary">
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
<div class="modal fade" tabindex="-1" id="edit_category">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <input type="hidden" id="cat_id" value="">
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
                    
                        <div class="row mb-10 fv-row">
                            <label class="col-lg-4 col-form-label fw-bolder fs-5">Category Thumbnail</label>
                            <div class="col-lg-3 col-form-label fw-bold fs-6" style="padding: 0 10px 0 22px;">
                                <div class="old_imgstyle">
                                    <img src="" id="cat_thumb_old" style="max-height: 100px;">
                                </div>
                            </div>
                            <div class="dropzone col-lg-5 fv-row" id="upload_ethumb">
                                <div class="dz-message needsclick">
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Update Thumbnail</h3>
                                        <span class="fs-7 fw-bold text-gray-400">Allowed Ext. (jpg, jpeg)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="ec_image" value="">

                        <div class="row g-9 mb-10">
                            <div class="fv-row">
                                <label class="required fs-6 fw-bold mb-2">Category Title</label>
                                <input type="text" id="ec_title" name="ec_title" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>
                        
                        <div class="row g-9 mb-10">
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-bold mb-2">Category Statue</label>
                                <div class="col-md-12">
                                    <div class="form-check form-check-solid form-switch fv-row">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="ec_statue" name="ec_statue" checked>
                                        <label class="form-check-label" for="ec_statue"></label>
                                        <span class="pt-1" style="display: inline-block;">Enable </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
                <div class="modal-footer">
                    <button id="update_category" type="button" class="btn btn-primary">
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