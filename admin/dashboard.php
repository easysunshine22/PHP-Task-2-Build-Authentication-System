<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Authentication System</title>
	<link rel="stylesheet" href="../css/style.css">
	<style>
		.add_user {
		background: #003366;
		padding: 5px;
		color: white;
		border-radius: 5px;
		margin-bottom: 30px;

	}
	span{
		top:20px;
		position: relative;
	}
	strong{
		text-transform: capitalize;

	}
	</style>
</head>
<body>
    <div class="container">
        <div class="header-wrapper">
            <div class="header">
                <div class="logo"><a href="index.php">MySchool</a></div>
                <div class="navLink">
					<a href="../logout.php" style="color: red;">Logout</a>
                </div>
                
            </div>
        </div>
	<div class="form-header">
		<h2>Admin - Dashboard</h2>
	</div>
	<div class="content">
		<!-- notification message -->
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

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					Username: <strong><?php echo $_SESSION['user']['username']; ?></strong><small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
					</small><br />
					First Name: <strong><?php echo $_SESSION['user']['first_name']; ?></strong><br />
					Last Name: <strong><?php echo $_SESSION['user']['last_name']; ?></strong><br />
					Department: <strong><?php echo $_SESSION['user']['department']; ?></strong><br />
					Registration Date: <strong><?php echo $_SESSION['user']['reg_date_time']; ?></strong><br />
					Last Login:
						<br>
					<span>
						&nbsp; <a class="add_user" href="create_user.php"> + add user</a>
					</span>

				<?php endif ?>
			</div>
		</div>



	</div>
		
</body>
</html>