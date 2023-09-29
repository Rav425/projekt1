<?php

date_default_timezone_set("Europe/Berlin");
$get_time = date("Y-m-d H:i:s");

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$siteLink = "https"; 
else
	$siteLink = "http"; 

// Here append the common URL characters. 
$siteLink .= "://"; 
// Append the host(domain name, ip) to the URL. 
$siteLink .= $_SERVER['HTTP_HOST'];

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
function split_words($string, $nb_caracs, $separator){
    $string = strip_tags(html_entity_decode($string));
    if( strlen($string) <= $nb_caracs ){
        $final_string = $string;
    } else {
        $final_string = "";
        $words = explode(" ", $string);
        foreach( $words as $value ){
            if( strlen($final_string . " " . $value) < $nb_caracs ){
                if( !empty($final_string) ) $final_string .= " ";
                $final_string .= $value;
            } else {
                break;
            }
        }
        $final_string .= $separator;
    }
    return $final_string;
}

function formatDateDiff($start, $end=null) {
	if(!($start instanceof DateTime)) {
		$start = new DateTime($start);
	}
   
	if($end === null) {
		$end = new DateTime();
	}
   
	if(!($end instanceof DateTime)) {
		$end = new DateTime($start);
	}
   
	$interval = $end->diff($start);
	$doPlural = function($nb,$str){return $nb>1?$str:$str;}; // adds plurals
   
	$format = array();
	if($interval->y !== 0) {
		$format[] = "%y ".$doPlural($interval->y, "عام");
	}
	if($interval->m !== 0) {
		$format[] = "%m ".$doPlural($interval->m, "شهر");
	}
	if($interval->d !== 0) {
		$format[] = "%d ".$doPlural($interval->d, "يوم");
	}
	if($interval->h !== 0) {
		$format[] = "%h ".$doPlural($interval->h, "ساعة");
	}
	if($interval->i !== 0) {
		$format[] = "%i ".$doPlural($interval->i, "دقيقة");
	}
	if($interval->s !== 0) {
		if(!count($format)) {
			return "اقل من دقيقة";
		} else {
			$format[] = "%s ".$doPlural($interval->s, "ثانية");
		}
	}
   
	// We use the two biggest parts
	if(count($format) > 1) {
		$format = array_shift($format)." و ".array_shift($format);
	} else {
		$format = array_pop($format);
	}
   
	// Prepend 'since ' or whatever you like
	return $interval->format($format);
}

$gen_link64 = substr(str_shuffle("abcdefFghHiJklmqRstTuvw0xyZzabcCdefgiIjkl"), 1, 20);

$gen_link = substr(str_shuffle("aB0Cd5iIQLSw3Gy"), 0, 10);

function sendVerifymail($usermail, $usercode, $verifycode){
    global $siteLink;
    global $mail;
    
    $body2 = '
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<title>تفعيل البريد الالكتروني</title>
			<style>
				.wrapper {
					padding: 20px;
					color: #444;
					font-size: 1.3em;
				}

				a {
					border: 1px solid #3063c0;
					background: #fff;
					font-weight: bold;
					text-decoration: none;
					padding: 8px 15px;
					border-radius: 5px;
				}

				p {
					font-weight: bold;
				}
			</style>
		</head>

		<body>
			<div class="wrapper">
				<p>تم تسجيل حسابك بمنصة عصام دياب الالكترونية لخدمة المواطنين </p>
				<p>يرجى الضغط على الرابط بالاسفل لاتمام تفعيل بريدك الالكتروني لدينا ..</p>
				<a href="https://www.diabsupport.com/jobs/verify?id='.$usercode.'&code='.$verifycode.'">اضغط هنا لتفعيل بريدك الالكتروني</a>
			</div>
		</body>

		</html>
	';
	
    $mail->addAddress($usermail, $usercode);
    $mail->Subject = 'تفعيل البريد الالكتروني';
    $mail->Body = $body2;
    $mail->AltBody = 'لتفعيل بريدك -> <a href="'.$siteLink.'/jobs/verify?id='.$usercode.'&code='.$verifycode.'">تفعيل البريد!</a>';
    if (!$mail->send()) {
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
        return 'done';
    } else {
        //echo 'The email message was sent.';
        return 'error';
    }
}




?>