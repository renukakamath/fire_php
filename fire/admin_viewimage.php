<?php include 'adminheader.php';
extract($_GET);


 ?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
<center>
<h1>view image</h1>
<form>
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>sino</th>
			
			<th>image</th>
		</tr>
		<?php 
  $q="select * from image where building_id='$bid'";
  $res=select($q);
  $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  	
  		<td><img src="<?php echo $row['image'] ?>"width="100" heigth="100"></td>
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