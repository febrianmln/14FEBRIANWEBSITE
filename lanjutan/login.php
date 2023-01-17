<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<title>Login Admin Guide Hebat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Admin Guide Hebat</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(../image/Paimon.jpg);">
					</div>
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Login</h3>
							</div>
						</div>
						
						<form action="" method="POST" class="signin-form">
							<div class="form-group mb-3">
								<label class="label" for="name">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password" required>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3" value="login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$_SESSION['username'] = "Yuki";
		$_SESSION['password'] = "1234";
		
		if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
			header('Location:dashboard.php');
		} else {
			echo "Username Atau Password Anda Salah:";
		}
	}
	?>

</body>
</html>