<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
  <script src="{{asset('js')}}/jquery-3.7.1.min.js"></script>
    <script src="{{asset('js')}}/tailwind.min.js"></script>

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #060e06d4, #193e16);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .login-card {
      background: linear-gradient(135deg, #40e735d4, #b6b925f2, #bf8c14f2);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-title {
      font-size: 1.75rem;
      font-weight: 600;
      text-align: center;
      margin-bottom: 2rem;
      color: #ff0022;
    }

    .login-title span {
      color: #671dac;
    }

    .form-control {
      padding-left: 2.2rem;
    }

    .form-group i {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: #555;
    }

    .btn-login {
      background-color: #193e16;
      color: white;
      font-weight: 600;
      border-radius: 10px;
    }

    .btn-login:hover {
      background-color: #b38900;
    }

    @media (max-width: 576px) {
      .login-card {
        padding: 1.5rem;
      }

      .login-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="login-title">
      <span>Admin</span> Login
    </div>

    <form action="{{route('admin.auth.login')}}" method="POST">
      @csrf
      <div class="form-group position-relative mb-3">
        <i class="fas fa-user"></i>
        <input name="username" type="text" class="form-control" placeholder="Username" required />
      </div>

      <div class="form-group position-relative mb-4">
        <i class="fas fa-eye-slash"></i>
        <input name="password" type="password" class="form-control" placeholder="Password" required />
      </div>

      <button type="submit" class="btn btn-login w-100">
        Login <i class="fas fa-arrow-right-to-bracket ms-2"></i>
      </button>
    </form>
  </div>

@if ($error=request()->session()->get('error'))
  <div class="modal" tabindex="-1">
    <div class="modal-dialog flex flex-row justify-between items-center login-card p-2">
      <h5 class="modal-title">{{$error}}</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
  </div>

  <script>
    $('.modal').show();
    setTimeout(() => {
      $('.modal').hide('2000');
      
    }, 1000);
  </script>
@endif

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
