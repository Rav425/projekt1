<?php
include_once '../../config/init.php';
if(isset($_FILES['req_upload_thumb'])){
    $image_name = $_FILES['req_upload_thumb']['name'];
    $image_size = $_FILES['req_upload_thumb']['size'];
    $image_type = $_FILES['req_upload_thumb']['type'];
    $image_temp = $_FILES['req_upload_thumb']['tmp_name'];
    $allowedExts = array("jpeg", "jpg", "png", "gif", "pdf");
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
elseif(isset($_POST['req_newcat'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_newcat']));
    $cat_data = $con->real_escape_string($input->xssClean($_POST['cat_data']));
    if($confirm == 1){
        echo $init_categories->new_category($cat_data);
    }
}
elseif(isset($_POST['req_delcat'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_delcat']));
    $cat_id = $con->real_escape_string($input->xssClean($_POST['cat_id']));
    if($confirm == 1){
        echo $init_categories->delete_category($cat_id);
    }
}
elseif(isset($_POST['req_oldcat'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_oldcat']));
    $cat_id = $con->real_escape_string($input->xssClean($_POST['cat_id']));
    if($confirm == 1){
        echo $init_categories->req_oldCatJsonId($cat_id);
    }
}
elseif(isset($_POST['req_updatecat'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updatecat']));
    $cat_data = $con->real_escape_string($input->xssClean($_POST['cat_data']));
    if($confirm == 1){
        echo $init_categories->update_category($cat_data);
    }
}



?>