    <?php
    include('login.php'); // Includes Login Script
    if (isset($_SESSION['login_user'])) {
        header("location: dashboard.php"); // Redirecting To Profile Page
    }

    $text = $_GET['text'];
    ?>

    <!DOCTYPE html>
    <html lang="en">


    <!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>H M S</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="assets/css/app.min.css">
        <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel='shortcut icon' type='image/x-icon' href='fabicon.png' style="width: 100%;" />
    </head>

    <body>

        <style>
            .custom_login_image {
                background: url(assets/img/banner/login-image.jpeg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                height: 643px;
                margin-top: -48px;
            }

            .custom_login_panel {
                margin-top: 6rem;
                margin-left: -4rem;
            }

            @media only screen and (max-width: 480px) {
                .custom_login_image {
                    height: 770px;
                }

                .custom_login_panel {
                    margin-top: 10rem;
                    margin-left: 0rem;
                }
            }
        </style>

        <div id="app" class="custom_login_image">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 custom_login_panel">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Login</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label for="email">Phone Number</label>
                                            <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                            <div class="invalid-feedback">
                                                Please fill in your Phone Number
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="submit" class="c-btn" type="submit" value="Log In">
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                        <!--<div class="mt-5 text-muted text-center">-->
                        <!--  Don't have an account? <a href="auth-register.html">Create One</a>-->
                        <!--</div>-->
                    </div>
                </div>
        </div>
        </section>
        </div>
        <!-- General JS Scripts -->
        <script src="assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="assets/js/custom.js"></script>
    </body>


    <!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

    </html>