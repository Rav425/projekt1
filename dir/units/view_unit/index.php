
<div class="mb-20 position-relative z-index-2">
    <div class="container">
        <div class="card">
            <div class="card-body pb-5">
                <div class="d-flex flex-stack mb-6">
                    <div class="flex-shrink-0 me-5">
                        <span class="text-gray-800 fs-1 fw-bolder unit_title"></span>
                        <span class="text-gray-400 fs-7 fw-bolder me-2 d-block lh-1 py-2 u_address"></span>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <?php
                        if($login == 1){
                            if($init_units->check_like($_GET['id']) == 0){
                                $like_class = 'btn-color-muted btn-active-light-danger';
                            }
                            else {
                                $like_class = 'btn-color-danger';
                            }
                        }
                        else {
                            $like_class = 'btn-color-danger';
                        }
                        ?>
                        <button type="button" id="<?=$login==1 ? 'like_this' : ''?>" class="btn btn-sm btn-light <?=$like_class?> px-4 py-2">
                            <span class="svg-icon svg-icon-danger svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <span id="likes_count"><?=$login == 1 ? $init_units->get_likes($_GET['id']) : ''?></span>
                        </button>
                    </div>
                </div>
                <div class="row g-10 u_images"></div>
                <div class="row g-10">
                    <div class="col-sm-7">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-7">
                                <div class="d-flex flex-stack mb-2">
                                    <div class="flex-shrink-0 me-2">
                                        <span class="text-gray-400 fs-7 fw-bolder me-2 d-block lh-1 pb-1 cat_name"></span>
                                        <span class="text-gray-800 fs-1 fw-bolder unit_title"></span>
                                    </div>
                                </div>
                                <div class="row row-cols-1 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll">
                                    <span class="w-100 text-muted u_counters"></span>
                                </div>
                            </div>
                            <div class="mb-6">
                                <span class="fw-bold text-gray-600 fs-6 mb-8 d-block u_desc"></span>
                                <div class="separator"></div>
                                <p class="text-gray-800 fs-3 mt-5 fw-bolder"><?=$init_lang->pick_lang('WHAT_PLACE_OFFER')?></p>
                                <div class="d-flex">
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_wifi">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M10.6 10.7C13.3 8 16.9 6.3 20.9 6C21.5 6 21.9 5.5 21.9 4.9V3C21.9 2.4 21.4 2 20.9 2C15.8 2.3 11.2 4.4 7.79999 7.8C4.39999 11.2 2.2 15.8 2 20.9C2 21.5 2.4 21.9 3 21.9H4.89999C5.49999 21.9 6 21.5 6 20.9C6.2 17 7.90001 13.4 10.6 10.7Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M14.8 14.9C16.4 13.3 18.5 12.2 20.9 12C21.5 11.9 21.9 11.5 21.9 10.9V9C21.9 8.4 21.4 8 20.8 8C17.4 8.3 14.3 9.8 12 12.1C9.7 14.4 8.19999 17.5 7.89999 20.9C7.89999 21.5 8.29999 22 8.89999 22H10.8C11.4 22 11.8 21.6 11.9 21C12.2 18.6 13.2 16.5 14.8 14.9ZM16.2 16.3C17.4 15.1 19 14.3 20.7 14C21.3 13.9 21.8 14.4 21.8 15V17C21.8 17.5 21.4 18 20.9 18.1C20.1 18.3 19.5 18.6 19 19.2C18.5 19.8 18.1 20.4 17.9 21.1C17.8 21.6 17.4 22 16.8 22H14.8C14.2 22 13.7 21.5 13.8 20.9C14.2 19.1 15 17.5 16.2 16.3Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder">WIFI</span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_garden">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12.3028 2C2.20276 8.5 0.302758 19.4 12.3028 22C24.3028 19.4 22.4028 8.5 12.3028 2Z" fill="currentColor"/>
                                                    <path d="M12.3028 22L20.6028 13.7C20.7028 17.5 18.2028 20.7 12.3028 22ZM19.6028 9.7C19.1028 8.7 18.5028 7.7 17.6028 6.7L12.3028 12V17L19.6028 9.7ZM9.40277 4.10001C8.50277 4.90001 7.60277 5.80001 6.90277 6.60001L12.2028 11.9V6.89999L9.40277 4.10001ZM12.3028 2V7L15.2028 4.10001C14.3028 3.40001 13.3028 2.7 12.3028 2ZM4.00278 13.7L12.3028 22V17L5.00278 9.7C4.40278 11.1 4.00278 12.4 4.00278 13.7Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('GARDEN_TEXT')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_kitchen">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('KITCHEN_TEXT')?></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_tv">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M15 17H9V20H15V17Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('TV_TEXT')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_workspace">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('WORKSPACE_TEXT')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_parking">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M16 21H8C7.4 21 7 20.6 7 20V4C7 3.4 7.4 3 8 3H16C16.6 3 17 3.4 17 4V20C17 20.6 16.6 21 16 21Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M2 3H4C4.6 3 5 3.4 5 4V20C5 20.6 4.6 21 4 21H2V3ZM20 21H22V3H20C19.4 3 19 3.4 19 4V20C19 20.6 19.4 21 20 21Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('PARKING_TEXT')?></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_pool">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M18 6V12C18 15.3 15.3 18 12 18C8.7 18 6 15.3 6 12V6H18ZM21 2H3C2.4 2 2 2.4 2 3V12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12V3C22 2.4 21.6 2 21 2Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('POOL_TEXT')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_washer">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11 15.9C9.5 13 6.5 11 3 11C3 15.6 6.5 19.4 11 19.9V15.9Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M21 11C17.5 11 14.5 13 13 15.9V11C13 10.4 12.6 10 12 10C11.4 10 11 10.4 11 11V21C11 21.6 11.4 22 12 22C12.6 22 13 21.6 13 21V19.9C17.5 19.4 21 15.6 21 11Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M12 9C13.933 9 15.5 7.433 15.5 5.5C15.5 3.567 13.933 2 12 2C10.067 2 8.5 3.567 8.5 5.5C8.5 7.433 10.067 9 12 9Z" fill="currentColor"/>
                                                    <path d="M14 11L12 12L10 11V8.40002H14V11Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('WASHER_TEXT')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_air_conditioning">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('AIR_COND_TEXT')?></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_fans">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('FANS_TETX')?></span>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 u_refrigerator">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z" fill="currentColor"/>
                                                    <path d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        <span class="fs-6 text-gray-700 fw-bolder"><?=$init_lang->pick_lang('REFREGATOR_TEXT')?></span>
                                    </div>
                                </div>
                                <div class="py-10">
                                    <h2 class="fw-bolder text-dark mb-8"><?=$init_lang->pick_lang('THINGS_TO_KNOW')?>:</h2>
                                    <ul class="fs-4 fw-bold mb-6">
                                        <li>
                                            <span class="text-gray-700"><?=$init_lang->pick_lang('HOUSE_RULES')?>:</span>
                                        </li>
                                        <li class="my-2">
                                            <span class="text-gray-700"><?=$init_lang->pick_lang('SAFTY_PROPERTY')?>:</span>
                                        </li>
                                        <li>
                                            <span class="text-gray-700"><?=$init_lang->pick_lang('CANCELATION_POLICY')?>:</span>
                                        </li>
                                    </ul>
                                    <div class="fs-4 fw-bold text-gray-700 mb-5">
                                        <?=$init_lang->pick_lang('CHECK_IN_AFTER')?>
                                        <br><?=$init_lang->pick_lang('CHECKOUT_BEFORE')?>
                                        <br><?=$init_lang->pick_lang('GUSTS_MAX')?>
                                    </div>
                                    <h2 class="fw-bolder text-dark mb-5"><?=$init_lang->pick_lang('SAFTY_PROPERTY')?>:</h2>
                                    <ul>
                                        <li>
                                            <span class="fs-4 fw-bold text-gray-700">
                                                <?=$init_lang->pick_lang('CARBON_REPORT')?>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fs-4 fw-bold text-gray-700">
                                                <?=$init_lang->pick_lang('SMOKE_REPORT')?>
                                            </span>
                                        </li>
                                    </ul>
                                    <h2 class="fw-bolder text-dark mb-5"><?=$init_lang->pick_lang('CANCELATION_POLICY')?>:</h2>
                                    <div class="fs-4 fw-bold text-gray-700"><?=$init_lang->pick_lang('CANCELATION_POLICY_PART_1')?></div>
                                    <div class="fs-4 fw-bold text-gray-700"><?=$init_lang->pick_lang('CANCELATION_POLICY_PART_2')?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card bg-light card-flush py-4 mt-15">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2><?=$init_lang->pick_lang('ORDER_DETAILS')?></h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column">
                                    <div class="col mb-3">
                                        <span class="fw-bolder fs-3 u_one_night_cost">$ </span>
                                        <span class=""> <?=$init_lang->pick_lang('NIGHTS_TEXT')?></span>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="required form-label"><?=$init_lang->pick_lang('RESERV_OPTION')?></label>
                                        <div class="input-group input-group-lg mb-5">
                                            <input type="text" class="form-control" id="p_from" placeholder="<?=$init_lang->pick_lang('CHECK_IN')?>" aria-label="<?=$init_lang->pick_lang('CHECK_IN')?>" value="<?=date('Y-m-d')?>">
                                            <input type="text" class="form-control" id="p_to" placeholder="<?=$init_lang->pick_lang('CHECK_OUT')?>" aria-label="<?=$init_lang->pick_lang('CHECK_OUT')?>" value="<?=date('Y-m-d',strtotime(' + 2 day', strtotime(date('Y-m-d'))));?>">
                                        </div>
                                        <div class="form-floating mb-7">
                                            <input type="number" class="form-control" id="p_guests" placeholder="Guests"/>
                                            <label for="p_guests"><?=$init_lang->pick_lang('GUSTS_TEXT')?></label>
                                        </div>
                                        <button type="button" class="btn btn-primary d-block w-100" id="complete_reserve"><?=$init_lang->pick_lang('RESERVE_TEXT')?></button>
                                    </div>
                                    <div class="fv-row">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-grow-1">
                                                <span class="text-gray-800 text-hover-primary fs-4 u_one_night_cost">$ </span> x 2 <?=$init_lang->pick_lang('NIGHTS_TEXT')?>
                                            </div>
                                            <span class="fs-4 fw-bolder sub_cost">$ </span>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-grow-1">
                                                <span class="text-gray-800 text-hover-primary fs-4"><?=$init_lang->pick_lang('ADD_FEE')?></span>
                                            </div>
                                            <span class="fs-4 fw-bolder u_added_cost">$ </span>
                                        </div>
                                    </div>
                                    <div class="separator mt-4"></div>
                                    <div class="fv-row mt-5">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-grow-1">
                                                <span class="text-primary text-hover-dark fw-bolder fs-3"><?=$init_lang->pick_lang('TOTAL_BEFOR_TAX')?></span>
                                            </div>
                                            <span class="fs-3 fw-bolder final_cost">$ </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="get_unit" value="<?=$_GET['id']?>">
<input type="hidden" id="nights_count" value="2">
<input type="hidden" id="sub_cost" value="">
<input type="hidden" id="final_cost" value="">
<input type="hidden" id="is_logged" value="<?=$login?>">
<?php include 'modals.php'; ?>


<input type="hidden" class="GUSTS_TEXT" value="<?php $init_lang->pick_lang('GUSTS_TEXT'); ?>">
<input type="hidden" class="BEDROOM_TEXT" value="<?php $init_lang->pick_lang('BEDROOM_TEXT'); ?>">
<input type="hidden" class="BATHS_TEXT" value="<?php $init_lang->pick_lang('BATHS_TEXT'); ?>">

<input type="hidden" class="EMAIL_REQUIRE" value="<?php $init_lang->pick_lang('EMAIL_REQUIRE'); ?>">
<input type="hidden" class="EMAIL_WRONG" value="<?php $init_lang->pick_lang('EMAIL_WRONG'); ?>">
<input type="hidden" class="EMAIL_CHKERR" value="<?php $init_lang->pick_lang('EMAIL_CHKERR'); ?>">
<input type="hidden" class="PASSWORD_REQUIRE" value="<?php $init_lang->pick_lang('PASSWORD_REQUIRE'); ?>">
<input type="hidden" class="PASSWORD_WRONG" value="<?php $init_lang->pick_lang('PASSWORD_WRONG'); ?>">
<input type="hidden" class="SUCCESS_LOGIN_TEXT" value="<?php $init_lang->pick_lang('SUCCESS_LOGIN_TEXT'); ?>">
<input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
<input type="hidden" class="NOTEXSIST_ERR_TEXT" value="<?php $init_lang->pick_lang('NOTEXSIST_ERR_TEXT'); ?>">
<input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
<input type="hidden" class="REQUIRED_TEXT" value="<?php $init_lang->pick_lang('REQUIRED_TEXT'); ?>">
<input type="hidden" class="RESERVE_ADDED" value="<?php $init_lang->pick_lang('RESERVE_ADDED'); ?>">
<input type="hidden" class="COUNTRY_REQUIRE" value="<?php $init_lang->pick_lang('COUNTRY_REQUIRE'); ?>">
<input type="hidden" class="CITY_REQUIRE" value="<?php $init_lang->pick_lang('CITY_REQUIRE'); ?>">
<input type="hidden" class="PASSWORD_LENGTH_CHKERR" value="<?php $init_lang->pick_lang('PASSWORD_LENGTH_CHKERR'); ?>">
<input type="hidden" class="REPASSWORD_DIF_CHKERR" value="<?php $init_lang->pick_lang('REPASSWORD_DIF_CHKERR'); ?>">
<input type="hidden" class="TYPE_REQUIRE" value="<?php $init_lang->pick_lang('TYPE_REQUIRE'); ?>">
<input type="hidden" class="TERMS_REQUIRE" value="<?php $init_lang->pick_lang('TERMS_REQUIRE'); ?>">
<input type="hidden" class="CONFIRMREG_TEXT" value="<?php $init_lang->pick_lang('CONFIRMREG_TEXT'); ?>">
<input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
<input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
<input type="hidden" class="SUCCESS_ADD_TEXT" value="<?php $init_lang->pick_lang('SUCCESS_ADD_TEXT'); ?>">

