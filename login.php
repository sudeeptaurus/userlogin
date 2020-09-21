<?php

require_once 'controllers/authController.php';

include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Login</h1>
			<p class="lead">Please login to access privileged contents.</p>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-5">
				<div class="form-group">
					<h2></h2>
					<form action="login.php" method="post">

						<?php if (count($errors) > 0) : ?>
							<div class="alert alert-danger">
								<?php foreach ($errors as $error) : ?>
									<li><?php echo $error; ?></li>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

						<div class="form-group">
							<label for="username">Username or Email</label>
							<input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control form-control-lg" />
						</div>

						<div class="g-recaptcha" data-sitekey="6Lcj7soZAAAAAEa7Tlj27robmMZSFpJbvXLRoa_q"></div>
						<br>
						<div class="input-group">
							<button type="submit" name="login-btn" class="btn btn-primary">
								Sign In
							</button>
						</div>
						<br>
						<p>If Not Yet Registered. Please click <a href="signup.php">here</a></p>
						<div style="font-size: 1rem; text-align: center;"><a href="forgot_password.php">Forgot you Password?</a></div>
					</form>
				</div>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
</div>


<script>
	function onSubmit(token) {
		document.getElementById("demo-form").submit();
	}
</script>

<?php
include "includes/footer.php";

?>