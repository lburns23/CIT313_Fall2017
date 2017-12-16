
<?php
include('views/elements/header.php');?>

<?php 
if( is_array($user) ) {
	extract($user);}?>

<div class="container">
	<div class="page-header">
<h1>Member <?php echo $user['uID'];?></h1>
        <p>Name: <?php echo $user['first_name']. " " . $user['last_name'];?></p>
        <p>Email: <?php echo $user['email'];?></p>
  </div>
  <br/>
<?php if ($u->uID == $user['uID']) { ?>
  
      <a href="<?php echo BASE_URL;?>members/profile" class="btn btn-primary">Edit Profile</a>
  
<?php } ?>


</div>

<?php include('views/elements/footer.php');?>