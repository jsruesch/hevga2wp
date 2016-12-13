<?
 	// **** [ GLOBAL VARS ] ****
 	include(dirname(__FILE__)."/shell_vars.php");

 	// **** [ PUBLIC OBJECTS ]

	$db_host		= "localhost";
	$db_username	= "glsadmin";
	$db_password 	= "glsbl0g!";

 	global $o_db;		include(dirname(__FILE__)."/class_db.php"); 			$o_db = new db($db_host, $db_username, $db_password);
 	global $o_gui; 		include(dirname(__FILE__)."/class_gui.php"); 				$o_gui = new gui($_SERVER["HTTP_USER_AGENT"]);
 	//global $o_mail; 	include(dirname(__FILE__)."/class.phpmailer.php"); 	$o_mail = new PHPMailer();
?>