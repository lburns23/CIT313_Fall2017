<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>The Latest from <?php echo $rss_title;?></h1>
  </div>
    <?php
    echo $feed_data;
    ?>
  </div>
<?php include('views/elements/footer.php');?>
