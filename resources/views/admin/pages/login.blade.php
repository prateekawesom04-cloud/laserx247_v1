<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts for custom font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #e7bdbd;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 25px;
            height: 44px;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .btn-login {
            background-color: #007bff;
            color: #fff;
            border-radius: 25px;
            height: 44px;
            font-size: 15px;
            width: 100%;
            border: none;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        h2 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 24px;
        }

        label {
            font-size: 14px;
            margin-bottom: 6px;
        }

        .left img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media (max-width: 767px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }

            .left {
                display: none;
            }

            .right {
                width: 100%;
            }
        }

        @media (min-width: 768px) {
            .login-container {
                width: 750px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container row justify-content-center">
        <!-- Left Section with Image -->
        <div class="col-md-6 left d-none d-md-block">
            <img src="{{ asset('images/login-image.jpg') }}" alt="Login Image">
        </div>

        <!-- Right Section with Form -->
        <div class="col-12 col-md-6 right">
            <h2 class="text-center text-md-start">Playcricket Login</h2>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
