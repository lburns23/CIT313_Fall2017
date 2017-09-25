<?php
function getLoaded($class) {
	include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('getLoaded');	

$math = admin::mathTime(5,3);
echo "Before You Fill Out This Form, Let's Do Some Math!: $math"; 

include_once("registrationPage.html");

?>
