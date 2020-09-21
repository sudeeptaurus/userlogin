<?php

require_once 'controllers/authController.php';

include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Recover your Password</h1>
            <p class="lead">Please enter your email address you used to sign up on this site and we will assist you in recovering your password.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-5">
                <div class="form-group">
                    <h2></h2>
                    <form action="forgot_password.php" method="post">

                        <?php if (count($errors) > 0) : ?>
                            <div class="alert alert-danger">
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your registered email" />
                        </div>

                        <div class="input-group">
                            <button type="submit" name="forgot-password" class="btn btn-primary">
                                Recover your Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>


<?php
include "includes/footer.php";

?>