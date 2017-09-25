<?php
function getLoaded($class) {
	include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('getLoaded');	

$object = new registeredUser('newuser','regular');
$object->setInfo($_POST['submit']);
$object->getInfo($_POST['submit']);

if($object instanceof registeredUser){
$fname = $_POST['fname'];	
$lname = $_POST['lname'];	
$email = $_POST['email'];	

echo "The registered user's first name is: " .$fname. "<br />"; 
echo "The registered user's last name is: " .$lname. "<br />"; 
echo "The registered user's email address is: " .$email. "<br />";

echo "<hr/>";
echo "Processing Complete";
}
else {
	echo "This is not of the registeredUser class type.";
}


?>