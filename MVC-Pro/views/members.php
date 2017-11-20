<?php include('elements/header.php');?>
<?php 
if( is_array($user) ) {
	extract($user);?>

<div class="container">
	<div class="page-header">
<h1><?php echo $user['first_name'].' '.$user['last_name'];?></h1>
  </div>
<?php echo $user['email'];?>

</div>
<?php }?>
<?php 
if( is_array($users) ) {?>


<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'].' '.$u['last_name'];?>"><?php echo $u['first_name'].' '.$u['last_name'];?></a></h3>
	<?php echo $u['email'];?>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>