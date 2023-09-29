<div class="content flex-row-fluid cairo" id="kt_content">

    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Manage Users</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="?go=home" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">Users</li>
            </ul>
        </div>
        
        <div class="d-flex align-items-center py-2 py-md-1">
            <button type="button" id="reload_users" class="btn btn-light-success fw-bolder me-5">
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="currentColor"/>
                    <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="currentColor"/>
                    </svg>
                </span>Reload
            </button>
            <button type="button" class="btn btn-light-primary fw-bolder" id="new_user">
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
                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor"/>
                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor"/>
                        </svg>
                    </span>
                </span>
                <h3 class="card-label fw-bolder">All Recorded Users</h3>
            </div>
        </div>
        
        <div class="card-body pt-5">
            <table class="table align-center table-row-dashed fs-6 gy-5" id="users_table">
                <thead>
                    <tr class="fw-bold text-gray-800 bg-light" style="text-align: center;">
                        <th style="font-weight: bold;">ID</th>
                        <th style="font-weight: bold;">Name</th>
                        <th style="font-weight: bold;">Email</th>
                        <th style="font-weight: bold;">Country</th>
                        <th style="font-weight: bold;">City</th>
                        <th style="font-weight: bold;">Type</th>
                        <th style="font-weight: bold;">Admin</th>
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