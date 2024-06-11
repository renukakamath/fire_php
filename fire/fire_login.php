<?php include 'publicheader.php';

if (isset($_POST['login'])) {
   extract($_POST);

   $q="select * from login where username='$uname' and password='$pwd'";
   $res=select($q);

   if (sizeof($res)>0) 
   {
      $_SESSION['logid']=$res[0]['login_id'];
    $logid=$_SESSION['logid'];
   	if ($res[0]['type']=="admin") {
   	   return redirect('admin_home.php');

   	}elseif($res[0]['type']=="building owner"){
        
           $q1="select * from building where login_id='$logid'";
            $res=select($q1);
       if (sizeof($res)>0)
     {
     $_SESSION['building_id']=$res[0]['building_id'];
      $bid=$_SESSION['building_id'];

         return redirect('building_home.php');
      }
    }
      elseif($res[0]['type']=="officer") 
      {

           echo$q2="select * from officers where login_id='$logid'";
            $res2=select($q2);
            if (sizeof($res2)>0)
               {
                 $_SESSION['officer_id']=$res2[0]['officer_id'];
                 $oid=$_SESSION['officer_id'];
                  return redirect('officer_home.php');
                }
        }elseif ($res[0]['type']=="user") {
          return redirect('user_home.php');
        }


}
else{
  alert('invalid username & password');
}
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
<h1>login</h1>
<form method="post">
	<table class="table" style="width:500px; color: white">
		<tr>
			<th>user name</th>
			<td><input type="text" class="form-control" name="uname"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" class="form-control" name="pwd"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></td>
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