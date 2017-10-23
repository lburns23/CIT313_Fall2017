
<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Register</h1>
   
<form id="registration_form" action="http://corsair.cs.iupui.edu:21851/ex4/MVC-Pro/register/add" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for = "first_name"><?php echo "First Name:";?></label>
<input type="text" class="txt" id="first_name" name="first_name" value="" maxlength="20" required="first_name" />
<br />

<label for = "last_name"><?php echo "Last Name:";?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="" maxlength="20" required="last_name" />
<br />

<label for = "email"><?php echo "Email:";?></label>
<input type="text" class="txt" id="email" name="email" value="" maxlength="50" required="email" />
<br />

<label for = "password"><?php echo "Password:";?></label>
<input type="text" class="txt" id="password" name="password" value="" maxlength="20" required="password" />
<br />

</div>
<input type="hidden" name="uID" value=""/>
 
<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>


	


