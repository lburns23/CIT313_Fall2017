<!DOCTYPE html>
<html>
<body>

<?php include 'header.php';?>
<h1><?php echo "$myName" ;?> </h1>
<ul><?php  function my_function () {$x=1 
while($x => 1) {echo $myArray}; $x++ ;} my_function();?></ul>
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