<?php

require_once 'controllers/authController.php';

include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Reset Your Password</h1>
            <p class="lead">You can reset your password here.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-5">
                <div class="form-group">
                    <h2></h2>
                    <form action="reset_password.php" method="post">

                        <?php if (count($errors) > 0) : ?>
                            <div class="alert alert-danger">
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" />
                        </div>

                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="passwordConf" class="form-control form-control-lg" />
                        </div>

                        <div class="input-group">
                            <button type="submit" name="reset-password-btn" class="btn btn-primary">
                                Reset Password
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