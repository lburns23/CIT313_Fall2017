<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>NYT Technology</h1>
	</div>
<center><?php echo "<img src='views/home/gears.jpg'>";?><br/><br/>

<p><b>This is the blog about the technology of the future. Anything and everything you want to now about the new and upcoming technology can be found here!
We are no longer in the stoneage, we have come into the age of technology! As you browse through this blog, feel free to create an account, leave a comment, and check 
the weather in any part of the world with a zip code!</b></p></center><br/><br/></div>
<div class="sidebar">
	
	<h1>Weather</h1>
	<form method="post" action="<?php echo BASE_URL?>weather/getresults"
		
		<label for "zip">Enter Your Zip Code</label>
		<input type="text" name="zip" id="zip" required="zip" />
		<br/>
		<button type="submit" class="btn btn-primary">Load Results</button>
		
	</form>
</div>
<div class="maincont"><h3><b>These are the newest blog posts from NYT Technology:</b></h3><hr>
   <?php
    echo $feed_data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
