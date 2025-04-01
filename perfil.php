<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página ADM - Locadora de Automóveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body class="container py-4">
    <div class="container py4">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Automóveis</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                        <span class="welcome-text">
                            Bem-vindo, <strong>Administrador</strong>
                        </span>
                        <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row same-height-row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Adicionar novo automóvel 🚗</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="madelo" class="form-label">
                                    Modelo:
                                </label>
                                <input type="text" class="form-control" name="modelo" required>
                                <div class="invalid-feedback">
                                    Informe um modelo válido!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Placa" class="form-label">
                                    Placa:
                                </label>
                                <input type="text" class="form-control" name="modelo" required>
                                <div class="invalid-feedback">
                                    Informe uma placa válido!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">
                                    Tipo:
                                </label>
                                <select name="tipo" id="tipo" class="form-select" required>
                                    <option value="empty" disabled selected></option>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="adicionar">Adicionar Veículo</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="nrrds-validation" novalidate>
                            <div class="mb-3">
                            <label for="tipo" class="form-label">
                                    Tipo de veículo:
                                </label>
                                <select name="tipo" id="tipo" class="form-select" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                            <label for="quantidade" class="form-label">
                                    Quantidade de dia:
                                </label>
                                <input type="Number" class="form-control" name="dias_calculos" value="1" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>