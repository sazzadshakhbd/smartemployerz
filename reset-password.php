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
                                <img src="./img/logo/logo.png" alt="logo" width="250" class="img-fluid" />
                            </a>
                        </div>
                        <div class="card-body p-0 h-100 ">
                            <div class="form-title">
                                <h2 class="text-capitalize ">Forget Password?</h2>
                                <p class="mb-0">Input your email address to get OTP to reset password</p>
                            </div>

                            <form method="get" autocomplete="off">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" type="email" id="email" autocomplete="off"
                                        placeholder="John.snow@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <div class="d-grid col-12">
                                        <button onclick="window.location.href='send-otp.php';" type="submit" class="btn rounded-0 ">Send OTP</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Right Side Image Section -->
                    <div class="login-image forget-image" style="background-image: url('./img/auth/forget-password.png');"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main Section -->

<?php include 'view/footer.php'; ?>