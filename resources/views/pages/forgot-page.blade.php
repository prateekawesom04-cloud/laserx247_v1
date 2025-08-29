<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body class="vh-100 d-flex align-items-center justify-content-center"
    style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 rounded-4 shadow-lg overflow-hidden bg-dark">
                <div class="row g-0">

                    <!-- Left Side Image -->
                    <div
                        class="col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 bg-dark text-white">
                        <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid"
                            style="max-height: 280px;" />
                    </div>

                    <!-- Right Side Form -->
                    <div class="col-md-7 p-4 text-white bg-dark">
                        <form id="ForgotForm">

                            <!-- Phone -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white text-dark border-end-0">
                                    +91
                                </span>
                                <input type="text" class="form-control border-start-0" name="phone"
                                    placeholder="Enter Phone Number" />
                                <a type="button" class="btn btn-info text-white">Get OTP</a>
                            </div>

                            <!-- OTP -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white text-dark">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="text" class="form-control" name="otp" placeholder="Enter OTP" />
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white text-dark">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password" />
                                <span class="input-group-text bg-white text-dark">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white text-dark">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="confirm_password"
                                    placeholder="Enter Confirm Password" />
                                <span class="input-group-text bg-white text-dark">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </div>

                            <!-- Submit Button -->
                            <a type="submit" class="btn btn-info text-white fw-bold w-100 mb-3">Update Password</a>

                            <!-- Footer Links -->
                            <div class="text-center">
                                <small>Remember Your Password? <a href="login"
                                        class="text-info fw-bold">Login</a></small><br />
                                <a href="register" class="text-white fw-bold small">Create New Account</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
