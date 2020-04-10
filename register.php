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
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php" onsubmit="return validate()" name="user-form">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label><div id="username_error" class="val_error"></div>
			<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
		</div>
		<div class="input-group">
			<label>First Name</label><div id="first_name_error" class="val_error"></div>
			<input type="text" name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name">
		</div>
		<div class="input-group">
			<label>Last Name</label><div id="last_name_error" class="val_error"></div>
			<input type="text" name="last_name" value="<?php echo $last_name; ?>" placeholder="Last Name">
		</div>
		<div class="input-group">
			<label>Email</label><div id="email_error" class="val_error"></div>
			<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email Address">
		</div>
		<div class="input-group">
			<label>Gender</label><div id="gender_error" class="val_error"></div>
			<select name="gender" value="<?php echo $gender; ?>">
                <option value="">Select</option>
            	<option>Female</option>
            	<option>Male</option>
            </select>
		</div>
		<div class="input-group">
			<label>Qualification</label><div id="qualification_error" class="val_error"></div>
			<select name="qualification" value="<?php echo $qualification; ?>">
				<option value="">Select</option>
				<option>Undergraduate</option>
				<option>Postgraduate</option>
				<option>Graduation</option>
				<option>Masters</option>
            </select>
		</div>
		<div class="input-group">
			<label>Department</label><div id="department_error" class="val_error"></div>
			<select name="department" value="<?php echo $department; ?>">
				<option value="">Select</option>
				<option>Computer Engineering</option>
				<option>Mass Comm</option>
				<option>Pharmacy</option>
				<option>Accouting</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label><div id="password_error" class="val_error"></div>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>