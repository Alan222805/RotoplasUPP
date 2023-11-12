<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos_signin.css">
</head>
<body>
    <article class="container_image">
        <img src="Rotoplas/Logo_de_Rotoplas.svg.png" alt="Logo_de_Rotoplas">
    </article>

    <div class="container">
        <div class="inputs">
            <label class="input__label">Username</label>
            <input type="text" placeholder="Enter your username" class="input" name="text" type="text" required>
        </div>

        <div class="inputs">
            <label class="input__label">Correo</label>
            <input type="email" placeholder="Enter your email" class="input" name="text" type="text" required>
        </div>

        <div class="inputs">
            <label class="input__label">Contraseña</label>
            <input type="password" placeholder="Enter your password" class="input" name="text" type="text" required>
        </div>
    </div>

    <div class="container_buttons">
        <div class="container_button_MT">
            <button class="button_MT">Registrarse</button>
        </div>
        <div class="container_button_MT">
            <legend>¿Ya tienes cuenta?</legend>
            <button class="button_MT">Iniciar Sesión</button>
        </div>
    </div>
</body>
</html>
