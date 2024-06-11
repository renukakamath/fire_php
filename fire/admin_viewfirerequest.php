<?php include 'adminheader.php' ?>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
<center>
	<h1>view firerequest</h1>
<form>
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>sino</th>
			<th>owner</th>
			<th>description</th>
			<th>date</th>
			<th>time</th>
			<th>status</th>
		</tr>
		<?php 

     $q="select * from request inner join building using(building_id)";
     $res=select($q);
     $sino=1;
     foreach ($res as $row) {
     	?>
     	<tr>
     		<td><?php echo $sino++; ?></td>
     		<td><?php echo $row['owner'] ?></td>
     		<td><?php echo $row['description'] ?></td>
     		<td><?php echo $row['date'] ?></td>
     		<td><?php echo $row['time'] ?></td>
            <td><?php echo $row['status'] ?></td>
           <?php 

          if ($row['status']=="accept") {?>
             <td><a class="btn btn-success" href="admin_viewbuildings.php?bid=<?php echo $row['building_id'] ?>">view building</a></td>
            <td><a class="btn btn-success" href="admin_viewposition.php?rid=<?php echo $row['request_id'] ?>">view position</a></td>
          <?php

        

            ?>


     		
     		
     	</tr>
     <?php
 }

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