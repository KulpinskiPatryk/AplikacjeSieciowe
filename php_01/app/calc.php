<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$op = $_REQUEST ['op'];


if ( ! (isset($x) && isset($y) && isset($op))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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


if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Wartość Kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Czas trwania nie jest liczbą całkowitą';
	}

	if (! is_numeric( $op )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}		

}


if (empty ( $messages )) {
	
	$x = intval($x);
	$y = intval($y);
	$op = doubleval($op);
	
	$result = (($x + (($x * $op)/100)) / ($y*12));

	$result = number_format($result,2,',',' ');

}

include 'calc_view.php';