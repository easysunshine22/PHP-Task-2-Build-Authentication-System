<?php include('functions.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Authentication System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header-wrapper">
            <div class="header">
                <div class="logo"><a href="index.php">MySchool</a></div>
                <div class="navLink">
                    <a href="index.php"><li>Home</li></a>
                    <a href="login.php"><li>Login</li></a>
                    <a href="register.php"><li>Register</li></a>
                </div>
                
            </div>
        </div>

	<div class="form-header">
		<h2>Login</h2>
	</div>
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

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
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>