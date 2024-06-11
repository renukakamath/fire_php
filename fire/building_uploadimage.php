<?php include 'buildingheader.php';
 $bid=$_SESSION['building_id'];
 extract($_GET);

 if (isset($_POST['add'])) {
 	extract($_POST);

$dir = "image/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
	echo $q="insert into image values(null,'$bid','$target')";
	insert($q);
	alert('insertsucessfully');
	return redirect('building_uploadimage.php');
	}
		else
		{
			echo "file uploading error occured";
		}

 }
 ?>
 	<style type="text/css">
	input[type="file"]
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
	<h1>upload image</h1>
	<form method="post" enctype="multipart/form-data">
		<table class="table" style="width:500px; color: white">
			<tr>
				<th>image</th>
				<td><input type="file" required="" class="form-control" name="imgg"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="add" value="submit" class="btn btn-success"></td>
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