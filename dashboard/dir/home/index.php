<div class="content flex-row-fluid cairo" id="kt_content">

    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3"><?=APPNAMEEN?> Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <span class="svg-icon svg-icon-3hx svg-icon-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M11 3C11 3.6 10.6 4 10 4V9H4H5C5.6 9 6 8.6 6 8C6 7.4 5.6 7 5 7H4V4C3.4 4 3 3.6 3 3C3 2.4 3.4 2 4 2H10C10.6 2 11 2.4 11 3ZM20 2H14C13.4 2 13 2.4 13 3C13 3.6 13.4 4 14 4V7H15C15.6 7 16 7.4 16 8C16 8.6 15.6 9 15 9H14V12H15C15.6 12 16 12.4 16 13C16 13.6 15.6 14 15 14H14H20V4C20.6 4 21 3.6 21 3C21 2.4 20.6 2 20 2Z" fill="currentColor"/>
                                <path d="M10 9V19C10 20.7 8.7 22 7 22C5.3 22 4 20.7 4 19H5C5.6 19 6 18.6 6 18C6 17.4 5.6 17 5 17H4V14H5C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12H4V9H10ZM14 14V17H15C15.6 17 16 17.4 16 18C16 18.6 15.6 19 15 19H14C14 20.7 15.3 22 17 22C18.7 22 20 20.7 20 19V14H14Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">0<?php //echo $init_drugs->count_alldrugs()?></span>
                        <div class="m-0">
                            <span class="fw-bold fs-6 text-gray-400">Recorded</span>
                        </div>
                    </div>
                    <a href="?go=medics" class="btn btn-light btn-active-light-info col-12" id="">View</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <span class="svg-icon svg-icon-3hx svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="currentColor"/>
                                <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="currentColor"/>
                                <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="currentColor"/>
                                <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="currentColor"/>
                                <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="currentColor"/>
                                <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="currentColor"/>
                                <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="currentColor"/>
                                <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">00<?php //echo $init_pharmas->count_allpharm()?></span>
                        <div class="m-0">
                            <span class="fw-bold fs-6 text-gray-400">Recorded</span>
                        </div>
                    </div>
                    <a href="?go=pharmas" class="btn btn-light btn-active-light-primary col-12" id="">View</a>
                </div>
            </div>
        </div>
        
    </div>

</div>
<?php //include 'modals.php'; ?>