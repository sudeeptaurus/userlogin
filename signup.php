<?php

require_once 'controllers/authController.php';

include "includes/header.php";
require "includes/navigation.php";


?>


<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Register</h1>
            <p class="lead">Please Register to access privileged contents.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7">
                <div class="form-group">
                    <h2></h2>
                    <form py-2 action="signup.php" method="post">

                        <?php if (count($errors) > 0) : ?>
                            <div class="alert alert-danger">
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" />
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" value="<?php echo $username; ?>" placeholder="Username" name="username" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="inputMobile">Mobile Number</label>
                            <input type="phone" class="form-control" id="mnumber" name="mnumber" placeholder="Mobile Number" />
                        </div>

                        <div class="form-group">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="inputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" id="passwordConf" name="passwordConf" placeholder="Confirm Password" />
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Lcj7soZAAAAAEa7Tlj27robmMZSFpJbvXLRoa_q"></div>
                        <br>

                        <div class="input-group">
                            <button type="submit" name="signup-btn" class="btn btn-primary">
                                Sign Up
                            </button>
                        </div>

                        <br>
                        <p>Already a member. Please click <a href="login.php">here</a></p>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
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