<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GameWin247 Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
</head>
<body class="vh-100 d-flex align-items-center justify-content-center" 
      style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8 rounded-4 shadow-lg overflow-hidden"style="background: #0a2345;">
        <div class="row g-0">
          
          <!-- Left side -->
          <div class="col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 text-white" 
               style="background: linear-gradient(180deg, #001f4d, #0a2345);">
            <h2 class="fw-bold mb-3 text-uppercase">
              <span class="text-primary">GAME</span><span class="text-white">WIN</span><span class="text-danger">247</span>
            </h2>
            <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid" style="max-height: 280px;" />
          </div>

          <!-- Right side (Form) -->
          <div class="col-md-7 bg-transparent p-4 text-white">

            <!-- Tabs -->
            <div class="d-flex mb-3">
              <button class="btn btn-light flex-fill fw-bold">Phone</button>
              <button class="btn btn-primary flex-fill fw-bold">User ID</button>
            </div>

            <!-- Phone -->
            <div class="mb-3 text-start">
              <div class="input-group">
                <span class="input-group-text bg-white text-dark border-0"><i class="bi bi-phone"></i> +91</span>
                <input type="text" class="form-control border-0" placeholder="Enter Phone Number"/>
              </div>
            </div>

            <!-- Radio -->
            <div class="d-flex gap-3 mb-3">
              <div>
                <input type="radio" name="loginType" checked> Password
              </div>
              <div>
                <input type="radio" name="loginType"> OTP
              </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text bg-white text-dark border-0"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control border-0" placeholder="Enter Password"/>
              </div>
            </div>

            <!-- Forgot -->
            <div class="text-end mb-3">
              <a href="#" class="text-info small">Forgot Password?</a>
            </div>

            <!-- Buttons -->
            <div class="d-flex gap-2 mb-3">
              <button class="btn btn-dark w-50 fw-bold">Login</button>
              <button class="btn btn-info w-50 fw-bold">Log In With Demo ID</button>
            </div>

            <!-- WhatsApp -->
            <p class="text-center small">Get Your Ready-Made ID From WhatsApp</p>
            <button class="btn btn-success w-100 mb-3">📱 Whatsapp Now</button>

            <!-- Social login -->
            <p class="text-center small mb-2">Or Login With</p>
            <div class="d-flex justify-content-center gap-3 mb-3">
              <a href="#" class="btn btn-primary"><i class="bi bi-telegram"></i></a>
              <a href="#" class="btn btn-danger"><i class="bi bi-instagram"></i></a>
              <a href="#" class="btn btn-info"><i class="bi bi-facebook"></i></a>
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
