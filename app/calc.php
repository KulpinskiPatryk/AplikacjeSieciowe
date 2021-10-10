<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$op){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}

function validate(&$x,&$y,&$op,&$messages){
	if ( ! (isset($x) && isset($y) && isset($op))) {
		return false;
	}

	if ( $x == "") {
		$messages [] = 'Nie podano Kwoty Kredytu';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano Czasu trwania';
	}
	if ( $op == "") {
		$messages [] = 'Nie podano Oprocentowania';
	}
	
	

	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $x )) {
		$messages [] = 'Wartość Kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Czas trwania nie jest liczbą całkowitą';
	}

	if (! is_numeric( $op )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}			
	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$op,&$messages,&$result){
	global $role;
	
	$x = intval($x);
	$y = intval($y);
	$op = doubleval($op);
	
	$result = (($x + (($x * $op) / 100)) / ($y*12));

	$result = number_format($result,2,',',' ');
}


$x = null;
$y = null;
$op = null;
$result = null;
$messages = array();


getParams($x,$y,$op);
if ( validate($x,$y,$op,$messages) ) { 
	process($x,$y,$op,$messages,$result);
}


include 'calc_view.php';