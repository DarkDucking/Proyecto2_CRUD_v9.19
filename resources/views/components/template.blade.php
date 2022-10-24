<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style css -->
    <link rel="stylesheet" href="\css\style.css">
    <title>{{ $titulo }}</title>
</head>
<body>
    <x-navigationmenu>
        <a href="/dashboard">
            <input type="submit" value="Regresar al Dashboard">
        </a>

        <a href="/pokemon">
            <input type="submit" value="Ver Pokemons">
        </a>

        <a href="/pokemon/create">
            <input type="submit" value="Registrar Pokemon">
        </a>
    </x-navigationmenu>

    {{ $slot }}
</body>
</html>