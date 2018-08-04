<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">Airtel Broadband Services</div><br><br>

<?php foreach ($details as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
        <img src="<?php echo base_url(); ?>assets/pics/<?php 	echo $key['brand']; ?>.png" style="width: 100%;height: 80%"><br>
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
<span class="lab"><?php echo $key['data']; ?> GB</span><br>
<span class="lab" style="color: red"><?php echo $key['speed']; ?> Mbps</span><br>
  <span class="lab">INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['time'];  ?> <?php   echo ucfirst($key['period']); ?></div>
<div class="lab"><?php echo $key['data']; ?> GB</div>
    <br><br>
    <a href="<?php echo base_url();?>services/broadband_info/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>