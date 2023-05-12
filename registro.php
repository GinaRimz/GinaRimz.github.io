<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro MAE</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG/logo.jpeg" type="image/x-icon">
</head>

<body>

    <div class="box">
        <span class="borderLine"></span>


        <h2>Inicia Sesión</h2>
        <div class="inputBox">
            <form action="PHP/registro_usuario_be.php" method="post">
                <input type="text" name="correo" required="required">
                <span>Correo</span>
                <i></i>
                </div>
                <div class="inputBox">
                <input type="password" name="contrasena" required="required">
                <span>Contraseña</span>
                <i></i>
                </div>
                <br>
                <input type="submit" value="Login">
            </form>

    </div>

</body>

</html>