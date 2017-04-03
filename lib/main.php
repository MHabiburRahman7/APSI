<?php
error_reporting( E_ALL & ~E_NOTICE ); // reporting error but not the variable
date_default_timezone_set( 'Asia/Jakarta' ); // default timezone
$lib = ( $lib ) ?: 'lib/';
require_once( $lib . 'csc_pdo.php' );
$db = new csc_pdo( 'root', '', 'SiPaud' );

// Escape string to html entity
function eScape( $str ) {
	$r = htmlentities( stripslashes( $str ), ENT_QUOTES );
	return $r;
}

// Get a random string
function randstr( $opt, $str=null ) {
	$alpha = 'abcdefghijkmnopqrstuwxyzABCDEFGHJKLMNOPQRSTUWXYZ0123456789';
	$passw = 'abcdefghijkmnopqrstuwxyzABCDEFGHJKLMNOPQRSTUWXYZ0123456789!@#$%^&*()_+-=';
	$str = ( $str == 'passw' ) ? $passw : $alpha;
	for ( $i = 0; $i < $opt; $i++ ) {
		$n = rand( 0, strlen( $str ) - 1 );
		$r[$i] = $str[$n];
	}
	return implode( $r );
}