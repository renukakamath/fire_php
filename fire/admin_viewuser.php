<?php include 'adminheader.php' ?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
<center>
	<h1>view user</h1>
<form>
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
		</tr>
		<?php 

       $q="select * from user";
       $res=select($q);
       $sino=1;
       foreach ($res as $row) {
       	?>
       	<tr>
       		<td><?php echo $sino++; ?></td>
       		<td><?php echo $row['firstname'] ?></td>
       		<td><?php echo $row['lastname'] ?></td>
       		<td><?php echo $row['place'] ?></td>
       		<td><?php echo $row['phone'] ?></td>
       		<td><?php echo $row['email'] ?></td>
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