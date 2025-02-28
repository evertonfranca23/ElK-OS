<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - ELK Systems</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/ElkSys/css/loginOs.css') }}">
    <!--<link rel="stylesheet" href="styles.css">-->
</head>
<body>
    <div class="container-login">
        <!-- Left Side -->
        <div class="left-side">
            <h1>ELK Systems</h1>
        </div>

        <!-- Right Side -->
        <div class="right-side">
            <div class="login-card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="forgot-password mb-3">
                        <a href="{{ route('password.request') }}">Esqueci minha senha</a>
                    </div>
                    <button type="submit" class="btn btn-login w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
