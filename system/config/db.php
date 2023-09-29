<?php
$con = new MySQLi( DBHOST, DBUNAME, DBUPASS, DBNAME );
if( $con->connect_errno ){
	if(LANG == 'AR'){
		echo '<center><h1>خطأ باعدادات قاعدة البيانات</h1></center>';
		exit;
	}
	else {
		echo '<center><h1>Error, database Configuration error !!</h1></center>';
		exit;
	}
}
else {
	$con->query("SET NAMES 'utf8mb4'");
}
echo $con->error;
?>