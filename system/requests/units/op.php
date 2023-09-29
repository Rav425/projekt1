<?php
include_once '../../config/init.php';

if(isset($_POST['add_unit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['add_unit']));
    $unit_data = $con->real_escape_string($input->xssClean($_POST['unit_data']));
    if($confirm == 1){
        echo $init_units->new_unit($unit_data);
    }
}
elseif(isset($_FILES['req_upload_unit'])){

    $image_name = $_FILES['req_upload_unit']['name'];
    $image_size = $_FILES['req_upload_unit']['size'];
    $image_type = $_FILES['req_upload_unit']['type'];
    $image_temp = $_FILES['req_upload_unit']['tmp_name'];
		
    // allowed exts ..
    $allowedExts = array("jpeg", "jpg", "png", "gif", "pdf", "webp");

    // get image ext ..
    $image_ext = @strtolower(end(explode('.', $image_name)));
    if(empty($image_name)){
        echo 2;
    }
    elseif(! empty($image_name) && ! in_array($image_ext, $allowedExts)){
        echo 3;
    }
    elseif($image_size > 41943040){
        echo 4;
    }
    else {
        $hashName1 = rand(0, 1000000);
        $hashName2 = rand(0, 1000000);
        $avatar = $hashName1 . '_img_'. $hashName2 . '.' . $image_ext;
        
        if( @move_uploaded_file($image_temp, "thumbs/temp/" . $avatar) ){
            echo $avatar;
        }
    }
}
elseif(isset($_POST['req_oldunit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_oldunit']));
    $unit_id = $con->real_escape_string($input->xssClean($_POST['unit_id']));
    $u_admin = $con->real_escape_string($input->xssClean($_POST['u_admin']));
    if($confirm == 1){
        echo $init_units->req_unitJsonId($unit_id, $u_admin);
    }
}
elseif(isset($_POST['delete_unit_image'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['delete_unit_image']));
    $unit_image = $con->real_escape_string($input->xssClean($_POST['unit_image']));
    if($confirm == 1){
        echo $init_units->delete_unit_image($unit_image);
    }
}
elseif(isset($_POST['update_unit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['update_unit']));
    $unit_data = $con->real_escape_string($input->xssClean($_POST['unit_data']));
    if($confirm == 1){
        echo $init_units->update_unit($unit_data);
    }
}
elseif(isset($_POST['delete_unit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['delete_unit']));
    $unit_id = $con->real_escape_string($input->xssClean($_POST['unit_id']));
    if($confirm == 1){
        echo $init_units->delete_unit($unit_id);
    }
}
elseif(isset($_POST['reserve_unit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['reserve_unit']));
    $reserve_data = $con->real_escape_string($input->xssClean($_POST['reserve_data']));
    if($confirm == 1){
        echo $init_units->reserve_unit($reserve_data);
    }
}
elseif(isset($_POST['cancel_reserve'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['cancel_reserve']));
    $reserve_id = $con->real_escape_string($input->xssClean($_POST['reserve_id']));
    if($confirm == 1){
        echo $init_units->cancel_reserve($reserve_id);
    }
}
elseif(isset($_POST['delete_reserve'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['delete_reserve']));
    $reserve_id = $con->real_escape_string($input->xssClean($_POST['reserve_id']));
    if($confirm == 1){
        echo $init_units->delete_reserve($reserve_id);
    }
}
elseif(isset($_POST['like_unit'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['like_unit']));
    $unit_data = $con->real_escape_string($input->xssClean($_POST['unit_data']));
    if($confirm == 1){
        echo $init_units->like_unit($unit_data);
    }
}


