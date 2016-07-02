<!DOCTYPE html>
<?php
	include('php/login.php');
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="description" content="" />
	<meta name="author" content="Jack Miller" />
	<link rel="icon" href="assets/favicon.ico" />

	<title>Nova Login</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="css/login.css" rel="stylesheet" />
</head>

<body>
	<div class="container">
		<form class="form-signin" action="" method="POST">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Username</label>
			<input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus />
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required />
            <div class="error"><?php echo $error; ?></div>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
		</form>
	</div>
</body>
</html>
