<?php include('../functions.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Authentication System</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="header-wrapper">
            <div class="header">
                <div class="logo"><a href="index.php">MySchool</a></div>
                <div class="navLink">
					<a href="dashboard.php" style="color: red;">Admin Dashboard</a>
					<a href="dashboard.php?logout='1'" style="color: red;">logout</a>
                </div>
                
            </div>
        </div>
	<div class="form-header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="first_name" value="<?php echo $first_name; ?>">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="last_name" value="<?php echo $last_name; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Gender</label>
			<select name="gender" value="<?php echo $gender; ?>">
                <option value="">Select</option>
            	<option>Female</option>
            	<option>Male</option>
            </select>
		</div>
		<div class="input-group">
			<label>Qualification</label>
			<select name="qualification" value="<?php echo $qualification; ?>">
				<option value="">Select</option>
				<option>Undergraduate</option>
				<option>Postgraduate</option>
				<option>Graduation</option>
				<option>Masters</option>
            </select>
		</div>
		<div class="input-group">
			<label>Department</label>
			<select name="department" value="<?php echo $department; ?>">
				<option value="">Select</option>
				<option>Computer Engineering</option>
				<option>Mass Comm</option>
				<option>Pharmacy</option>
				<option>Accouting</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>