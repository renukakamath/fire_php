; color: white<?php include 'publicheader.php';

if (isset($_POST['freg'])) {
	$id=extract($_POST);
   

    $q="insert into login values(null,'$uname','$pwd','officer')";
     $id=insert($q);
	$q1="insert into officers values(null,'$id','$fname','$lname','$pla','$num','$email')";
	insert($q1);
	alert('successfully');
	return redirect('fire_fireregistration.php');
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
<h1>fire resuce registration</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>first name</th>
			<td><input type="text" required="" class="form-control" name="fname"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" required="" class="form-control" name="lname"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" required="" class="form-control" name="pla"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" required="" pattern="[0-9]{10}" class="form-control" name="num"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" required="" class="form-control" name="email"></td>
		</tr>
		<tr>
			<th>user name</th>
			<td><input type="text" required="" class="form-control"  name="uname"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" required="" class="form-control" name="pwd"></td>
		</tr>
		<td align="center" colspan="2"><input type="submit" name="freg" value="submit" class="btn btn-success"></td>
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