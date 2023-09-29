<div class="content flex-row-fluid cairo" id="kt_content">

    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Manage Categories</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="?go=home" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">Categories</li>
            </ul>
        </div>
        
        <div class="d-flex align-items-center py-2 py-md-1">
            <button type="button" id="reload_category" class="btn btn-light-success fw-bolder me-5">
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="currentColor"/>
                    <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="currentColor"/>
                    </svg>
                </span>Reload
            </button>
            <button type="button" class="btn btn-light-primary fw-bolder" id="new_category">
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                    </svg>
                </span>Create New
            </button>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <span class="card-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M2 21V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H3C2.4 22 2 21.6 2 21Z" fill="currentColor"/>
                        <path d="M2 10V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H3C2.4 11 2 10.6 2 10Z" fill="currentColor"/>
                        </svg>
                    </span>
                </span>
                <h3 class="card-label fw-bolder">All Recorded Categories</h3>
            </div>
        </div>
        
        <div class="card-body pt-5">
            <table class="table align-center table-row-dashed fs-6 gy-5" id="cats_table">
                <thead>
                    <tr class="fw-bold text-gray-800 bg-light" style="text-align: center;">
                        <th style="font-weight: bold;">ID</th>
                        <th style="font-weight: bold;">Title</th>
                        <th style="font-weight: bold;">Icon</th>
                        <th style="font-weight: bold;text-align:center;">Manage</th>
                    </tr>
                </thead>
                
                <tbody class="fw-bold fs-5">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'modals.php'; ?>