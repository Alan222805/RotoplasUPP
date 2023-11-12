<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log-in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos_login.css">
</head>
<body>
    <section class="parent">
        <div class="container">
            <img src="Rotoplas/Logo_de_Rotoplas.svg.png" alt="Logo_Rotoplas">
            <form method="post" action="/" style="margin-top: 15px;">
                <label  style="display: block; margin-bottom: 5px;">
                    <input class="datos" type="email"
                    placeholder="Ingresa tu correo" id="correo" required>
                </label>

                <label id="x">
                    <input class="datos" type="password" id="Contraseña"
                    placeholder="Ingresa tu Contraseña"
                    style="margin-bottom: 10px;" required>
                </label>


                <span class="spans"  style="display: block; margin-top: 10px;">
                    <input class="buttons" type="submit" value="Iniciar Sesión">
                </span>
                <span class="spans" style="display: block; margin-top: 5px;">
                    <legend style="font-size: 12px;">¿No tienes cuenta?</legend>
                    <a href="signin.html">
                        <input class="buttons" type="button" value="Registrarse">
                    </a>
                </span>
                <a href="" style="text-decoration: none; display: block;">Recuperar Contraseña</a>
            </form>
        </div>
    </section>

</div>
</body>
</html>
