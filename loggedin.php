<?php

require_once 'controllers/authController.php';

// verify the user using token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

// verify the user using token for password reset
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}

include "includes/header.php";
include "includes/navigation.php";

?>


<div class="container py-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">

            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    unset($_SESSION['alert-class']);
                    ?>
                </div>
            <?php endif; ?>

            <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
            <a href="loggedin.php?logout=1" class="logout">Logout</a>

            <?php if (!$_SESSION['verified']) : ?>
                <div class="alert-warning alert">
                    You need to verify your account.
                    Sign in to your email aacount and click on the
                    verification link we just send to you at <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
            <?php endif; ?>

            <?php if ($_SESSION['verified']) : ?>
                <button class="btn btn-block btn-lg btn-primary">I am verified!</button>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php
include "includes/footer.php";

?>