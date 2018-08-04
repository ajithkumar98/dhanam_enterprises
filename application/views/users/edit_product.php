<div class="container enquire" >
<div class="container">
	<?php echo validation_errors(); ?>
</div>
<h2 class="enquire">Edit Product</h2><br>
	<?php echo form_open('services/edit_product'); ?>
<input type="hidden" name="id" value="<?php 	echo $items['id']; ?>"	>
<label class="lab">Brand : </label>
<select name="brand" class="inputf" required>
	<option><?php echo $items['brand']; ?></option>
	<option>airtel</option>
	<option>tatasky</option>
</select><br><br>

<label class="lab">Name : </label> <input type="text" name="name" class="inputf" placeholder="Enter the name of the product" value="<?php echo $items['name']; ?>" required><br><br>

<label class="lab">Type : </label>
<select name="type" class="inputf" required>
	<option><?php echo $items['type_of_connection']; ?></option>
	<option>SD</option>
	<option>HD</option>
	<option>HD PLUS</option>
</select><br><br>

<label class="lab">Subscription : </label> <input type="text" name="subscription" class="inputf" placeholder="Enter the number of months/year" value="<?php echo $items['subscription']; ?>" required><br><br>

<label class="lab">Period : </label>
<select name="period" class="inputf" required>
	<option><?php echo $items['period']; ?></option>
	<option>month</option>
	<option>year</option>
</select><br><br>

<label class="lab">MRP : </label> <input type="number" name="mrp" class="inputf" placeholder="Enter the MRP of the product" value="<?php echo $items['mrp']; ?>" required><br><br>
<label class="lab">Price : </label> <input type="number" name="price" class="inputf" value="<?php echo $items['price']; ?>" placeholder="Enter the Price of the product" required><br><br>
<label class="lab">Discount : </label> <input type="number" name="discount" class="inputf" value="<?php echo $items['discount']; ?>" placeholder="Enter the discount % of the product" required><br><br>
<label class="lab">Pic : </label>
<select name="pic" class="inputf" required>
	<option><?php echo $items['thumb']; ?></option>
	<option>airteldth</option>
	<option>tataskydth</option>
</select><br><br>

<input type="submit" name="submit" class="btn" style="background-color: #42f445 !important;color: black !important" value="Edit Product">
	</form>
</div>