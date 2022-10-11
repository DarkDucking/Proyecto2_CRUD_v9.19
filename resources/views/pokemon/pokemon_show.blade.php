<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style css -->
    <link rel="stylesheet" href="\css\style.css">
    <title>Show Pokemon</title>
</head>
<body>
    <div class="boton-enlace">
        <a href="/pokemon">
            <input type="submit" value="Ver Pokemons">
        </a>

        <a href="/pokemon/{{ $pokemon->id }}/edit">
            <input type="submit" value="Editar Pokemon">
        </a>

        <a href="/pokemon/create">
            <input type="submit" value="Registrar Pokemon">
        </a>
    </div>
    <div id="create-form">
        <div class="fieldset">
            <legend>{{ $pokemon->nombre }}</legend>
            <form>
                <h2>Numero en la pokedex: {{ $pokemon->numero }} </h2>
                <h2>Tipo primario: {{ $pokemon->tipo1 }} </h2>
                <h2>Tipo secundario: {{ $pokemon->tipo2 }} </h2>
                <h2>Grupo Huevo: {{ $pokemon->grupo_huevo }} </h2>
                <a><img src= {{ $pokemon->img }}></a>
            </form>
        </div>
    </div>
    

    
</body>
</html>