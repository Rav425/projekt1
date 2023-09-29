<?php
SessionManager::sessionStart('kasho');

class MyToken {
	
	public $token_value;
	public $token_name;
	
	public function new_token($name = 'token'){

		$this->token_value = sha1(uniqid('', true).'_'.mt_rand());
		$this->token_name = $name;
		
		if( empty( $_SESSION[$this->token_name] ) ){
			
			$_SESSION[$this->token_name] = $this->token_value;
			
		}
		
		else {
			
			unset($_SESSION[$this->token_name]);
			
			$_SESSION[$this->token_name] = $this->token_value;
			
		}
		echo $this->token_value;
		
	}
	
	public function Test_token( $token = false, $name = 'token' ){
		if( $token != false ) {
			$this->token_name = $name;
			$this->token_value = $token;
			$sess_token = $_SESSION[$this->token_name];
			if( empty( $sess_token ) ) {
				echo 'error';
			}
			else {
				if($sess_token == $this->token_value){
					$_SESSION[$this->token_name] = null;
				}
				else {
					echo 'error';
				}
			}
		}
	}
}
$run_token = new MyToken();

?>