<?php
include_once '../../config/init.php';
if(isset($_FILES['update_logo'])){

    $image_name = $_FILES['update_logo']['name'];
    $image_size = $_FILES['update_logo']['size'];
    $image_type = $_FILES['update_logo']['type'];
    $image_temp = $_FILES['update_logo']['tmp_name'];
		
    // allowed exts ..
    $allowedExts = array("jpeg", "jpg", "png", "gif", "pdf");

    // get image ext ..
    $image_ext = strtolower(end(explode('.', $image_name)));
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
        $avatar = $hashName1 . '_logo_'. $hashName2 . '.' . $image_ext;
			
        // upload process ..
        if( move_uploaded_file($image_temp, "logo/temp/" . $avatar) ){
            echo $avatar;
        }
    }
}
elseif(isset($_POST['req_updateinfo'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updateinfo']));
    $updateinfo_data = $con->real_escape_string($input->xssClean($_POST['updateinfo_data']));
    if($confirm == 1){
        echo $init_site->update_info($updateinfo_data);
    }
}
elseif(isset($_POST['req_updatesetts'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updatesetts']));
    $updatesetts_data = $con->real_escape_string($input->xssClean($_POST['updatesetts_data']));
    if($confirm == 1){
        echo $init_site->update_settings($updatesetts_data);
    }
}
elseif(isset($_POST['req_sitesettings'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_sitesettings']));
    if($confirm == 1){
        echo $init_site->site_settingsJSON();
    }
}

?>