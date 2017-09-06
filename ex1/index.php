<?php require('includes/header.php');
function fav_switch($data)
{
$retVal= "<ul>";
foreach ($data as $key => $item) {
	switch($key) {
		case 'favColor':
		$retVal .= "<li>My favorite color is $item.</li>";
		break;
		
		case 'favMovie':
		$retVal .= "<li>My favorite movie is $item.</li>";
		break;
		
		case 'favBook':
		$retVal .= "<li>My favorite book is $item.</li>";
		break; 
		
		case 'favWebsite':
		$retVal .= "<li>My favorite website is $item.</li>";
		break;
	}
}
$retVal .= "</ul>";
return $retVal;
}

function fav_if($data) {
	$retVal = "<ul>";
	foreach($data as $key => $item) {
		if($key != 'myName') {
			$retVal .= "<li>My favorite $key is $item</li>";
		}
	}
	$retVal .= "</ul>";
	return $retVal;
}

$myArray = array ('myName'  => 'Laura Burns',
    'favColor' => 'Pink',
    'favMovie' => 'Inception',
    'favBook' => 'Fiddler on the Roof',
    'favWebsite' => 'Reddit.com');
$myName = $myArray['myName'];
echo "<h1>$myName</h1>";

$myData = fav_switch($myArray);
echo $myData;
require('includes/footer.php');

?>
