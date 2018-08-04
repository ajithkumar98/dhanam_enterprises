
<h2><?= $title; ?></h2>
<div class="container">
<?php echo validation_errors(); ?></div>
<div class="container">
<?php echo form_open('users/register') ?>

<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form_control">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" name="email" class="form_control"></div>
<div class="form-group">
	<label>Password</label>
   <input type="text" name="password" class="form_control"></div>
<div class="form-group">	<label>Confirm Password</label>
	<input type="text" name="password2" class="form_control">
	
</div>
<input type="submit" name="submit" value="submit">
<button type="submit">Submit</button>

<?php echo form_close(); ?>
</div>