<?php
include_once '../../../system/config/init.php';

$connect = $con;

$getSessio = $_SESSION['UserLoginState'];
$decode_Login = JWT::decode($getSessio, $init_users->SesKey);
$userLoginId = $decode_Login->userLoginId;

$columns = array(
	'r_id',
	'r_create_at',
	'r_from',
    'r_to',
    'r_guests_count',
    'r_night_cost',
    'r_nights_count',
    'r_sub_cost',
    'r_final_cost',
    'r_statue'
);
$query = "SELECT * FROM reservations WHERE r_user_id='$userLoginId' ";
if(isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])){  // SEARCH DATA..	
	$query .= 'AND r_from = "'.$_POST["search"]["value"].'"
	';
}
if(isset($_POST["order"])){ // ORDER BY COLUMNS	
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
	';
}
else {
	$query .= 'ORDER BY r_id DESC ';
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
    $cancel_button = '';

    if($row['r_statue'] == 1){
        $statue = '<span class="text-primary">Pending</span>';
        $cancel_button = '
            <button type="button" uid="'.$row["r_id"].'" class="btn btn-icon btn-warning m-1 btn-sm cancelthis" title="Cancel Reservation">
                <span class="svg-icon svg-icon-muted svg-icon-2x">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"/>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
                    </svg>
				</span>
            </button>
        ';
    }
    elseif($row['r_statue'] == 2){
        $statue = '<span class="text-success">Confirmed</span>';
        $cancel_button = '';
    }
    elseif($row['r_statue'] == 3){
        $statue = '<span class="text-danger">Canceled</span>';
        $cancel_button = '';
    }
    elseif($row['r_statue'] == 4){
        $statue = '<span class="text-warning">Rejected</span>';
        $cancel_button = '';
    }
    
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_id"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . date('Y/m/d h:i A', strtotime($row["r_create_at"])) . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . date('Y/m/d', strtotime($row["r_from"])) . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . date('Y/m/d', strtotime($row["r_to"])) . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_guests_count"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_night_cost"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_nights_count"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_sub_cost"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $row["r_final_cost"] . ' </div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . $statue . ' </div>';
    
	$sub_array[] = '<div style="text-align:center;">
            '.$cancel_button.'
            <button type="button" uid="'.$row["r_id"].'" class="btn btn-icon btn-danger m-1 btn-sm deletethis" title="Delete Reservation">
                <span class="svg-icon svg-icon-muted svg-icon-2x">
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
	$query = "SELECT * FROM reservations";
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
