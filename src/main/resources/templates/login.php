<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center align-items-center vh-100">
            <div class="col-lg-4 col-sm-8">
                <h1 class="text-center">Monitorando</h1>
                <div class="card bg-body-tertiary">
                    <div class="card-body">
                        <h1 class="h5 mb-3 fw-normal">Entre com sua conta</h1>
                        <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control shadow-none" id="floatingInput" placeholder="Usuário" required>
                                <label for="floatingInput">Usuário</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control shadow-none" id="floatingPassword" placeholder="Senha" required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                            <div class="row">
                                <div class="col d-grid gap-2">
                                    <a href="index.php" class="btn btn-outline-dark">SIGAA</a>
                                </div>
                                <div class="col d-grid gap-2">
                                    <button type="submit" class="btn btn-dark">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card bg-body-tertiary mt-3">
                    <div class="card-body">
                        <p class="mb-3 fw-normal">Não possui um conta? <a href="cadastro.php">Cadastre-se</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>