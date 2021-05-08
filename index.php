<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <center>
        <h1><i>Login</i></h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <form action="ClaseValidadLogin.php" method="post">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <br>
                    <center>
                        <button type="submit" class="btn btn-success" name="btnlogin">Enviar</button>
                    </center>


                </form>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>