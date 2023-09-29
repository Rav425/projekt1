<?php

// DEBUGING ACTIVATE
ini_set('display_errors', 1);                                                                               // IF NEED DEBUG & ERROR VIEW
//error_reporting(E_ERROR | E_WARNING | E_PARSE);                                                           // PRODUCTION MODE & HIDING ERRORS

// application name
if(! defined( 'APPNAMEEN' )){ define( 'APPNAMEEN', 'Hotel BnB' ); }     
if(! defined( 'APPNAMEAR' )){ define( 'APPNAMEAR', 'Hotel BnB' ); }                                              // APPLICATION NAME

// MAIN TOP PATH
if(! defined( 'UPATH' )){ define('UPATH', dirname( __DIR__ ) . '/' ); }                                     // APPLICATION DIRECTORY

// base script language
if(! defined( 'LANG' )){ define( 'LANG', isset($_COOKIE['LANG'])?$_COOKIE['LANG']:'EN'); }        // DEFINE THE DEFAULT VIEW LANGUAGE
if(! defined( 'HMTHEME' )){ define( 'HMTHEME', 'template_1/'); }                                              // DEFINE THE TEMPLATE & THEME FOLDER TITLE
if(! defined( 'CPTMPL' )){ define( 'CPTMPL', 'templates/' . HMTHEME); }                                               // DEFINE TEMPLATES MAIN DIRECTORY

/* database configuration */
if(! defined( 'DBHOST' )){ define( 'DBHOST', 'localhost' ); }
if(! defined( 'DBUNAME' )){ define( 'DBUNAME', 'root' ); }
if(! defined( 'DBUPASS' )){ define( 'DBUPASS', '' ); }
if(! defined( 'DBNAME' )){ define( 'DBNAME', 'zn' ); }
include UPATH . 'config/db.php';
/* database configuration */

// main location transformer ..
if(isset($_GET['go'])){
    $go = $_GET['go'];
}
else {
    $go = '';
}
if(!isset($_COOKIE['LANG'])){
    $_COOKIE['LANG'] = "EN";
}
// main classes directory
if(! defined( 'CLSDIR' )){ define( 'CLSDIR', 'controller/' ); }                                                // CLASSES DIRECTORY
if(! defined( 'LIBS' )){ define( 'LIBS', 'libs/' ); }                                                       // LIBRARIES DIRECTORY
if(! defined( 'DIRLIBS' )){ define( 'DIRLIBS', 'system/libs/' ); }                                       // LIBRARIES DIRECTORY

if(! defined( 'PUBKEY' )){ define( 'PUBKEY', '' ); }                // GOOGLE RECAPTCHA SECRET CODES
if(! defined( 'SECKEY' )){ define( 'SECKEY', '' ); }                // GOOGLE RECAPTCHA SECRET CODES

// main functions files
if(! defined( 'PUBPHP' )){ define( 'PUBPHP', 'helpers/php/' ); }                                             // HELPER PHP CLASSES AND FUNCTIONS
if(! defined( 'PUBJS' )){ define( 'PUBJS', 'system/helpers/js/op.js' ); }                                           // HELPER JAVASCRIPT CLASSES AND FUNCTIONS

// include all class, functions folderes files
@include_once UPATH . LIBS . 'php/Session.class.php';
@include_once UPATH . LIBS . 'php/tokenizer.php';
include_once UPATH . LIBS . 'php/JWT.php';
include_once UPATH . LIBS . 'php/RemoteAddress.php';
include_once UPATH . LIBS . 'php/Input.php';
include_once UPATH . LIBS . 'php/passhash.php';
include_once UPATH . LIBS . 'php/Cookie.php';
include_once UPATH . LIBS . 'php/mailer/autoload.php';
include_once UPATH . LIBS . 'php/backup.php';

// include main files
include_once UPATH . PUBPHP . 'functions.php';

// include private classes
include UPATH . CLSDIR . 'languages.php';
include UPATH . CLSDIR . 'loginAttempts.php';
include UPATH . CLSDIR . 'site.php';
include UPATH . CLSDIR . 'users.php';
include UPATH . CLSDIR . 'units.php';
include UPATH . CLSDIR . 'categories.php';

?>
