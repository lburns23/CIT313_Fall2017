<form id="commentform" action="<?php echo BASE_URL;?>comment/add" method="post">
<div class="container">
<br/>
    <textarea name="comment" form="commentform" placeholder="Comment..."></textarea><br>
        
	<input name="date" id="date" type="hidden" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">

    <input type="hidden" name="postID" value="<?php echo $pID?>"/>
                
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</div>
</form>