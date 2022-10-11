<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style css -->
    <link rel="stylesheet" href="\css\style.css">
    <title>Edit Pokemon</title>
</head>
<body>
    <div class="boton-enlace">
        <a href="/pokemon">
            <input type="submit" value="Ver Pokemons">
        </a>

        <a href="/pokemon/create">
            <input type="submit" value="Registrar Pokemon">
        </a>
    </div>
    <div id="create-form">
        <div class='fieldset'>
        <legend>Editar Pokemon</legend>
            <form action="/pokemon/{{ $pokemon->id }}" method="POST">
            @csrf
            @method('PATCH')
            <div class='row'>
                <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" value={{ $pokemon->nombre }}></label>
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <br>
            <div class='row'>
                <label for="tipo1">Tipo Primario</label>
                    <select name="tipo1" id="tipo1">
                        <option value="Bicho" {{  $pokemon->tipo1 == "Bicho" ? 'selected' : ''  }}>Bicho</option>
                        <option value="Dragon" {{  $pokemon->tipo1 == "Dragon" ? 'selected' : ''  }}>Dragon</option>
                        <option value="Electrico" {{  $pokemon->tipo1 == "Electrico" ? 'selected' : ''  }}>Electrico</option>
                        <option value="Hada" {{  $pokemon->tipo1 == "Hada" ? 'selected' : ''  }}>Hada</option>
                        <option value="Lucha" {{  $pokemon->tipo1 == "Lucha" ? 'selected' : ''  }}>Lucha</option>
                        <option value="Fuego" {{  $pokemon->tipo1 == "Fuego" ? 'selected' : ''  }}>Fuego</option>
                        <option value="Volador" {{  $pokemon->tipo1 == "Volador" ? 'selected' : ''  }}>Volador</option>
                        <option value="Fantasma" {{  $pokemon->tipo1 == "Fantasma" ? 'selected' : ''  }}>Fantasma</option>
                        <option value="Planta" {{  $pokemon->tipo1 == "Planta" ? 'selected' : ''  }}>Planta</option>
                        <option value="Normal" {{  $pokemon->tipo1 == "Normal" ? 'selected' : ''  }}>Normal</option>
                        <option value="Tierra" {{  $pokemon->tipo1 == "Tierra" ? 'selected' : ''  }}>Tierra</option>
                        <option value="Hielo" {{  $pokemon->tipo1 == "Hielo" ? 'selected' : ''  }}>Hielo</option>
                        <option value="Roca" {{  $pokemon->tipo1 == "Roca" ? 'selected' : ''  }}>Roca</option>
                        <option value="Acero" {{  $pokemon->tipo1 == "Acero" ? 'selected' : ''  }}>Acero</option>
                        <option value="Agua" {{  $pokemon->tipo1 == "Agua" ? 'selected' : ''  }}>Agua</option>
                        <option value="Psiquico" {{  $pokemon->tipo1 == "Psiquico" ? 'selected' : ''  }}>Psiquico</option>
                        <option value="Siniestro" {{  $pokemon->tipo1 == "Siniestro" ? 'selected' : ''  }}>Siniestro</option>
                        <option value="Veneno" {{  $pokemon->tipo1 == "Veneno" ? 'selected' : ''  }}>Veneno</option>
                    </select>
            </div>
            <br>

            <div class='row'>
                <label for="tipo2">Tipo Secundario</label>
                    <select name="tipo2" id="tipo2">
                    <option value="Bicho" {{  $pokemon->tipo2 == "Bicho" ? 'selected' : ''  }}>Bicho</option>
                        <option value="Dragon" {{  $pokemon->tipo2 == "Dragon" ? 'selected' : ''  }}>Dragon</option>
                        <option value="Electrico" {{  $pokemon->tipo2 == "Electrico" ? 'selected' : ''  }}>Electrico</option>
                        <option value="Hada" {{  $pokemon->tipo2 == "Hada" ? 'selected' : ''  }}>Hada</option>
                        <option value="Lucha" {{  $pokemon->tipo2 == "Lucha" ? 'selected' : ''  }}>Lucha</option>
                        <option value="Fuego" {{  $pokemon->tipo2 == "Fuego" ? 'selected' : ''  }}>Fuego</option>
                        <option value="Volador" {{  $pokemon->tipo2 == "Volador" ? 'selected' : ''  }}>Volador</option>
                        <option value="Fantasma" {{  $pokemon->tipo2 == "Fantasma" ? 'selected' : ''  }}>Fantasma</option>
                        <option value="Planta" {{  $pokemon->tipo2 == "Planta" ? 'selected' : ''  }}>Planta</option>
                        <option value="Normal" {{  $pokemon->tipo2 == "Normal" ? 'selected' : ''  }}>Normal</option>
                        <option value="Tierra" {{  $pokemon->tipo2 == "Tierra" ? 'selected' : ''  }}>Tierra</option>
                        <option value="Hielo" {{  $pokemon->tipo2 == "Hielo" ? 'selected' : ''  }}>Hielo</option>
                        <option value="Roca" {{  $pokemon->tipo2 == "Roca" ? 'selected' : ''  }}>Roca</option>
                        <option value="Acero" {{  $pokemon->tipo2 == "Acero" ? 'selected' : ''  }}>Acero</option>
                        <option value="Agua" {{  $pokemon->tipo2 == "Agua" ? 'selected' : ''  }}>Agua</option>
                        <option value="Psiquico" {{  $pokemon->tipo2 == "Psiquico" ? 'selected' : ''  }}>Psiquico</option>
                        <option value="Siniestro" {{  $pokemon->tipo2 == "Siniestro" ? 'selected' : ''  }}>Siniestro</option>
                        <option value="Veneno" {{  $pokemon->tipo2 == "Veneno" ? 'selected' : ''  }}>Veneno</option>
                        <option value="--------------" {{  $pokemon->tipo2 == "--------------" ? 'selected' : ''  }}>Sin Tipo</option>
                    </select>
            </div>
            <br>

            <div class='row'>
                <label for="grupo_huevo">Grupo huevo <input type="text" name="grupo_huevo" id="grupo_huevo" value={{ $pokemon->grupo_huevo }}></label>
                    @error('grupo_huevo')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <br>

            <div class='row'>
            <label for="numero">Numero en la pokedex nacional <input type="number" name="numero" id="numero" value={{ $pokemon->numero }}></label>
                @error('numero')
                    <i>{{ $message }}</i>
                @enderror
            </div>
            <br>

            <div class='row'>
            <label for="img">URL de la imagen <input type="text" name="img" id="img" value={{ $pokemon->img }}></label>
                @error('img')
                    <i>{{ $message }}</i>
                @enderror
            </div>
            <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>