<?php 
foreach ($details as $details) {
 ?>

<body style="background-color: white !important">
<div class="container" style="width: 100% !important;margin-top: 30px">	
<div class="row">	

<div class="col-md-4 detail-pic" style="background-image:url(' <?php 	echo base_url(); ?>assets/pics/<?php echo $details['brand']; ?>.png' );height: 300px;width: 200px;background-size: contain;background-repeat: no-repeat;" ></div>


<div class="col-md-8" style="padding-left: 20px">
<div style="padding-left: 20px">		
<h1 id="detail-head" style="  text-decoration-line: underline;
    text-decoration-style: solid;"><?php echo $details['name']; ?></h1>
<div class="lab"><?php echo ucfirst($details['brand']); ?></div>


<div class="lab">Price : <span style="color: red">	INR <?php echo $details['price'];	 ?></span></div><br>
<div class="lab">Broadband Data : <?php echo $details['data']; ?> GB</div>
<div class="lab">Speed : <?php echo $details['speed']; ?> Mbps</div>
<div class="lab">Bonus Data : <?php echo $details['bonus']; ?> GB</div>
<div class="lab">STD Calls : <?php echo $details['calls']; ?></div>	
<div class="lab">Data-Carry-Over : <?php echo $details['carry-over']; ?></div>	
<div class="lab"><?php echo $details['time']; ?>	<?php 	echo ucfirst($details['period']); ?></div><br>
<div style="box-shadow: 0 0 0 2px lightgrey;padding: 20px">
<div class="lab">Intrested? Enter your details and we'll contact you in minutes</div><br>
<?php   echo form_open('services') ; ?>
      <label class="lab">Name:</label><br>
        <input class="input" type="text" name="name" placeholder="Enter your name" style="width: 60%"><br><br>
      <label class="lab">Number:</label><br>
        <input  class="input" type="number" name="number" placeholder="Enter your phone number" style="width: 60%"><br><br>
        <input class="btn btn-primary" type="submit" name="submit" value="ENQUIRE NOW">
      </form> 
      </div>

</div>
</div>


<div class="col-md-12 enquire" style="margin-top: 15px">	
<h4 style="  text-decoration-line: underline;
    text-decoration-style: double;">Why Choose Us?</h4><br>

<div class="row lab" style="text-align: center;color: red">	
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Free-Installation<br><br>
<img src="<?php echo base_url(); ?>assets/pics/free-install.png" style="width: 100%">	

</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Delivery in 24 Hours<br><br>
<img src="<?php echo base_url(); ?>assets/pics/free-delivery.png"  style="width: 100%">

</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">1 year Warrenty<br><br>
<img src="<?php echo base_url(); ?>assets/pics/warranty.png" style="width:100%">
</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Safe Transaction<br><br>
<img src="<?php echo base_url(); ?>assets/pics/safe-transaction.png" style="width:100%">

</div>
</div>
</div>

</div>
</div><br><br>

<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">Hot Deals Of The Day</div><br><br>

<?php foreach ($service as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
        <img src="<?php echo base_url(); ?>assets/pics/<?php 	echo $key['brand']; ?>.png" style="width: 100%;height: 100%"><br>	
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
   <br> INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['time'];  ?><?php   echo $key['period']; ?> Validity</div><br><br>
    <a href="<?php echo base_url();?>services/broadband_info/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>



 <?php } ?>