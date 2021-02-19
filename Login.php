<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/mystyle.css">
	
	<title>E-Learn</title>
</head>

<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="Login.php">

	

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="Register.php">Sign up</a>
		</p>
	</form>
</body>
</html>