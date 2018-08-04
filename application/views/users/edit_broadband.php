

<div class="container" style="background-color: white;padding: 20px">
<div><h2>Broadband Services</h2></div>
<div class="row">



<?php foreach ($items as $key) {?>


<div class="col-md-5 edit">
<div class="lab"><?php echo $key['name']; ?></div><br>
Speed : <?php echo $key['speed']; ?> Mbps<br>
INR : <?php echo $key['price']; ?><br>
Data : <?php echo $key['data']; ?> GB<br>
<br>
<a href="<?php echo base_url(); ?>services/edit_product_broadband/<?php echo $key['id']; ?>"><button class="btn" style="background-color: #42f445 !important;color: black !important"> Edit </button></a><br><br> 

<?php echo form_open('services/delete_product_broadband') ?>
<input type="hidden" name="id" value="<?php echo $key['id']; ?>"	>
<input class="btn" type="submit" name="submit" value="Delete">
</form>
</div>

<?php } ?>
</div></div>