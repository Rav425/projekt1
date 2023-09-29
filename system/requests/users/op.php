<?php
include_once '../../config/init.php';

if(isset($_POST['req_register'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_register']));
    $register_data = $con->real_escape_string($input->xssClean($_POST['register_data']));
    if($confirm == 1){
        echo $init_users->register_user($register_data);
    }
}
elseif(isset($_POST['req_login'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_login']));
    $login_data = $con->real_escape_string($input->xssClean($_POST['login_data']));
    if($confirm == 1){
        echo $init_users->login_user($login_data);
    }
}
elseif(isset($_FILES['req_upload_thumb'])){

    $image_name = $_FILES['req_upload_thumb']['name'];
    $image_size = $_FILES['req_upload_thumb']['size'];
    $image_type = $_FILES['req_upload_thumb']['type'];
    $image_temp = $_FILES['req_upload_thumb']['tmp_name'];
		
    // allowed exts ..
    $allowedExts = array("jpeg", "jpg", "png", "gif", "pdf");

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
        
        if( @move_uploaded_file($image_temp, "avatar/temp/" . $avatar) ){
            echo $avatar;
        }
    }
}
elseif(isset($_POST['req_loggeduser'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_loggeduser']));
    if($confirm == 1){
        echo $init_users->req_loggedUserJson();
    }
}
elseif(isset($_POST['req_updtprofilemail'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updtprofilemail']));
    $profilemail_data = $con->real_escape_string($input->xssClean($_POST['profilemail_data']));
    if($confirm == 1){
        echo $init_users->update_profile_email($profilemail_data);
    }
}
elseif(isset($_POST['req_updtprofilpass'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updtprofilpass']));
    $profilpass_data = $con->real_escape_string($input->xssClean($_POST['profilpass_data']));
    if($confirm == 1){
        echo $init_users->update_profile_pass($profilpass_data);
    }
}
elseif(isset($_POST['update_profile'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['update_profile']));
    $profile_data = $con->real_escape_string($input->xssClean($_POST['profile_data']));
    if($confirm == 1){
        echo $init_users->update_profile($profile_data);
    }
}
elseif(isset($_POST['change_langtoDe'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['change_langtoDe']));
    if($confirm == 1){
        echo $init_users->changelang_de();
    }
}
elseif(isset($_POST['req_langtoEn'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_langtoEn']));
    if($confirm == 1){
        echo $init_users->changelang_en();
    }
}
elseif(isset($_POST['req_cp_login'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_cp_login']));
    $login_data = $con->real_escape_string($input->xssClean($_POST['login_data']));
    if($confirm == 1){
        echo $init_users->login_cp_user($login_data);
    }
}
elseif(isset($_POST['req_cp_logout'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_cp_logout']));
    if($confirm == 1){
        echo $init_users->logout_cp_user();
    }
}
elseif(isset($_POST['req_newuser'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_newuser']));
    $user_data = $con->real_escape_string($input->xssClean($_POST['user_data']));
    if($confirm == 1){
        echo $init_users->add_user($user_data);
    }
}
elseif(isset($_POST['req_deluser'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_deluser']));
    $user_id = $con->real_escape_string($input->xssClean($_POST['user_id']));
    if($confirm == 1){
        echo $init_users->delete_user($user_id);
    }
}
elseif(isset($_POST['req_olduser'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_olduser']));
    $user_id = $con->real_escape_string($input->xssClean($_POST['user_id']));
    if($confirm == 1){
        echo $init_users->req_userJsonId($user_id);
    }
}
elseif(isset($_POST['req_updateuser'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updateuser']));
    $user_data = $con->real_escape_string($input->xssClean($_POST['user_data']));
    if($confirm == 1){
        echo $init_users->update_user($user_data);
    }
}
elseif(isset($_POST['req_newlang'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_newlang']));
    $lang_data = $con->real_escape_string($input->xssClean($_POST['lang_data']));
    if($confirm == 1){
        echo $init_lang->new_word($lang_data);
    }
}
elseif(isset($_POST['req_delword'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_delword']));
    $word_id = $con->real_escape_string($input->xssClean($_POST['word_id']));
    if($confirm == 1){
        echo $init_lang->delete_word($word_id);
    }
}
elseif(isset($_POST['req_oldword'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_oldword']));
    $word_id = $con->real_escape_string($input->xssClean($_POST['word_id']));
    if($confirm == 1){
        echo $init_lang->req_wordJsonId($word_id);
    }
}
elseif(isset($_POST['req_updatelang'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_updatelang']));
    $lang_data = $con->real_escape_string($input->xssClean($_POST['lang_data']));
    if($confirm == 1){
        echo $init_lang->update_word($lang_data);
    }
}
// ----------
elseif(isset($_POST['req_logout'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_logout']));
    if($confirm == 1){
        echo $init_users->log_out();
    }
}
elseif(isset($_POST['req_langtoDe'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_langtoDe']));
    if($confirm == 1){
        echo $init_users->change_langtoDe();
    }
}
elseif(isset($_POST['req_userinfo'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_userinfo']));
    $user_id = $con->real_escape_string($input->xssClean($_POST['user_id']));
    if($confirm == 1){
        echo $init_users->req_UserIdJson($user_id);
    }
}
elseif(isset($_POST['req_addlike'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['req_addlike']));
    $user_id = $con->real_escape_string($input->xssClean($_POST['user_id']));
    if($confirm == 1){
        echo $init_users->req_addlike($user_id);
    }
}
elseif(isset($_POST['add_newview'])){
    $confirm = $con->real_escape_string($input->xssClean($_POST['add_newview']));
    $user_id = $con->real_escape_string($input->xssClean($_POST['user_id']));
    if($confirm == 1){
        echo $init_users->req_addview($user_id);
    }
}







?>
