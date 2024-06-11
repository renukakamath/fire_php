<?php include 'officerheader.php' ;
 $oid=$_SESSION['officer_id'];
 extract($_GET);
if (isset($_POST['position'])) {
	extract($_POST);

	$q="insert into position values(null,'$oid','$req','$det')";
	insert($q);

	alert('successfully');
	return redirect('officer_addposition.php');
}



?>
 <style type="text/css">
	input[type="select"],[type="text"]
	{
		background-color: white;
	}
</style>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        	<center>
<h1>add position</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>request</th>
				<td>
					<select name="req" class="form-control">
						<option>select</option>
						<?php 
           $q="select * from request inner join  building using (building_id)";
           $res=select($q);

           foreach ($res as $row) {
           	?>
           <option value="<?php echo $row['request_id'] ?>"><?php echo $row['owner'] ?></option>


           <?php
       }

						 ?>
					</select>
				</td>
		</tr>
		<tr>
			<th>details</th>
			<td><input type="text" required="" class="form-control" name="det"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="position" value="submit" class="btn btn-success"></td>
		</tr>
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