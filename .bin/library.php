<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

if(!defined("DS") ) define ('DS', DIRECTORY_SEPARATOR);

define('SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . DS);
define('OLDSITEURL', 'http://newbookclub.ua/');
define('SITEROOT' , str_replace(DS . '.bin', '', __DIR__ . DS));

$abspth = SITEROOT;

define('ABSPTHNOS', $abspth);
define('SITEURLNOS', 'http://' . $_SERVER['HTTP_HOST']);
	
require_once(SITEROOT . '.bin' . DS . 'com' . DS . 'cnstnt.inc.php');
require_once(SITEROOT . '.bin' . DS . 'com' . DS . 'in.inc.php');
require_once(SITEROOT . '.bin' . DS . 'com' . DS . 'functions.inc.php');
require_once(SITEROOT . '.bin' . DS . 'com' . DS . 'au.inc.php');
$LINKDB = Registry::extract('db');
