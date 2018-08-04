<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">TATA Sky DTH Services</div><br><br>

<?php foreach ($info as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
        <img src="<?php echo base_url(); ?>assets/pics/<?php 	echo $key['thumb']; ?>.jpg" style="width: 100%;height: 100%"><br>
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
    <span class="lab"> <strike><span style="color: red">INR : <?php  echo $key['mrp']; ?></span></strike> <br><span style="color: green">
Discount : <?php echo $key['discount'];	?>%</span>
   <br> INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['subscription'];  ?><?php   echo $key['period']; ?> Free Subscription</div><br><br>
    <a href="<?php echo base_url();?>services/test/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>