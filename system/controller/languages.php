<?php

class Language {

    public $l_id;
    public $l_key;
    public $en_value;
    public $de_value;
    
    public function checkkey($key, $id = 0){
        global $con;
        if(!empty($key)){
			$s = $con->prepare("SELECT l_id FROM `languages` WHERE l_key=? AND l_id!=?");
			$s->bind_param('si', $key, $id);
			$s->execute();
			$s->store_result();
			if($s->num_rows >= 1){
				return 1;
			}
		}
    }

    public function init_wordById($id){
        global $con;
        if($id >= 1){
            $s = $con->prepare("SELECT l_key,en_value,de_value FROM languages WHERE l_id=?");
            $s->bind_param('i', $id);
            $s->execute();
            $s->store_result();
            $s->bind_result($this->l_key, $this->en_value, $this->de_value);
            if($s->num_rows >= 1){
                $s->fetch();
            }
        }
    }

    public function pick_lang($text){
        global $con;
        if(!empty($text)){
            if(LANG == 'DE'){
                $stmt = $con->prepare("SELECT `de_value` FROM `languages` WHERE `l_key`=?");
                $stmt->bind_param('s', $text);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($de_value);
                if($stmt->num_rows() >= 1){
                    $stmt->fetch();
                    echo $de_value;
                }
                else {
                    echo $text;
                }
            }
            elseif(LANG == 'EN'){
                $stmt = $con->prepare("SELECT `en_value` FROM `languages` WHERE `l_key`=?");
                $stmt->bind_param('s', $text);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($en_value);
                if($stmt->num_rows() >= 1){
                    $stmt->fetch();
                    echo $en_value;
                }
                else {
                    echo $text;
                }
            }
        }
    }

    public function pick_clang($text, $lang){
        global $con;
        if(!empty($text)){
            if($lang == 'DE'){
                $stmt = $con->prepare("SELECT `de_value` FROM `languages` WHERE `l_key`=?");
                $stmt->bind_param('s', $text);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($de_value);
                if($stmt->num_rows() >= 1){
                    $stmt->fetch();
                    return $de_value;
                }
                else {
                    return $text;
                }
            }
            elseif($lang == 'EN'){
                $stmt = $con->prepare("SELECT `en_value` FROM `languages` WHERE `l_key`=?");
                $stmt->bind_param('s', $text);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($en_value);
                if($stmt->num_rows() >= 1){
                    $stmt->fetch();
                    return $en_value;
                }
                else {
                    return $text;
                }
            }
        }
    }

    public function new_word($data_arr){
        global $con;

        $decoded = JWT::decode($data_arr);
        $l_key = $decoded->l_key;
        $en_value = $decoded->en_value;
        $de_value = $decoded->de_value;

        if($this->checkkey($l_key) != 1){
            $s = $con->prepare("INSERT INTO `languages` (l_key,en_value,de_value) VALUES (?,?,?)");
            $s->bind_param('sss', $l_key, $en_value, $de_value);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
        else {
            return 2;
        }
    }

    public function delete_word($id_arr){
        global $con;

        $decoded = JWT::decode($id_arr);
        $word_id = $decoded->word_id;
        if($word_id >= 1){
            $s = $con->prepare("DELETE FROM languages WHERE l_id=?");
            $s->bind_param('i', $word_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function req_wordJsonId($id_arr){
        $decoded = JWT::decode($id_arr);
        $word_id = $decoded->word_id;
        if($word_id >= 1){
            $this->init_wordById($word_id);
            $postdata = array(
                'l_key' => $this->l_key,
                'en_value' => $this->en_value,
                'de_value' => $this->de_value,
            );
            return json_encode($postdata);
        }
    }

    public function update_word($data_arr){
        global $con;

        $decoded = JWT::decode($data_arr);
        $word_id = $decoded->word_id;
        $l_key = $decoded->l_key;
        $en_value = $decoded->en_value;
        $de_value = $decoded->de_value;

        if($this->checkkey($l_key, $word_id) == 1){
            return 2;
        }
        else {
            $s = $con->prepare("UPDATE languages SET l_key=?,en_value=?,de_value=? WHERE l_id=?");
            $s->bind_param('sssi', $l_key, $en_value, $de_value, $word_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }
}

$init_lang = new Language();
?>
