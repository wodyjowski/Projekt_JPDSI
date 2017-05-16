<?php
require_once dirname(__FILE__).'/Config.class.php';
$conf = new Config();
require_once dirname(__FILE__).'/config.php'; //set configuration

function getConf(){ global $conf; return $conf; }

//Load Messages class and create object
require_once getConf()->root_path.'/lib/Messages.class.php';
$msgs = new Messages();

function getMessages(){	global $msgs; return $msgs; }

//Prepare for Smarty, create once - only when needed
$smarty = null;	
function getSmarty(){
	global $smarty;
	if (!isset($smarty)){ //Create smarty and assign configuration and messages
		include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
	}
	return $smarty;
}

//Prepare for Database, load Medoo library and create connection once - only when needed
$db = null;
function getDB(){
	global $conf,$db;
	if (!isset($db)){
		include_once $conf->root_path.'/lib/medoo/medoo.php';

		$db = new medoo([
			'database_type' => &$conf->db_type,
			'server' => &$conf->db_server,
			'database_name' => &$conf->db_name,
			'username' => &$conf->db_user,
			'password' => &$conf->db_pass,
			'charset' => &$conf->db_charset,
			'port' => &$conf->db_port, 
			'prefix' => &$conf->db_prefix,
			'option' => &$conf->db_option
		]);
	}
	return $db;
}

//Load helper functions
require_once getConf()->root_path.'/lib/helper_functions.php';
//Get action to perform from request
$action = getFromRequest(getConf()->action_param);
?>