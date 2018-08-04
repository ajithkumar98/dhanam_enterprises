<div class="container enquire" >
<div class="container">
	<?php echo validation_errors(); ?>
</div>
<h2 class="enquire">Add A New Product</h2><br>
	<?php echo form_open('services/new_broadband'); ?>

<label class="lab">Brand : </label>
<select name="brand" class="inputf" required>
	<option>Select A Brand</option>
	<option>airtel-broadband</option>
	<option>hathway</option>
</select><br><br>

<label class="lab">Name : </label> <input type="text" name="name" class="inputf" placeholder="Enter the name of the product" required><br><br>

<label class="lab">Calls : </label>
<select name="calls" class="inputf" required>
	<option>Select A Type</option>
	<option>UNLIMITED</option>
	<option>NA</option>
</select><br><br>

<label class="lab">Time : </label> <input type="text" name="time" class="inputf" placeholder="Enter the number of months/year" required><br><br>

<label class="lab">Period : </label>
<select name="period" class="inputf" required>
	<option>Select A Period</option>
	<option>month</option>
	<option>year</option>
</select><br><br>

<label class="lab">Speed : </label> <input type="number" name="speed" class="inputf" placeholder="Enter the speed of the product in Mbps" required><br><br>
<label class="lab">Price : </label> <input type="number" name="price" class="inputf" placeholder="Enter the Price of the product" required><br><br>
<label class="lab">Data : </label> <input type="number" name="data" class="inputf" placeholder="Enter the Data cap per month" required><br><br>
<label class="lab">Bonus : </label> <input type="text" name="bonus" class="inputf" placeholder="Enter the Bonus Data per month" required><br><br>
<label class="lab">Roll-over : </label>
<select name="rollover" class="inputf" required>
	<option>Select A Option</option>
	<option>YES</option>
	<option>NA</option>
</select><br><br>

<input type="submit" name="submit" class="btn" style="background-color: #42f445 !important;color: black !important" value="Create New Product">
	</form>
</div>