<div class="login">

        <div class="login-screen">
            <div class="app-title">
          <strong>STMS REGISTER</strong>
            </div>

        <form class="form" action="?page=register.php" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">

                <div class="login-form" style="padding-top: 50px;">

            <div class="control-group">
              <input name="fname" placeholder="Enter First name" type="text" class="form-control" required="required">
                    </div>

            <div class="control-group">
              <input name="lname" placeholder="Enter Last name" type="text" class="form-control" required="required">
            </div>

            <div class="control-group">
              <input name="email" placeholder="Enter Email" type="text" class="form-control" id="uname1" required="required">
                    </div>

            <div class="control-group">
              <input name="userid" placeholder="Enter UserId" type="text" class="form-control" required="required">
                    </div>

            <button type="submit" class="btn btn-primary btn-large btn-block">REGISTER</button>

              </div>
        </form>
        </div>
    </div>

<!-- Post to database here -->
<?php

if ($_POST) {

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$type="student";
  $userid = $_POST['userid'];
//   for($i=1; $i<=999;$i++) {
//   $userid = generateID($i);
// }



if($fname!=null&&
	$lname!=null&&
	$email!=null){
				$p="INSERT INTO user (userId,Fname, Lname, usertype, email_address) VALUES ('$userid','$fname', '$lname', '$type', '$email')";
				$q=mysqli_query($conn, $p);

						if(!$q){
							echo "<p class='alert alert-danger'>Failed to register</p><br> Error ".mysqli_error($conn);
						}
						else{
							echo "<p class='alert alert-info' style='position: top;'>Thanks for registering, you can now log in!</p>";
							echo '<meta http-equiv="refresh" content="2;url=?page=login.php"/>';
						}


	}else{
		echo "<p class='alert alert-danger'>Please fill in all fields!<p>";
	}
}

?>
