<div class="container enquire">	
<h1>User Requests</h1><br><br>
<table width="100%" border="1">
<tr>
	<th>S.no</th>
	<th>Name</th>
	<th>Contact Number</th>
	<th>Date</th>
</tr>
<?php 	foreach ($requests as $key) {?>
<tr>
	<td><?php 	echo $key['id']; ?></td>
	<td><?php 	echo $key['name']; ?></td>
	<td><?php 	echo $key['number']; ?></td>
	<td><?php 	echo $key['created_on']; ?></td>

</tr>


<?php 	} ?>
</table>
</div>