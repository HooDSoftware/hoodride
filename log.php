<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.

	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
			
	
	$sql = "Select * from users where username='$username'";
	
	$result = mysqli_query($conn, $sql);
	
	$num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
	
			$hash = password_hash($password,
								PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
			$sql = "INSERT INTO `users` ( `username`,
				`password`, `date`) VALUES ('$username',
				'$hash', current_timestamp())";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "Passwords do not match";
		}	
	}// end if
	
if($num>0)
{
	$exists="Username not available";
}
	
}//end if
	
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HooDShare-SignUp/Login </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<style>
  body {
  background: url("./assets/img/cars/1.png") no-repeat;
  background-size: cover;
}

.form-horizontal {
  display: none;
}

.login-container {
  position: relative;
  width: 840px;
  height: 300px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  background: rgba(0, 0, 0, 0.7);
  color:yellow;
  font-size: 16px;
  font-weight: 100;
  letter-spacing: 1px;
}

.col-left, .col-right {
  width: 400px;
  padding: 10px;
  float: left;
}

.btn {
  border-radius: 0;
}

.btn-outline {
  background: transparent;
  color: white;
  font-size: 18px;
  font-weight: 100;
  letter-spacing: 2px;
  text-transform: uppercase;
  transition: background, color 0.3s ease-out;
}
.btn-outline:hover {
  background: white;
  color: brown;
}

.background-float {
  position: absolute;
  top: -20px;
  bottom: -20px;
  left: 20px;
  width: 400px;
  padding-left: 10px;
  padding-right: 10px;
  background:black;
  color: white;
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.5);
  transition: left 1s cubic-bezier(0.68, -0.26, 0.21, 1.21);
  z-index: 1;
}
.background-float form {
  height: 0;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  transition: opacity 1s cubic-bezier(0.4, 0, 1, 1);
}
.background-float form.register-form {
  height: auto;
  opacity: 1;
  visibility: visible;
  color:white;
}
.background-float form .form-control {
  border-radius: 0;
}
.btn.btn-primary{
  color:white;
  
}
.register-form{
  color:blue;
}
.h4{
  color:white;
}

[name=choose-login]:checked {
  position: relative;
  color: black;
  border-color: #1F1F21;
  z-index: 1;
}
[name=choose-login]:checked + .background-float {
  position: absolute;
  left: 420px;
}
[name=choose-login]:checked + .background-float .register-form {
  height: 0;
  opacity: 0;
  visibility: hidden;
}
[name=choose-login]:checked + .background-float .login-form {
  height: auto;
  opacity: 1;
  visibility: visible;
}
</style>
</head>
<body>
<?php
	
	if($showAlert) {
	
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
	}
	
	if($showError) {
	
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}
		
	if($exists) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
	}

?>
<div class="login-container">
  <div class="clearfix">
    <div class="col-left">
      <h2 class="text-uppercase">Ride owner</h2>
      
      <h4>Hello ,welcome...signup to host your ride</h4>
      
      <label class="btn btn-default btn-outline" for="register">Rider?</label>
    
      <input class="hidden" type="radio" name="choose-login" checked="checked" id="register"/>
    </div>
    <div class="col-right">
      <h2 class="text-uppercase">Rider</h2>
      <h4 >Hello ,welcome...signup to book a ride</h4>
      <label class="btn btn-default btn-outline" for="login">Host?</label>
      <input class="hidden" type="radio" name="choose-login" id="login"/>
      <div class="background-float">
      
      <form action="rideowner/index.php" method="post"  class="login-form"  >
       
          <h3 class="text-primary text-uppercase">Sign Up</h3>
          <div class="form-group">
          <input class="form-control" id="exampleInputEmail1" type="text" name="name" placeholder="Your Name" >
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Email" required/>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputPassword1" type="password" name="cpassword" placeholder="confirm_password"/>
          </div>
          <button class="btn btn-primary" type="submit">Register </button>
        </form>
        <form action="rider/index.php" method="post" class="register-form">
        
          <h3 class="text-primary text-uppercase">Sign Up</h3>
          <div class="form-group">
        
            <input class="form-control" id="exampleInputEmail1" type="text" name="name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Email" required/>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputPassword1" type="password" name="cpassword" placeholder="confirm_password"/>
          </div>
          <button class="btn btn-primary" type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>
