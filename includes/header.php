<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header ">
            <!-- <a class="navbar-brand">
                <img src="assets/img/logo.png" />
            </a> -->
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<?php if ($_SESSION['login']) {
    ?>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                            <li><a href="issued-books.php">Issued Books</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My
                                            Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1"
                                            href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <?php if ($_SESSION['login']) {
                                    ?>
                                    <div class="right-div">
                                        <a href="logout.php" class="">LOG OUT</a>
                                    </div>
                                <?php } ?>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">User Login</a></li>
                            <li><a href="signup.php">User Signup</a></li>
                            <li><a href="adminlogin.php">Admin Login</a></li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php } ?>