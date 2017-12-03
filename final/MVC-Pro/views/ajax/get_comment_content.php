<?php
foreach($response as $c) {
?>
    <div class="container">
	
		
        <b><?php echo $c['commentText']; ?></b>
		<ul>
        <li><?php echo date_format(date_create($c['date']), 'j M Y');?></li>
	
        <li><?php echo $c['first_name'] . " " . $c['last_name'];?></li><br/>
		</ul>
		  <?php if($u->isAdmin()) { ?>
		
            <a href="<?php echo BASE_URL;?>comment/remove/<?php echo $c['commentID']; ?>" alt="Delete comment" class="btn delete-loader">
			<button type="submit" id="submit" class="btn btn-primary">Delete</button></a>
       <hr>
	   <?php } ?>
   </div>
<?php
}
?>