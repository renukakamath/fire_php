<?php include 'publicheader.php';

if (isset($_POST['breg'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','building owner')";
	$id=insert($q);
	$q1="insert into building values(null,'$id','$fname','$pla','$num','$email','$lat','$lon')";
    $q=insert($q1);


    alert('successfully');
    return redirect('fire_buildingsreg.php');
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
<h1>building registration</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>owner</th>
			<td><input type="text" required="" class="form-control" name="fname"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" required="" class="form-control" name="pla"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" required="" pattern="[0-9]{10}" class="form-control"  name="num"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" required="" class="form-control" name="email"></td>
		</tr>
		<tr>
			<th>latitude</th>
			<td><input type="text" required="" class="form-control" name="lat"></td>
		</tr>
		<tr>
			<th>longitude</th>
			<td><input type="text" required="" class="form-control" name="lon"></td>
		</tr>
		<tr>
			<th>user name</th>
			<td><input type="text" required="" class="form-control" name="uname"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" required="" class="form-control" name="pwd"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="breg" value="submit" class="btn btn-success"></td>
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