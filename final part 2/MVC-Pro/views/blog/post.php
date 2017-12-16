<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}?>

    <div class="container">
        <div class="page-header">
  <?php if($u->isAdmin()) { ?>
		
            <div class="container">
      
            <a class="btn btn-danger" href="<?php echo BASE_URL?>manageposts/confirm_delete/<?php echo $pID; ?>">Delete Post</a>
            </div> 
	   <?php } ?>
	   
            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'blog/category/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


    </div>
  <?php
        if($u->isRegistered()) {
        
			include('views/elements/comment_form.php');?>
			
		<?php
        } 
		else {
        ?>
		<div class="container">
		<br/>
            <p>You must <a href="<?php echo BASE_URL;?>login/">log in</a> to post a comment.</p>
		</div>
		 <br/>
        <?php
        }
        ?>    
		
  <div class="container">
        <a href="<?php echo BASE_URL?>ajax/get_comment_content/?postID=<?php echo $pID;?>" class="btn comment-loader">Load Comments</a>
           
  </div>

<?php include('views/elements/footer.php');?>