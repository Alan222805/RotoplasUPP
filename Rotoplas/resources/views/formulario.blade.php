<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            display: block;
            margin: 10px;
        }

        label input {
            width: 300px;
            height: 50px;
        }

        form .enviar {
            width: 100px;
            height: 50px;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <form method="POST" action="{{ url('create') }}">
        @csrf
        <label for="">
            <input name="nom" placeholder="Nombre" type="text">
        </label>
        <label for="">
            <input name="dir" placeholder="Dirección" type="text">
        </label>
        <label for="">
            <input name="tel" placeholder="Teléfono" type="text">
        </label>
        <label for="">
            <input name="em" placeholder="Email" type="text">
        </label>
        <label for="">
            <input name="ed" placeholder="Edad" type="number">
        </label>
        <label for="">
            <input name="gen" placeholder="Genero" type="text">
        </label>

        <input class="enviar" type="submit">
    </form>
</body>

</html>
