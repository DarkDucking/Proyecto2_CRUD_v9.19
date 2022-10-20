<x-template titulo="Create Pokemon">
    <div id="create-form">
        <div class='fieldset'>
            <legend>Registra un nuevo pokemon</legend>
            <form action="/pokemon" method="POST">
            @csrf
            <div class='row'>
                <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" placeholder="Nombre del pokemon" value="{{ old('nombre') }}"></label>
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <br>
            <div class='row'>
                <label for="tipo1">Tipo Primario</label>
                    <select name="tipo1" id="tipo1">
                        <option value="Bicho">Bicho</option>
                        <option value="Dragon">Dragon</option>
                        <option value="Electrico">Electrico</option>
                        <option value="Hada">Hada</option>
                        <option value="Lucha">Lucha</option>
                        <option value="Fuego">Fuego</option>
                        <option value="Volador">Volador</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Planta">Planta</option>
                        <option value="Normal">Normal</option>
                        <option value="Tierra">Tierra</option>
                        <option value="Hielo">Hielo</option>
                        <option value="Roca">Roca</option>
                        <option value="Acero">Acero</option>
                        <option value="Agua">Agua</option>
                        <option value="Psiquico">Psiquico</option>
                        <option value="Siniestro">Siniestro</option>
                        <option value="Veneno">Veneno</option>
                    </select>
            </div>
            <br>
            <div class='row'>
                <label for="tipo2">Tipo Secundario</label>
                    <select name="tipo2" id="tipo2">
                        <option value="Bicho">Bicho</option>
                        <option value="Dragon">Dragon</option>
                        <option value="Electrico">Electrico</option>
                        <option value="Hada">Hada</option>
                        <option value="Lucha">Lucha</option>
                        <option value="Fuego">Fuego</option>
                        <option value="Volador">Volador</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Planta">Planta</option>
                        <option value="Normal">Normal</option>
                        <option value="Tierra">Tierra</option>
                        <option value="Hielo">Hielo</option>
                        <option value="Roca">Roca</option>
                        <option value="Acero">Acero</option>
                        <option value="Agua">Agua</option>
                        <option value="Psiquico">Psiquico</option>
                        <option value="Siniestro">Siniestro</option>
                        <option value="Veneno">Veneno</option>
                        <option value="--------------">Sin Tipo</option>
                    </select>
            </div>
            <br>
            <div class='row'>
                <label for="grupo_huevo">Grupo huevo <input type="text" name="grupo_huevo" id="grupo_huevo" placeholder="Grupo huevo al que pertenece" value="{{ old('grupo_huevo') }}"></label>
                    @error('grupo_huevo')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <br>
            <div class='row'>
                <label for="numero">Numero en la pokedex nacional <input type="text" name="numero" id="numero"  placeholder="No° de la pokedex" value="{{ old('numero') }}"></label>
                    @error('numero')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <br>
            <div class='row'>
                <label for="img">URL de la imagen <input type="text" name="img" id="img" placeholder="Url de la imagen del pokemon" value="{{ old('img') }}"></label>
                    @error('img')
                        <i>{{ $message }}</i>
                    @enderror
            </div>
            <input type="submit" value="Registrar Pokemon">
            </form>
        </div>
    </div>
</x-template>