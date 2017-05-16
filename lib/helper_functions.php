<?php
function getFromRequest($param_name){
	return isset($_REQUEST [$param_name]) ? $_REQUEST [$param_name] : null;
}

function forwardTo($page){
	global $action;
	$action = $page;
	include getConf()->root_path.getConf()->action_script;
	exit;
}

function redirectTo($page){
	header("Location: ".getConf()->action_url.$page);
	exit;
}

function validateDate($date, $format)
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

?>