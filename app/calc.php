<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$op = $_REQUEST ['op'];


if ( ! (isset($x) && isset($y) && isset($op))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
}
if ( $op == "") {
	$messages [] = 'Nie podano Oprocentowania';
}


if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

	if (! is_numeric( $op )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}		

}


if (empty ( $messages )) {
	
	$x = intval($x);
	$y = intval($y);
	$op = doubleval($op);
	
	//switch ($op) {
	//	case '12' :
	$result = ($x / ($y*12)) + ($op * 0.01);

	$result = number_format($result,2,',',' ');
	//$result = number_format($result, 2,',',' ')
	//		break;
	//	case 'times' :
	//		$result = $x * $y;
	//		break;
	//	case 'div' :
	//		$result = $x / $y;
	//		break;
	//	default :
	//		$result = $x + $y;
	//		break;
	//}
}

include 'calc_view.php';