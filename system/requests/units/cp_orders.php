<?php
include_once '../../../system/config/init.php';

$connect = $con;
$columns = array(
	'r_id',
	'r_create_at',
	'r_user_id',
	'r_unit_id',
	'r_from',
	'r_to',
	'r_final_cost',
	'r_statue',
	'r_id'
);

$query = "SELECT * FROM reservations ";

if(isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])){  // SEARCH DATA..	
	$query .= 'WHERE r_id = "'.$_POST["search"]["value"].'"
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

    if($row['r_statue'] == 1){
        $r_statue = '<span class="text-primary">Pending</span>';
    }
    elseif($row['r_statue'] == 2){
        $r_statue = '<span class="text-success">Confirmed</span>';
    }
    elseif($row['r_statue'] == 3){
        $r_statue = '<span class="text-danger">Rejected</span>';
    }
    elseif($row['r_statue'] == 4){
        $r_statue = '<span class="text-warning">Expired</span>';
    }

    $init_users->init_userById($row['r_user_id']);
    $init_units->init_UnitById($row['r_unit_id']);
    
    $sub_array[] = '<div style="text-align:center;font-weight:bold">' . $row["r_id"] . '</div>';
    $sub_array[] = '<div style="text-align:center;" class="fw-bolder">' . date('Y/m/d h:i A', strtotime($row["r_create_at"])) . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $init_users->u_email . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $init_units->u_title . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["r_from"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["r_to"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["r_final_cost"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $r_statue . '</div>';
    
	$sub_array[] = '
        <div style="text-align:center;">
            <a href="#" cid="'.$row["r_id"].'"class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 viewthis" title="View Order">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                </span>
            </a>
            <a href="#" cid="'.$row["r_id"].'"class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 rejectthis" title="Reject Order">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z" fill="black"/>
                    <path d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z" fill="black"/>
                    </svg>
                </span>
            </a>
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