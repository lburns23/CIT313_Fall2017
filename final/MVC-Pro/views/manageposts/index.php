<?php include('views/elements/header.php');?>

<div class="container">
  
    <h1><?php echo $title;?>    
	<br/>
	<a href="<?php echo BASE_URL;?>managecategories" class="btn btn-primary">Add Categories</a>
    <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add Post</a>
	  <br/><hr></h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  
  <div class="container">
      <?php foreach($posts as $p){?>
            <h3>
 
               
              <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a><br/>
            </h3>
            <sub><?php echo 'Posted on ' . date_format(date_create($p['date']), 'j M Y') . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
           <br/>	
	   <div style="margin-top:15px;"><a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn post-loader">View entire post</a></div>
       <br/><a href="<?php echo BASE_URL;?>manageposts/edit/<?php echo $p['pID'] ?>" class="btn btn-primary">Modify Post</a>
                <a href="<?php echo BASE_URL;?>manageposts/remove/<?php echo $p['pID'] ?>" class="btn btn-primary">Delete Post</a><br/><br/><hr>
	  <?php }?>
      
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>