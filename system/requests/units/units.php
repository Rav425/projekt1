<?php
include_once '../../../system/config/init.php';

$connect = $con;

$getSessio = $_SESSION['UserLoginState'];
$decode_Login = JWT::decode($getSessio, $init_users->SesKey);
$userLoginId = $decode_Login->userLoginId;

$columns = array(
	'p_id',
	'p_title',
	'p_to',
    'p_jobslink',
    'p_views',
    'p_likes'
);

$query = "SELECT * FROM units WHERE u_user_id='$userLoginId' ";

if(isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])){  // SEARCH DATA..	
	$query .= 'AND u_title LIKE "%'.$_POST["search"]["value"].'%"
	';
}

if(isset($_POST["order"])){ // ORDER BY COLUMNS	
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
	';
}
else {
	$query .= 'ORDER BY u_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1){	
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = ($connect->query($query)->num_rows);

$result = $connect->query($query . $query1);

$data = array();

while($row = $result->fetch_array()){
	$sub_array = array();
    
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_title"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . date('Y/m/d h:i A', strtotime($row["u_create_at"])) . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_country"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_city"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_host_count"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_room_count"] . ' </div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_path_count"] . ' </div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["u_one_night_cost"] . ' </div>';
    
	$sub_array[] = '<div style="text-align:center;">
            <a target="_blank" href="?go=view_unit&id='.$row["u_id"].'" class="btn btn-icon btn-primary m-1 btn-sm" title="View">
                <span class="svg-icon svg-icon-muted svg-icon-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"/>
						<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"/>
						<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"/>
					</svg>
				</span>
            </a>
            <button type="button" uid="'.$row["u_id"].'" class="btn btn-icon btn-info m-1 btn-sm editunit" title="Edit">
                <span class="svg-icon svg-icon-muted svg-icon-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
						<path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
						<path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
					</svg>
				</span>
            </button>
            <button type="button" uid="'.$row["u_id"].'" class="btn btn-icon btn-danger m-1 btn-sm deleteunit" title="Delete">
                <span class="svg-icon svg-icon-muted svg-icon-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
						<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
						<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
					</svg>
				</span>
            </button>
        </div>
    ';
	$data[] = $sub_array;
}
function get_all_data($connect)
{
	$query = "SELECT * FROM units";
	$result = $connect->query($query);
	return $result->num_rows;
}
$output = array(
	"draw" => intval($_POST["draw"]),
	"recordsTotal" => get_all_data($connect),
	"recordsFiltered" => $number_filter_row,
	"data" => $data
);
echo json_encode($output);
?>
