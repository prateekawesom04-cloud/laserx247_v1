<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body class="vh-100 d-flex align-items-center justify-content-center"
    style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">

    <div class="container">
        <div class="row justify-content-center">
            <div
                class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-7 rounded-4 shadow-lg overflow-hidden"
                style="background: #0a2345;">
                <div class="row g-0">

                    <!-- Left side -->
                    <div
                        class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 text-white"
                        style="background: linear-gradient(180deg, #001f4d, #0a2345);">
                        <h2 class="fw-bold mb-3 text-uppercase fs-4 fs-md-3 fs-lg-2">
                            <span class="text-primary">GAME</span><span class="text-white">WIN</span><span
                                class="text-danger">247</span>
                        </h2>
                        <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid"
                            style="max-height: 280px; width: auto;" />
                    </div>

                    <!-- Right side (Form) -->
                    <div class="col-12 col-md-7 bg-transparent p-4 text-white">

                        <!-- Tabs -->
                        <div class="d-flex mb-3 gap-2">
                            <button type="button" class="btn btn-light flex-fill fw-bold" aria-pressed="false">Phone</button>
                            <button type="button" class="btn btn-primary flex-fill fw-bold" aria-pressed="true">User ID</button>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3 text-start">
                            <div class="input-group">
                                <span class="input-group-text bg-white text-dark border-0"><i class="bi bi-phone"></i>
                                    +91</span>
                                <input type="text" class="form-control border-0" placeholder="Enter Phone Number" />
                            </div>
                        </div>

                        <!-- Radio -->
                        <div class="d-flex gap-3 mb-3 flex-wrap">
                            <div>
                                <input type="radio" name="loginType" id="passwordOption" checked />
                                <label for="passwordOption" class="ms-1">Password</label>
                            </div>
                            <div>
                                <input type="radio" name="loginType" id="otpOption" />
                                <label for="otpOption" class="ms-1">OTP</label>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text bg-white text-dark border-0"><i
                                        class="bi bi-lock"></i></span>
                                <input type="password" class="form-control border-0" placeholder="Enter Password" />
                            </div>
                        </div>

                        <!-- Forgot -->
                        <div class="text-end mb-3">
                            <a href="javascript:void(0)" class="text-info small">Forgot Password?</a>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2 mb-3 flex-wrap">
                            <a href="javascript:void(0)" class="btn btn-dark flex-grow-1 fw-bold">Login</a>
                            <a href="javascript:void(0)" class="btn btn-info flex-grow-1 fw-bold">Log In With Demo ID</a>
                        </div>

                        <!-- WhatsApp -->
                        <p class="text-center small mb-2">Get Your Ready-Made ID From WhatsApp</p>
                        <a href="javascript:void(0)" class="btn btn-success w-100 mb-3">📱 Whatsapp Now</a>

                        <!-- Social login -->
                        <p class="text-center small mb-2">Or Login With</p>
                        <div class="d-flex justify-content-center gap-3 mb-3 flex-wrap">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="bi bi-telegram"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger"><i class="bi bi-instagram"></i></a>
                            <a href="javascript:void(0)" class="btn btn-info"><i class="bi bi-facebook"></i></a>
                        </div>

                        <!-- Signup -->
                        <div class="text-center small">
                            Don’t have an account? <a href="#" class="fw-bold text-info">Sign UP</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
