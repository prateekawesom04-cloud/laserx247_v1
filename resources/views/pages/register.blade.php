<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center"
    style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">

    <div class="container px-2 px-sm-3 px-md-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-11 col-md-10 col-lg-8 col-xl-7 rounded-4 shadow-lg overflow-hidden"
                style="background: #0a2345;">
                <div class="row g-0 flex-column flex-md-row">

                    <!-- Left Side (Image) -->
                    <div class="col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 text-white d-none d-md-block h-100"
                        style="background: linear-gradient(180deg, #001f4d, #0a2345);">
                        <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid"
                            style="max-height: 280px;" />
                    </div>


                    <!-- Right Side (Form) -->
                    <div class="col-md-7 p-4 text-white" style="background: #0a2345;">
                        <form id="RegisterForm">

                            <!-- Phone Number -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-phone"></i> +91
                                </span>
                                <input type="text" class="form-control border-start-0" name="phone"
                                    placeholder="Enter Phone Number" />
                                <a type="button" class="btn btn-dark">Get OTP</a>
                            </div>

                            <!-- OTP -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="text" class="form-control" name="otp" placeholder="Enter OTP" />
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" class="small text-info">Want to set UserID?</a>
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="confirm_password"
                                    placeholder="Enter Confirm Password" />
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" class="small text-info">Have a referral code?</a>
                            </div>

                            <!-- Register Button -->
                            <a type="submit" class="btn btn-dark w-100 mb-3">Register</a>

                            <!-- Info Text -->
                            <div class="text-center small mb-2">Get Your Ready-Made ID From WhatsApp</div>

                            <!-- WhatsApp Button -->
                            <a href="https://wa.me/your-number" target="_blank" class="btn btn-success w-100 mb-3">
                                📱 WhatsApp Now
                            </a>

                            <!-- Login Link -->
                            <div class="text-center small">
                                Already have an account? <a href="login" class="fw-bold text-info">LogIn</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
