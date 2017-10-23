<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> The Login View </h1>
   <?php //echo $numbers ?>
  </div>
</div>
<form id="registration_form" action="http://corsair.cs.iupui.edu:21851/ex4/MVC-Pro/login/do_login" method="post">
<fieldset>
<legend>Login</legend>
<label for = "username"><?php echo "Username:";?></label>
<input type="text" class="txt" id="email" name="email" value="" maxlength="50" required="email" />
<br />

<label for = "password"><?php echo "Password:";?></label>
<input type="text" class="txt" id="password" name="password" value="" maxlength="50" required="password" />
<br />
<button id="submit" action= "do_login "type="submit" class="btn btn-primary" >Log In</button>
</fieldset>
</form>   
<?php include('elements/footer.php');?>

