<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body class="vh-100 d-flex align-items-center justify-content-center" 
        style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 rounded-4 shadow-lg overflow-hidden" 
             style="background: #0a2345;"> 
          <div class="row g-0">
            
            <!-- Left side with logo/image -->
            <div class="col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 text-white" 
                 style="background: linear-gradient(180deg, #001f4d, #0a2345);">
              <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid" style="max-height: 280px;" />
            </div>

            <!-- Right side with form -->
            <div class="col-md-7 p-4 text-white" style="background: #0a2345;">
              
              <!-- Phone -->
              <div class="input-group mb-3">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-phone"></i> +91</span>
                <input type="text" class="form-control border-start-0" placeholder="Enter Phone Number" />
                <button class="btn btn-dark">Get OTP</button>
              </div>

              <!-- OTP -->
              <div class="input-group mb-3">
                <span class="input-group-text bg-white"><i class="bi bi-key"></i></span>
                <input type="text" class="form-control" placeholder="Enter OTP" />
              </div>
              <div class="text-end mb-3">
                <a href="#" class="small text-info">Want to set UserID?</a>
              </div>

              <!-- Password -->
              <div class="input-group mb-3">
                <span class="input-group-text bg-white"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" placeholder="Enter Password" />
              </div>

              <!-- Confirm Password -->
              <div class="input-group mb-3">
                <span class="input-group-text bg-white"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" placeholder="Enter Confirm Password" />
              </div>
              <div class="text-end mb-3">
                <a href="#" class="small text-info">Have a referral code?</a>
              </div>

              <!-- Register -->
              <button class="btn btn-dark w-100 mb-3">Register</button>

              <div class="text-center small mb-2">Get Your Ready-Made ID From WhatsApp</div>

              <!-- WhatsApp -->
              <button class="btn btn-success w-100 mb-3">📱 WhatsApp Now</button>

              <!-- Login -->
              <div class="text-center small">
                Already have an account? <a href="#" class="fw-bold text-info">LogIn</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
