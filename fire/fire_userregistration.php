<?php include 'publicheader.php';
if (isset($_POST['ureg'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','user')";
	$id=insert($q);
	$q1="insert into user values(null,'$id','$fname','$lname','$place','$phno','$email')";
	insert($q1);
	alert('successfully');
	return redirect('fire_userregistration.php');
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


<h1>user registration</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>first name</th>
			<td style="color: white"><input type="text" required="" class="form-control" name="fname"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" required="" class="form-control" name="lname"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" required="" class="form-control" name="place"></td>
		</tr>
		<tr>
			<th>phone no:</th>
			<td><input type="text" required="" pattern="[0-9]{10}" class="form-control" name="phno"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" required="" class="form-control"  name="email"></td>
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
			<td align="center" colspan="2"><input type="submit" name="ureg" value="submit" class="btn btn-success"></td>
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