<?php
include_once '../../../system/config/init.php';

$connect = $con;
$columns = array(
	'u_id',
	'u_name',
	'u_email',
	'u_country',
	'u_city',
	'u_type',
	'u_id'
);

$query = "SELECT * FROM users ";

if(isset($_POST["search"]["value"]) && !empty($_POST["search"]["value"])){  // SEARCH DATA..	
	$query .= 'WHERE u_name LIKE "%'.$_POST["search"]["value"].'%"
        OR u_email = "%'.$_POST["search"]["value"].'%"
        OR u_mobile = "%'.$_POST["search"]["value"].'%"
        OR u_country LIKE "%'.$_POST["search"]["value"].'%"
        OR u_city = "%'.$_POST["search"]["value"].'%"
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

    if($row["u_type"] == 1){
        $u_type = '<span class="text-primary">Customer</span>';
    }
    elseif($row["u_type"] == 2){
        $u_type = '<span class="text-info">Seller</span>';
    }

    if($row["u_admin"] == 0){
        $u_admin = '
            <span title="Not Active" class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
            </svg></span>
        ';
    }
    elseif($row["u_admin"] == 1){
        $u_admin = '
            <span title="Active" class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
            </svg></span>
        ';
    }
        
    $sub_array[] = '<div style="text-align:center;font-weight:bold">' . $row["u_id"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["u_name"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["u_email"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["u_country"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $row["u_city"] . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $u_type . '</div>';
    $sub_array[] = '<div style="text-align:center;">' . $u_admin . '</div>';
    
	$sub_array[] = '
        <div style="text-align:center;">
            <a href="#" cid="'.$row["u_id"].'"class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 editthis" title="Edit User">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                    </svg>
                </span>
            </a>
            <a href="#" cid="'.$row["u_id"].'"class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 deletethis" title="Delete User">
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
	$query = "SELECT * FROM users";

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