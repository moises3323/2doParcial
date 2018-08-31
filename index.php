<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="jumbotron boxlogin">
    <form method="post" action="">
        <div class="text-md-center">
            <img src="img/imgchida.png" height="50" width="50"/>
        </div>
        <h3 class="text-center">Creando Usuarios</h3>
        <input placeholder="Usuario" name="usuario" id="usuario" type="text" class="form-control" required>
        <br>
        <input placeholder="Contraseña" name="contrasenia" id="contrasenia" type="password" class="form-control" required>
        <br>
        <div class="text-md-center">
            <input type="submit" class="btn btn-success text-center" value="Entrar">
        </div>
    </form>
</div>
</body>
</html>