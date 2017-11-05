<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Hello From the View</h1>
  </div>
</div>
<div class="container">
    <div class="alert alert-success">
<?php
echo $_SESSION["user_message"]; 
$_SESSION["user_message"] = null;?>
</div>
</div>
<?php include('views/elements/footer.php');?>
