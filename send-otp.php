<?php include 'view/header.php'; ?>


<!-- Start Main Section -->
<main>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-xxl-12 px-0">
                <div class="login-wrapper d-flex">
                    <div class="card login-card border-0 bg-transparent">
                        <div class="card-header bg-transparent border-0 p-0">
                            <a href="./dashboard.php">
                                <img width="250" src="./img/logo/logo.png" alt="logo" class="img-fluid" />
                            </a>
                        </div>
                        <div class="card-body p-0 h-100 ">
                            <div class="form-title">
                                <h2 class="text-capitalize ">Check Your Email</h2>
                                <p class="mb-0">Input OTP to reset password</p>
                            </div>

                            <form method="get" autocomplete="off">
                                <div class="form-group">
                                    <fieldset>

                                        <label class="form-label" for="otp">Input OTP</label>
                                        <div class="inputfield">
                                            <input
                                                type="number"
                                                maxlength="1"
                                                id="otp1"
                                                class="input border-right-0"
                                                disabled
                                                oninput="checkOTP()" />
                                            <input
                                                type="number"
                                                id="otp2"
                                                maxlength="1"
                                                class="input rounded-0 border-right-0"
                                                disabled
                                                oninput="checkOTP()" />
                                            <input
                                                type="number"
                                                maxlength="1"
                                                id="otp3"
                                                class="input rounded-0 border-right-0"
                                                disabled
                                                oninput="checkOTP()" />
                                            <input
                                                type="number"
                                                maxlength="1"
                                                id="otp4"
                                                class="input"
                                                disabled
                                                oninput="checkOTP()" />
                                            <input
                                                type="number"
                                                maxlength="1"
                                                id="otp5"
                                                class="input"
                                                disabled
                                                oninput="checkOTP()" />
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <div class="d-grid col-12">

                                        <button id="timer" class="otp-btn">2.00</button>
                                        <button id="verifyButton" type="submit" style="display: none;">Verify OTP</button>

                                    </div>

                                </div>
                            </form>
                            <p class="text-center form-footer">Check Email & Input OTP Within 2 minutes
                            </p>
                        </div>
                    </div>
                    <div class="login-image forget-image" style="background-image: url('./img/auth/forget-password.png');"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main Section -->


<?php include 'view/footer.php'; ?>
<script src="./js/otp.js"></script>