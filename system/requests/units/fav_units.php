<?php
include_once '../../../system/config/init.php';

$connect = $con;

$getSessio = $_SESSION['UserLoginState'];
$decode_Login = JWT::decode($getSessio, $init_users->SesKey);
$userLoginId = $decode_Login->userLoginId;

