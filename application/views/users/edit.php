

<div class="container" style="background-color: white;padding: 20px">
<div><h2>Airtel DTH Services</h2></div>
<div class="row">



<?php foreach ($items as $key) {?>


<div class="col-md-5 edit">
<div class="lab"><?php echo $key['name']; ?></div><br>
MRP : <?php echo $key['mrp']; ?><br>
INR : <?php echo $key['price']; ?><br>
Discount : <?php echo $key['discount']; ?>%<br>
<br>
<a href="<?php echo base_url(); ?>services/edit_product/<?php echo $key['id']; ?>"><button class="btn" style="background-color: #42f445 !important;color: black !important"> Edit </button></a><br><br> 

<?php echo form_open('services/delete_product') ?>
<input type="hidden" name="id" value="<?php echo $key['id']; ?>"	>
<input class="btn" type="submit" name="submit" value="Delete">
</form>
</div>

<?php } ?>
</div></div>