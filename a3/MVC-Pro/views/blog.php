
<?php include('elements/header.php');?>
<?php 
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>
<div class='date'><?php echo date_format(date_create($post['date']), 'j M Y');?></div>
	<div class='author'><?php echo $post['category'].' | By '.$post['first_name'].' '.$post['last_name'];?></div>
</div>
<?php }?>

<?php if( is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

		<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	
	<p><?php echo $p['content'];?></p>
		<div class='date'><?php echo date_format(date_create($p['date']), 'j M Y');?></div>
		<div class='author'><?php echo $p['category'].' | By '.$p['first_name'].' '.$p['last_name'];?></div>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>