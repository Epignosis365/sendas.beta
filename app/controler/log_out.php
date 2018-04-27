<?php ob_start();
	session_start();
	error_reporting(E_ALL);
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));

	session_start();
	setcookie(session_name(), '', 100);
	session_unset();
	session_destroy();
	$_SESSION = array();

	// Destroy all cookies.
	foreach ( $_COOKIE as $key => $value ){
	    if($key != 'PHPSESSID'){
	        setcookie( $key, "", time()-1800, '/' );
	    }
	}
	header("location: ../../index.php");
	/*
	echo 'cookie : ' . $_COOKIE['usr_accs'];
	echo '<br />cookie : ' . $_COOKIE['uts_accs'];
	*/
?>