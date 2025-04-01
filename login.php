<?php
//Back-end
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link do ícons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body class="Bg-light">
    <div class="login-container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-1">Login</h4>
            </div>
            <!-- Corpo dp card -->
            <div class="card-body">
                <form action="post" class="needs-validation" novalidate>
                    <input type="hidden">

                    <div class="mb-3">
                        <label for="uder" class="form-label">
                            Usuario:
                        </label>
                        <input type="text" class="form-control" id="usuario" name="username" required autocomplete="off" placeholder="Digite o usuario">
                    </div>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">
                            Senha:
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span class="password-toggle mt-3" onclick="togglePassword()">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                    <button class="btn btn-warning w-100" Entrar>Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            let passwordInput = document.getElementById('password');
            let icon = document.querySelector(".password-toggle i");

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = 'password';
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        }
    </script>

</body>

</html>