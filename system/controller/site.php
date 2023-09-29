<?php
class Site_Op {

    public $s_id = 1;
    public $s_logo;
    public $s_link;
    public $s_name;
    public $s_title;
    public $s_about;
    public $s_email;
    public $s_mob1;
    public $s_mob2;
    public $s_mob3;
    public $s_address;
    public $s_facebook;
    public $s_whatsapp;
    public $s_youtube;
    public $s_instagram;
    public $s_editdate;
    public $s_editid;
    public $s_editip;
    public $s_editie;

    public $st_id = 1;
    public $st_close;
    public $st_maintenance;
    public $st_underbuild;
    public $st_query;
    public $st_deliver;
    public $st_edeliver_close;
    public $st_dayfrom;
    public $st_dayto;
    public $st_timefrom;
    public $st_timeto;
    public $st_editdate;
    public $st_editid;
    public $st_editip;
    public $st_editie;

    public $SesKey   = 'secure_Login';
    
    public function update_notempty($rowname, $rowvalue){
        global $con;
        
        $this->init_siteinfo();

        if(!empty($rowvalue) && !empty($rowname)){
            if($this->$rowname != $rowvalue){
                $stmt = $con->prepare("UPDATE site_info SET ".$rowname."=? WHERE s_id=?");
                $stmt->bind_param('si', $rowvalue, $this->s_id);
                $stmt->execute();
            }
        }
    }

    public function init_siteinfo(){
        global $con;
        
        $stmt = $con->prepare("SELECT s_logo,s_link,s_name,s_title,s_about,s_email,s_mob1,s_mob2,s_mob3,s_address,s_facebook,s_whatsapp,s_youtube,s_instagram,s_editdate,s_editid,s_editip,s_editie FROM site_info WHERE s_id=?");
        $stmt->bind_param('i', $this->s_id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->s_logo, $this->s_link, $this->s_name, $this->s_title, $this->s_about, $this->s_email, $this->s_mob1, $this->s_mob2, $this->s_mob3, $this->s_address, $this->s_facebook, $this->s_whatsapp, $this->s_youtube, $this->s_instagram, $this->s_editdate, $this->s_editid, $this->s_editip, $this->s_editie);
        if($stmt->num_rows == 1){
            $stmt->fetch();
        }
    }

    public function update_info($data_arr){
        global $get_time;

        $decoded = JWT::decode($data_arr);

        $getSessio = $_SESSION['UserLoginState'];                
        $decode_Login = JWT::decode($getSessio, $this->SesKey);
        $logged_id = $decode_Login->userLoginId;

        $s_logo = $decoded->s_logo;
        $s_link = $decoded->s_link;
        $s_name = $decoded->s_name;
        $s_title = $decoded->s_title;
        $s_about = $decoded->s_about;
        $s_email = $decoded->s_email;
        $s_address = $decoded->s_address;
        $s_mob1 = $decoded->s_mob1;
        $s_mob2 = $decoded->s_mob2;
        $s_mob3 = $decoded->s_mob3;
        $s_facebook = $decoded->s_facebook;
        $s_whatsapp = $decoded->s_whatsapp;
        $s_youtube = $decoded->s_youtube;
        $s_instagram = $decoded->s_instagram;
        $captcha = $decoded->response;

        $userip = $_SESSION['IPaddress'];
        $userie = $_SESSION['userAgent'];
        
        $secretKey = '6LfbdHYcAAAAAF9K6CP428E12p03juRq-Lrr2uAI';
        
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        $this->init_siteinfo();

        if(!$responseKeys["success"]) {
            return 2;
        }
        else {
            if($this->s_logo !== $s_logo){
                $defaultImage = "../../../resources/req/site/logo/temp/" . $s_logo;
                $uploadedImage = "../../../resources/req/site/logo/" . $s_logo;
                @copy($defaultImage, $uploadedImage);
                
                $this->update_notempty('s_logo', $s_logo);

                $directory = '../../../resources/req/site/logo/temp/';
                $files = array();
                foreach (scandir($directory) as $file) {
                    if ($file !== '.' && $file !== '..') {
                        $files[] = $file;
                        $image = realpath($directory) . "/" . $file;
                        unlink($image);
                    }
                }
            }

            $this->update_notempty('s_link', $s_link);
            $this->update_notempty('s_name', $s_name);
            $this->update_notempty('s_title', $s_title);
            $this->update_notempty('s_about', $s_about);
            $this->update_notempty('s_email', $s_email);
            $this->update_notempty('s_address', $s_address);
            $this->update_notempty('s_mob1', $s_mob1);
            $this->update_notempty('s_mob2', $s_mob2);
            $this->update_notempty('s_mob3', $s_mob3);
            $this->update_notempty('s_facebook', $s_facebook);
            $this->update_notempty('s_whatsapp', $s_whatsapp);
            $this->update_notempty('s_youtube', $s_youtube);
            $this->update_notempty('s_instagram', $s_instagram);

            $this->update_notempty('s_editdate', $get_time);
            $this->update_notempty('s_editid', $logged_id);
            $this->update_notempty('s_editip', $userip);
            $this->update_notempty('s_editie', $userie);

            return 1;
        }
    }

    public function update_settings($data_arr){
        global $con;
        global $get_time;

        $decoded = JWT::decode($data_arr);

        $getSessio = $_SESSION['UserLoginState'];                
        $decode_Login = JWT::decode($getSessio, $this->SesKey);
        $logged_id = $decode_Login->userLoginId;

        $st_close = $decoded->st_close;
        $st_maintenance = $decoded->st_maintenance;
        $st_underbuild = $decoded->st_underbuild;
        $st_query = $decoded->st_query;
        $st_deliver = $decoded->st_deliver;
        $st_edeliver_close = $decoded->st_edeliver_close;
        $st_dayfrom = $decoded->st_dayfrom;
        $st_dayto = $decoded->st_dayto;
        $st_timefrom = $decoded->st_timefrom;
        $st_timeto = $decoded->st_timeto;
        $captcha = $decoded->response;

        $userip = $_SESSION['IPaddress'];
        $userie = $_SESSION['userAgent'];
        
        $secretKey = '6LfbdHYcAAAAAF9K6CP428E12p03juRq-Lrr2uAI';
        
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        if(!$responseKeys["success"]) {
            return 2;
        }
        else {
            $stmt = $con->prepare("UPDATE site_settings SET st_close=?,st_maintenance=?,st_underbuild=?,st_query=?,st_deliver=?,st_edeliver_close=?,st_dayfrom=?,st_dayto=?,st_timefrom=?,st_timeto=?,st_editdate=?,st_editid=?,st_editip=?,st_editie=? WHERE st_id=?");
            $stmt->bind_param('iiiiiisssssissi', $st_close, $st_maintenance, $st_underbuild, $st_query, $st_deliver, $st_edeliver_close, $st_dayfrom, $st_dayto, $st_timefrom, $st_timeto, $get_time, $logged_id, $userip, $userie, $this->st_id);
            if($stmt->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function init_sitesettings(){
        global $con;
        
        $stmt = $con->prepare("SELECT st_close,st_maintenance,st_underbuild,st_query,st_deliver,st_edeliver_close,st_dayfrom,st_dayto,st_timefrom,st_timeto,st_editdate,st_editid,st_editip,st_editie FROM site_settings WHERE st_id=?");
        $stmt->bind_param('i', $this->st_id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($this->st_close, $this->st_maintenance, $this->st_underbuild, $this->st_query, $this->st_deliver, $this->st_edeliver_close, $this->st_dayfrom, $this->st_dayto, $this->st_timefrom, $this->st_timeto, $this->st_editdate, $this->st_editid, $this->st_editip, $this->st_editie);
        if($stmt->num_rows >= 1){
            $stmt->fetch();
        }
    }

    public function site_settingsJSON(){
        $this->init_sitesettings();
        $postdata = array(
            'st_close' => $this->st_close,
            'st_maintenance' => $this->st_maintenance,
            'st_underbuild' => $this->st_underbuild,
            'st_query' => $this->st_query,
            'st_deliver' => $this->st_deliver,
            'st_edeliver_close' => $this->st_edeliver_close,
            'st_dayfrom' => $this->st_dayfrom,
            'st_dayto' => $this->st_dayto,
            'st_timefrom' => $this->st_timefrom,
            'st_timeto' => $this->st_timeto
        );
        return json_encode($postdata);
    }

}
$init_site = new Site_Op();
?>