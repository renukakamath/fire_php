<?php include 'officerheader.php';

if (isset($_GET['aid'])) {
     extract($_GET);
     $q="update request set status='accept' where request_id='$aid'";
        update($q);
        alert('sucessfully');
        return redirect('officer_viewrequest.php');
}
if (isset($_GET['rid'])) {
   extract($_GET);
   $q="update request set status='reject' where request_id='$rid'";
   update($q);
   alert('sucessfully');
   return redirect('officer_viewrequest.php');
}

 ?>
  <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jfif);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
<center>
	<h1>view fire request</h1>
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
              if ($row['status']=="pending") {?>
                 <td><a class="btn btn-success" href="?aid=<?php echo $row['request_id'] ?>">accept</a></td>
                 <td><a class="btn btn-success" href="?rid=<?php echo $row['request_id'] ?>">reject</a></td>
             <?php }elseif ($row['status']=="accept") {?>
               <td><a class="btn btn-success" href="officer_viewbuilding.php?bid=<?php echo $row['building_id'] ?>">view building</a></td>
             <?php}
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