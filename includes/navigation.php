<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">ScienceHiFY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($page == 'home') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($page == 'about') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown <?php if ($page == 'journals' || $page == 'currentscience') {
                                                    echo 'active';
                                                } ?>">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Journals</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="journals.php">About Journals</a>
                        <a class="dropdown-item" href="currentscience.php">Current Science</a>
                    </div>
                </li>
                <li class="nav-item <?php if ($page == 'forum') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="forum.php">Forum</a>
                </li>
                <?php
                if ($loggedin) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="subscriptions.php">Subscription</a>
                </li>';
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'contact') {
                                            echo 'active';
                                        } ?>" href="contact.php">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-1" method="get" action="search.php">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php
            if (!$loggedin) {
                echo '<form class="form-inline my-2 my-lg-2 mr-1">            
            <button class="btn btn-danger form-control btn-block" type="submit"><a href="login.php">Login</a></button>            
            </form>';
            }
            if ($loggedin) {
                echo '<form class="form-inline my-2 my-lg-2">            
            <button class="btn btn-danger form-control btn-block" type="submit"><a href="logout.php">Logout</a></button>
            </form>';
            }
            ?>
        </div>
    </div>
</nav>