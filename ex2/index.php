<?php
	include_once("classes/user.class.php");
	include_once("classes/admin.class.php");
	include_once("classes/registeredUser.class.php");
	
	$registeredUser = new registeredUser('Regular User', 'bbob2');
	$admin = new admin('Administrator', 'burns23');
	
	echo "User Level: ".$registeredUser->userLevel."<br/>";
	echo "Registered User ID: ".$registeredUser->userName."<br/>";
	echo "Registered User Type: ".$registeredUser->userType."<br/>";
	
    $registeredUser->setInfo('Billy');
	$fName = $registeredUser->getInfo();
	echo "Registered First Name: " .$fName. "<br/>";
	
	$registeredUser->setInfo('Bob');
	$lName = $registeredUser->getInfo();
	echo "Registered Last Name: " .$lName. "<br/>";
	
	$registeredUser->setInfo('billy.bob@gmail.com');
	$emailAd = $registeredUser->getInfo();
	echo "Registered Email: " .$emailAd. "<br/>";
	
	//This adds the line to separate the two accounts.
	echo "<th colspan=\"8\"><hr width=\"100%\"></th>";
	
	echo "User Level: ".$admin->userLevel."<br/>";
	echo "Admin User ID: ".$admin->userName."<br/>";
	echo "Admin User Type: ".$admin->userType."<br/>";
	
	$admin->setInfo('Laura');
	$fName = $admin->getInfo();
	echo "Admin First Name: " .$fName. "<br/>";
	
	$admin->setInfo('Burns');
	$lName = $admin->getInfo();
	echo "Admin Last Name: " .$lName. "<br/>";
	
	$admin->setInfo('leburns1997@gmail.com');
	$emailAd = $admin->getInfo();
	echo "Admin Email: " .$emailAd. "<br/>";
?>




