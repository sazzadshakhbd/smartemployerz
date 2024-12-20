<?php include 'view/header.php'; ?>
    <!-- Start Main Section -->
    <main>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xxl-12 px-0">
                    <div class="login-wrapper">
                        <!--Left Side Content Section -->
                        <div class="card login-card border-0 bg-transparent">
                            <div class="card-header bg-transparent border-0 p-0">
                                <a href="./dashboard.php">
                                    <img src="./img/logo/logo.png" alt="logo" class="img-fluid" />
                                </a>
                            </div>
                            <div class="card-body p-0 h-100 ">
                                <div class="form-title">
                                    <h2 class="text-capitalize ">user login</h2>
                                    <p class="mb-0">Here is today’s report and performances</p>
                                </div>
                                <div class="social-links">
                                    <a href="#" class="text-center d-flex align-items-center justify-content-center text-decoration-none mb-3" target="_blank">
                                        <img src="./img/auth/gmail.png" alt="gmail-logo" />
                                        Login With Google
                                    </a>
                                    <a href="#" class="text-center d-flex align-items-center justify-content-center text-decoration-none mb-3" target="_blank">
                                        <img src="./img/auth/facebook.png" alt="facebook-logo" />
                                        Login With Facebook
                                    </a>
                                    <a href="#" class="text-center d-flex align-items-center justify-content-center text-decoration-none mb-3" target="_blank">
                                        <img src="./img/auth/linkedin.png" alt="linkedin-logo" />
                                        Login With Linkedin
                                    </a>
                                </div>
                                <form method="get" autocomplete="off">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="email" id="email" autocomplete="off"
                                            placeholder="John.snow@gmail.com" required>
                                    </div>
                                    
                                    <div class="form-group position-relative" id="show_hide_password">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter your password" autocomplete="off"
                                                class="form-control" required />
                                            <div class="input-group-addon">
                                                <a href="javascript:void(0)">
                                                    <i class="far slash-icon fa-eye-slash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-center form-footer mt-5">Forget Password? Click <a href="./reset-password.php">Reset Password</a>
                                    </p>

                                    <div class="form-group">
                                        <div class="d-grid col-12">
                                            <button onclick="window.location.href='dashboard.php';" type="submit" class="btn rounded-0 ">Login</button>
                                        </div>
                                    </div>
                                    
                                </form>
                                <p class="text-center form-footer">If You Don’t Have Any Account, Click <a href="./registration.php">Sign Up</a>
                                    </p>
                            </div>
                        </div>
                        <!-- Right Side Image Section -->
                        <div class="login-image" style="background-image: url('./img/auth/login-image.png');"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Section -->
<?php include 'view/footer.php'; ?>