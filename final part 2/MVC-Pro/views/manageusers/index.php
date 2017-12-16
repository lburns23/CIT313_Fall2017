<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>

    <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
    <?php }?>

    <div class="container">
    <?php
    foreach($users as $u){ ?>
	    <div class="container">
		<h3><?php echo $u['first_name'];?>
		<?php echo $u['last_name'];?><br/></h3>
		<h4><?php echo $u['email'];?><br/></h4>
		<p><strong>Type: </strong><b>
 		<?php if ($u['user_type'] == '1') {
            echo 'Admin';
        } else {
            echo 'User';
        }?></b></p><div class="container">
		  <?php if ($u['active'] != '1') { ?><a class="btn btn-success" href="<?php echo BASE_URL;?>manageusers/approve/<?php echo $u['uID'];?>">Approve</a>
		  <?php }?>
		  <?php if ($u['user_type'] == '2') { ?>
             <a class="btn btn-danger" href="<?php echo BASE_URL;?>manageusers/delete/<?php echo $u['uID']?>">Delete</a><br/>
            <?php }?>
			<?php echo $result?>
			<hr>
		</div>	
		</div>
		</div>
        <br>
    <?php }
    ?>
	
    
    </div>

</div>
<?php include('views/elements/footer.php');?>
