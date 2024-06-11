<?php include 'officerheader.php' ?>
 <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
<center>
	<h1>view position</h1>
<form>
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>sino</th>
			<th>officer</th>
			<th>place</th>
			<th>number</th>
	         <th>request</th>
	         <th>date</th>
	         <th>time</th>
			<th>details</th>
		</tr>
		<?php 
  $q="select * from position inner join officers using (officer_id) inner join request using (request_id)";
  $res=select($q);
  $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['firstname'] ?></td>
  		<td><?php echo $row['place'] ?></td>
  		<td><?php echo $row['phone'] ?></td>
         <td><?php echo $row['description'] ?></td>
         <td><?php echo $row['date'] ?></td>
         <td><?php echo $row['time'] ?></td>
  		<td><?php echo $row['details'] ?></td>
  	</tr>
  <?php
}

		 ?>
	</table>
</form>
</center>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

<?php include 'footer.php' ?>