<?php
class LogAtt {
	
	private $a_id;
	public  $a_time;
	public  $a_mail;
	public  $a_uid;
	public  $a_status;
	public  $a_ip;
	public  $a_userAgent;
	
	public function Add_Event($umail = '', $state, $userid = ''){
		global $con;
		global $get_time;
		
		$this->a_time = $get_time;
		$this->a_mail = $umail;
		$this->a_uid = $userid;
		$this->a_status = $state;
		$this->a_ip = $_SESSION['IPaddress'];
		$this->a_userAgent = $_SESSION['userAgent'];
		
		$stmt = $con->prepare("INSERT INTO login_attemps (a_time,a_mail,a_uid,
		a_status,a_ip,a_userAgent) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param('ssisss', $this->a_time, $this->a_mail, $this->a_uid,
		$this->a_status, $this->a_ip, $this->a_userAgent);
		if(!$stmt->execute()){
			return $con->error;
		}
		
	}
	
}

$logAtt = new LogAtt();
?>