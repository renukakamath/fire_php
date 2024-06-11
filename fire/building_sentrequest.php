<?php include 'buildingheader.php';
 $bid=$_SESSION['building_id'];
 extract($_GET);

 if (isset($_POST['request'])) {
 	extract($_POST);

 $q="insert into request values(null,'$bid','$des','$date','$time','pending')";
 	insert($q);
 	alert('sucessfully');
 	return redirect('building_sentrequest.php');

 }
?>

  	<style type="text/css">
	input[type="text"],[type="date"],[type="time"]
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
<h1>sent request</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>description</th>
			<td><input type="text" required="" class="form-control" name="des"></td>
		</tr>
		<tr>
			<th>date</th>
			<td><input type="date" required="" class="form-control" name="date"></td>
		</tr>
		<tr>
			<th>time</th>
			<td><input type="time" required="" class="form-control" name="time"></td>
		</tr>
		
			<td align="center" colspan="2"><input type="submit" name="request" value="submit" class="btn btn-success"></td>
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
<center>
	<h1>view request</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>owner</th>
				<th>description</th>
				<th>date</th>
				<th>time</th>
				<th>status</th>
			</tr>
			<?php 

           $q="select * from request inner join building using (building_id)";
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
           	<?php 

             if($row['status']=="accept") {
             	?>
             	<td><a class="btn btn-success" href="building_viewposition.php?rid=<?php echo $row['request_id'] ?>">view position</a></td>
            <?php
             }else{

           	 ?>
           	<td><?php echo $row['status'] ?></td>
           	
           </tr>
           <?php
       }

		}	 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>
