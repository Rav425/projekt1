

<div class="tab-pane fade show active mb-20 pb-20" id="tab_1">

    <div class="card mb-20 mb-xl-10">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
            <button onclick="document.getElementById('edit_profile').click()" class="btn btn-primary align-self-center">
                <?php $init_lang->pick_lang('EDIT_PROFILE'); ?>
            </button>
        </div>
        <div class="card-body p-9 row table-responsive">
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('INPUT_FULL_NAME')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary text-uppercase"><?=$init_users->u_name?></span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('INPUT_EMAIL')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary"><?=$init_users->u_email?></span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('MOBILE_TEXT')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary"><?=$init_users->u_mobile?></span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('INPUT_COUNTRY')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary"><?=$init_users->u_country?></span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('INPUT_CITY')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary text-uppercase"><?=$init_users->u_city?></span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('PREF_LANG')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary"><?=$init_users->u_lang?></span>
                </div>
            </div>
            
            <div class="row mb-7">
                <label class="col-lg-4 fs-4 fw-bolder text-dark"><?=$init_lang->pick_lang('ACC_TYPE')?></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-4 text-primary">
                        <?=$init_users->u_type == 1 ? $init_lang->pick_lang('CUSTOMER_TEXT') : $init_lang->pick_lang('SELLER_TEXT')?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>