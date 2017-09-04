<!DOCTYPE html>
<html>
<body>

<?php include 'header.php';?>
<h1><?php echo "$myName" ;?> </h1>
<ul></ul>
<?php include 'footer.php';?>
<?php
$myArray = array ('myName'  => 'Laura Burns',
    'favColor' => 'Pink',
    'favMovie' => 'Inception',
    'favBook' => 'Fiddler on the Roof',
    'favWebsite' => 'Reddit');
$myName = $myArray['myName'];
?>
</body>
</html>