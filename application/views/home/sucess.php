<div class="container enquire">	

<div class="row">	

<div class="col-md-12" style="border:3px solid green;background-color: lightgreen;padding: 20px;border-radius: 20px">	
You will be served by our person in moments. Thank You.
</div>


<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">Hot Deals Of The Day</div><br><br>

<?php foreach ($service as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
    <img src="<?php echo "assets/pics/".$key['thumb'].".jpg"; ?>" style="width: 100%;height: 100%"><br>
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
    <span class="lab"> <strike><span style="color: red">INR : <?php  echo $key['mrp']; ?></span></strike> <br>INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['subscription'];  ?><?php   echo $key['period']; ?> Free Subscription</div><br><br>
    <a href="<?php echo base_url();?>services/test/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>



</div>	

</div>