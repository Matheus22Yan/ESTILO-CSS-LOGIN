<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh+oOVwVF4tpIr+RxEQhxROYVqLTa1RIbnfCe59XIcW3gGNFMAyT5AykVcUp<\ctrl61>wM4d/381fQ4DXw"  
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('hospital.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            /* 100% da altura da viewport */
        }

        .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;

        }

        .card {
            background-color: #fff;
            /* Fundo branco */
        }

        .btn-primary {
            background-image: linear-gradient(to right, #2196F3, #0B80FF);
            /* Gradiente de azul */
            color: #fff;
        }

        .titulo-login {
            color: #2196F3;
        }
    </style>
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="titulo-login"><i class="fas fa-stethoscope"></i> Login Restrito</h3>
                            <form action="login.php" method="POST">
                                <div class="mb-3">
                                    <label>Usuário</label>
                                    <input type="text" name="usuario" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>