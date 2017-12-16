<?php include('views/elements/header.php');?>

    <div class="container">
            <h1>Delete User</h1>
            
         <strong><p>Are you sure you want to delete this user?</strong><br/><?php echo $user['first_name']. " " .$user['last_name'];?></p>
 
        <div class="container">
   
            <a class="btn btn-danger" href="<?php echo BASE_URL?>manageusers/confirm_delete/<?php echo $user['uID'];?>">Delete User</a>
			<a class="btn" href="<?php echo BASE_URL?>manageusers/">Cancel</a>
        </div>
    </div>


<?php include('views/elements/footer.php');?>