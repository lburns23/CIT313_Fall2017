<?php
foreach($response as $c) {
?>
    <div class="container">

        <b><?php echo $c['commentText']; ?></b><br/>
		
       <sub> <?php echo 'Posted on ' . date_format(date_create($c['date']), 'j M Y') . ' by <a href="'.BASE_URL.'members/users/'. $c['uID']. '">' .
		$c['first_name'] . " " . $c['last_name'] . '</a>' ;?> </sub>
	
		  <?php if($u->isAdmin()) { ?>
		
           <br/><br/> <a href="<?php echo BASE_URL;?>comment/remove/<?php echo $c['commentID']; ?>" alt="Delete comment" class="btn delete-loader">
			<button type="submit" id="submit" class="btn">Delete</button></a>
       <hr>
	   <?php } ?>
   </div>
<?php
}
?>
