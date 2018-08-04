

<div class="container" style="background-color: white;padding: 20px;text-align: center;width: 50%">
<?php 	echo validation_errors(); ?>
<?php echo form_open('users/login'); ?>
<div class="row">
	<div class="col-md-12">
		<h1 class="text-center">Login</h1>
		<label class="lab">Email</label><br>
		<input class="input" type="email" name="email" placeholder="Email"><br><br>
		<label class="lab">Password</label><br>
		<input class="input" type="password" name="password" placeholder="Enter Paaword"><br><br>
		<input type="submit" name="submit" value="Log in" class="btn" style="background-color: #40c13c !important">
	</div>	
</div>
<?php echo form_close(); ?>
</div>

